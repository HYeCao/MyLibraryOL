<?php

$servername="localhost";
$username = "root";
$password = "root";
$database="bibliosoft";

// 创建连接
$conn = mysqli_connect($servername, $username, $password,$database);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$readerName=$_POST['readerName'];


function isEmail($email){
    $mode = '/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/';
    if(preg_match($mode,$email)){
        return true;
    }
    else{
        return false;
    }
}


if(isEmail($email)==false) {
    echo "<script language=javascript>alert('wrong e-mail format');location.href='ReaderChangePW.php';</script>";
}else{
    $sql = "select * from `reader_table` where readerName='$readerName'";
}

$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$password=$row["readerPassword"];
$readerEmail=$row["readerEmail"];
if($num==0){//该邮箱尚未注册！
    echo "<script language=javascript>alert('you have not register yet');location.href='ReaderChangePW.php';</script>";
exit;
}else if(strcmp($readerEmail,$email)!=0){
    echo "<script language=javascript>alert('readerName and mailbox does not match');location.href='ReaderChangePW.php';</script>";

}else{
    //发送邮件
    require './mailer/class.phpmailer.php';
    require './mailer/class.smtp.php';
    date_default_timezone_set('PRC');
//ignore_user_abort();//自动发送邮件
//set_time_limit(0);
//$interval = 60*1440;//间隔时间，现在是1天
//do{

            $a = $email;
            $mail = new PHPMailer();
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.qq.com';
            $mail->Port = 465;
            $mail->Hostname = 'localhost';
            $mail->CharSet = 'UTF-8';
            $mail->FromName = 'Bibliosoft';
    $mail->Username = '1187318950@qq.com';
    $mail->Password = 'ubkmgmhpikpxfjjb';
    $mail->From = '1187318950@qq.com';
            $mail->isHTML(true);
            $mail->addAddress($a, '');
            $mail->Subject = '找回密码,您的密码是(Your password :)';
            $mail->Body = "$password";
//		$mail->addAttachment('./src/20151002.png','test.png');
            $status = $mail->send();
            if ($status) {
                echo "<script>alert('success!')</script>";
                header("refresh:0;url=index.php");
            } else {
                echo '发送邮件失败，错误信息未：' . $mail->ErrorInfo;
            }
//		sleep($interval);//休眠1天
}



?>