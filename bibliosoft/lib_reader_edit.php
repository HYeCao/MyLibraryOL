<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ReviseBooks</title>
</head>
<style>
    label{
        font-size: 20px;
    }
    body{
        background:url("img/p3.JPG");
        background-size: 100%;
        background-attachment: fixed;
        background-repeat:no-repeat;
        background-size: cover;
    }
    input{
        margin-top: 5px;
        position: absolute;
        left: 100px;
    }
    button{
        width: 80px;
        border: 2px solid rgba(51,163,37,1.00);
        border-radius: 14%;
        margin-left: 60px;
        margin-top: 20px;
    }
</style>
<script>
    function edit(){
        var x=confirm("Do you want to revise it?");
        if(x==true){
            return true;
        }else{
            return false;
        }
    }
</script>
</head>
<body>
<?php
if(!empty($_GET['id'])){
    //连接mysql数据库
    $con=mysqli_connect("localhost","root","root","bibliosoft");

    //查找id
    $id=$_GET['id'];
//    echo $id;
    $result=mysqli_query($con,"SELECT * FROM reader_table WHERE readerID='$id'");
    if(mysqli_error($con)){
        die('can not connect bibliosoft');
    }
    //获取结果数组
    $result_arr=mysqli_fetch_assoc($result);
//    print_r($result_arr);
}else{
    die('id not define');
}
?>
<form action='lib_reader_edit_do.php?' onSubmit="return edit()" method='post'>
    <label>ID：      </label><input type="text" name="id" value="<?php echo $result_arr['readerID']?>" readonly="readonly">
    <br/>
    <label>Name：      </label><input type="text" name="name" value="<?php echo $result_arr['readerName']?>" required="required">
    <br/>
    <label>Email:    </label><input type="text" name="Email" value="<?php echo $result_arr['readerEmail']?>" required="required">
    <br/>
    <label>Tel: </label><input type="text" name="Tel" value="<?php echo $result_arr['readerTel']?>" required="required">
    <br/>
    <label>fineID: </label><input type="text" name="fineID" value="<?php echo $result_arr['fineID']?>" readonly="readonly">
    <br/>

    <button type="submit" style="font-size:18px">Revise</button>
    <button type="reset" style="font-size:18px">Reset</button>
</form>
</body>
</html>