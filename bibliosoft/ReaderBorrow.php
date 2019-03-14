<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        a{
            text-decoration: none;
        }
        .bg {
            background: url("img/p3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 500px;
        }
        /*.body{background:url("img/p3.jpg");*/
            /*background-size: 100%;background-attachment: fixed;}*/
        /*ul.upper-latin {list-style-type: upper-latin}*/
        /*.box{margin:50px;padding:40px;margin-top:30px;width:1700px;height:100%;background-color:rgba(255,255,255,0.5)}*/
        /*.itembox {padding:15px;width: 2000px}*/
        /*.itembox_left{width:1500px;display:inline-block;}*/
        /*.itembox_right{display:inline-block;}*/
        /*.item_question{padding-left: 20px;font-size:140%}*/
        /*.item_ID{text-align:center;font-size: 150%;color:red;padding-bottom: 50px}*/
        /*.item_answer{font-size:120%}*/
        /*.item_answer_option{display:inline-block;width:1250px}*/
        /*.item_answer_count{display:inline-block;width:200px}*/
        /*.item_button{color: black;text-decoration:none;font-size:120%;*/
            /*width:7em;text-decoration:none;padding:0.2em 0.6em;border-right:0px}*/
        /*.search_box{padding:20px;height:35px;background-color:rgba(255,255,255,0.7);width: 1600px;border-radius: 5px}*/
        /*.search_from{padding-left:200px;width: 1200px;}*/
        /*.search_input{width: 800px;height:25px;font-size: 16px;border-radius: 5px;border: 1px solid rgb(180, 180, 180);}*/
        /*.search_button{ text-align:center; width: 300px;height:32px;font-size: 18px;margin-left: -10px;*/
            /*letter-spacing:1.5em;border-radius: 4px;border: 1px solid rgb(180, 180, 180); }*/
        a:hover{color:#ff3300}

        .add_box{

            padding:20px;
            margin:50px;
            margin-top:0px;
            margin-left: 400px;
            width:800px;
            font-size: 35px;
        }
        .add_button{
            width:200px;
            height: 25px;
            margin-left: 70px;
            margin-top: 15px;
            font-size: 20px;
            border-radius: 8px;
        }
        .add_input{
            width:450px;
            height:25px;
            margin-top: 10px;
            display:inline-block;
        }
        .add_left{
            width:150px;
            display:inline-block;
        }
    </style>

    <meta charset="UTF-8">
    <title>Borrow</title>
</head>
<body class="bg">
<h2 style="text-align: center;font-size: 200%;font-family: 楷体">BorrowBooks</h2>
<!--<div style="margin: 0 auto;width: 500px;">-->
<!--    <a href="SearchReaders.php" style="text-align: center;font-size: 170%;font-family: 楷体">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearchReaders</a>-->
<!--</div>-->
<hr>
<!--<div class="box">-->
<!--    <div class="search_box">-->
<!--        <form class="search_from" action="ReaderSearchOver.php?act=seek" method="post">-->
<!--            <span>-->
<!--                <input class="search_input" type="text" name="readerName" placeholder="please input the name of reader that wants to borrow books ">-->
<!--                <input class="search_button" type="submit" value="search">-->
<!--            </span>-->
<!--        </form>-->
<!--    </div>-->

    <div class="add_box">
        <form action="SearchOver.php?act=seek" method="post" onsubmit="return checkForm()">

            <ul style="list-style:none">
                <li>
                    <div class="add_left">ReaderID:</div>
                    <div class="add_input"><input id="readerID" class="add_input" type="text" name="readerID" value="<?php session_start();
                        echo $_SESSION['readerID'] ?>" ></div>

                </li>
                <li>
                    <div class="add_left">BookID:</div>
                    <div class="add_input"><input id="bookID" class="add_input" type="text" name="bookID" ></div>
                </li>
                <li>
                    <input class="add_button" type="submit" value="Borrow" align="center">
                    <input class="add_button" type="reset" value="Reset" align="center">
                </li>
            </ul>
        </form>
    </div>

<!--</div>-->

<script type="text/javascript">
    function checkForm(){
        var tag = false;
        var Name = document.getElementById("readerID").value;
        if(Name == "" || Name == null){
            alert("Input cannot be empty!");
        }else{
            tag = true;
        }
        return tag;
    }
</script>

</body>
</html>
