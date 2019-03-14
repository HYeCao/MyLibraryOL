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
        button {
            width: 80px;
            border: 2px solid rgba(51, 163, 37, 1.00);
            border-radius: 12%;
            margin-left: 60px;
            margin-top: 20px;
        }
        .text{
            margin-top: 0px;
            margin-left: 90px;
        }
    </style>
    <script>
        function sub(){
            var x=confirm("Do you want to submit it?");
            if(x==true){
                return true;
            }else {
                return false;
            }
        }
    </script>
</head>
<body>

<form action="lib_addnews_do.php" onSubmit="return sub()" method="post">
    <label>Title：      </label><input type="text" name="title" required="required">
    <br/>
    <label>Content：    </label>
    <br/>
    <textarea class="text" cols="20" rows="5" wrap="hard"  name="content" required="required">
      </textarea>
<br/>

    <button type="submit" style="font-size:18px">Add</button>
    <button type="reset" style="font-size:18px">Reset</button>
</form>

</body>
</html>
