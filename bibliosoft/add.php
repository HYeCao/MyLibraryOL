<!DOCTYPE HTML>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>AddBooks</title>
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
		border-radius: 12%;
		margin-left: 60px;
		margin-top: 20px;
		font-size: 18px;
</style>
<script>
	function sub(){
		var w=document.getElementById("type").value;
		console.log(w);
		var reg=/^[0-9]+.?[0-9]*$/;
		if(!reg.test(w)){
			alert("Prices must be figures.");
			document.getElementById("type").value="";
            return false;
		}
		else{
		var x=confirm("Do you want to submit it?");
		if(x==true){
			return true;
         }else {
	       return false;
}
		}
}
	</script>
	</head>
<body>
<form id="form" action="add_server.php" onSubmit="return sub()" method="post">             
    <label>Name：      </label><input type="text" name="name" required="required">
	<br/>
    <label>Author：    </label><input type="text" name="author" required="required">
	<br/>
    <label>Publisher： </label><input type="text" name="publisher" required="required">
    <br/>
	<label>ISBN：      </label><input id="isbn" type="number" name="isbn">
    <br/>
	<label>Price：     </label><input id="type" type="" name="price" required="required">
    <br/>
	<label>Location：  </label>

    <select class="form_select" style="height:22px;width: 160px " name="location">
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
	<label>Category：      </label>
    <select class="form_select" style="height:22px;width: 160px "  name="type">
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
	<label>Number：     </label><input type="number" name="number" required="required">
    <br/>
	<button type="submit" >Add</button>
	<button type="reset" >Reset</button>
</form>
</body>
</html>
