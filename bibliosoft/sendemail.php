<?php
//邮件发送
//session_start();
require './mailer/class.phpmailer.php';
require './mailer/class.smtp.php';
date_default_timezone_set('PRC');
ignore_user_abort();//自动发送邮件
set_time_limit(0);
$interval = 60*1440;//间隔时间，现在是1天
do{
//    $name=$_SESSION['name'];
    $con=mysqli_connect("localhost","root","root","bibliosoft");
    $sql="select * from borrowinfor ";
    $res=mysqli_query($con,$sql);
    $dat=date('Y-m-j');
    while($result=mysqli_fetch_assoc($res)){
        $dat1=$result["endTime"];
        $s=abs(strtotime($dat1) - strtotime($dat))/60/60/24;
        if($s==1){
            $t=$result["readerName"];
            $sq="select readerEmail from reader_table where readerName='$t'";
            $re=mysqli_query($con,$sq);
            $resu=mysqli_fetch_assoc($re);
            $a=$resu["readerEmail"];
            $mail = new PHPMailer();
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->SMTPAuth=true;
            $mail->SMTPSecure ='ssl';
            $mail->Host = 'smtp.qq.com';
            $mail->Port = 465;
            $mail->Hostname = 'localhost';
            $mail->CharSet = 'UTF-8';
            $mail->FromName = 'Bibliosoft';
            $mail->Username = '1187318950@qq.com';
            $mail->Password = 'ubkmgmhpikpxfjjb';
            $mail->From = '1187318950@qq.com';
            $mail->isHTML(true);
            $mail->addAddress($a,'');
            $mail->Subject = '书籍逾期提醒';
            $mail->Body = "您有书明天到期！！请注意(You have a book that expires tomorrow! ! Please attention!!)";
//		$mail->addAttachment('./src/20151002.png','test.png');
            $status = $mail->send();
//            if($status)
//            {
////                echo '发送邮件成功'.date('Y-m-d H:i:s');
//                echo "<script language=javascript>location.href='Reader.php';</script>";
//                exit;
//
//            }
//            else
//            {
//                echo "<script language=javascript>location.href='Reader.php';</script>";
//                exit;
////                echo '发送邮件失败，错误信息未：'.$mail->ErrorInfo;
//            }
        }
    }
    echo "<script language=javascript>location.href='Reader.php';</script>";
    exit;
//    echo "<script language=javascript>location.href='Reader.php';</script>";
//    exit;
    sleep($interval);
}while(true)
?>