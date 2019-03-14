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
    $result=mysqli_query($con,"SELECT * FROM  bookinfor WHERE bookID='$id'");
    if(mysqli_error($con)){
        die('can not connect bibliosoft');
    }
    //获取结果数组
    $result_arr=mysqli_fetch_assoc($result);
}else{
    die('id not define');
}
?>
<form action='lib_revise_do.php?' onSubmit="return edit()" method='post'>
	<label>ID：      </label><input type="text" name="id" value="<?php echo $result_arr['bookID']?>" readonly="readonly">
	<br/>
    <label>Name：      </label><input type="text" name="name" value="<?php echo $result_arr['bookName']?>" required="required">
	<br/>
    <label>Author：    </label><input type="text" name="author" value="<?php echo $result_arr['author']?>" required="required">
	<br/>
    <label>Publisher： </label><input type="text" name="publisher" value="<?php echo $result_arr['publisher']?>" required="required">
    <br/>
	<label>ISBN：      </label><input type="text" name="isbn"  value="<?php echo $result_arr['ISBN']?>">
    <br/>
	<label>Price：     </label><input type="text" name="price" value="<?php echo $result_arr['bookPrice']?>"required="required">
    <br/>
	<label>Type：     </label> <select class="form_select" style="height:22px;width: 160px "  name="type">
        <option value="0" name="type">please select books' type</option>
        <?php
        $con=mysqli_connect("localhost","root","root","bibliosoft");
        $sqli2="select * from book_category ";
        //        echo $sqli2;
        $result2 = mysqli_query($con,$sqli2);
        //        print_r($result);
        while($row1 = mysqli_fetch_array($result2))
        {
            echo '<option value="' . $row1['type'] . '" >' . $row1['type'] . '</option>';
        }

        ?>
    </select>
    <br/>
	<label>Appointed：  </label><input type="text" name="appointed" value="<?php echo $result_arr['isAppointed']?>"readonly="readonly">
	<br/>
	<label>Borrowed：  </label><input type="text" name="borrowed" value="<?php echo $result_arr['isBorrowed']?>" readonly="readonly">
	<br/>
	<label>Location：  </label>  <select class="form_select" style="height:22px;width: 160px " name="location">
        <option value="0" name="location">please select books' location</option>
        <?php
        $con=mysqli_connect("localhost","root","root","bibliosoft");
        $sqli="select * from book_location ";
        echo $sqli;
        $result = mysqli_query($con,$sqli);
        //        print_r($result);
        while($row = mysqli_fetch_array($result))
        {
            echo '<option value="' . $row['location1'] ."-".$row['location2']."-".$row['location3']. '" name="location">' . $row['location1'] ."-".$row['location2']."-".$row['location3']. '</option>';
        }

        ?>
    </select>
    <br/>
    <button type="submit" style="font-size:18px">Revise</button>
	<button type="reset" style="font-size:18px">Reset</button>
</form>
</body>
</html>