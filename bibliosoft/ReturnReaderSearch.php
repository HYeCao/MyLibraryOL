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
        .body{background:url("img/p3.jpg");
            background-size: 100%;background-attachment: fixed;}
        ul.upper-latin {list-style-type: upper-latin}
        .box{margin:50px;padding:40px;margin-top:30px;width:1700px;height:100%;background-color:rgba(255,255,255,0.5)}
        .itembox {padding:15px;width: 2000px}
        .itembox_left{width:1500px;display:inline-block;}
        .itembox_right{display:inline-block;}
        .item_question{padding-left: 20px;font-size:140%}
        .item_ID{text-align:center;font-size: 150%;color:red;padding-bottom: 50px}
        .item_answer{font-size:120%}
        .item_answer_option{display:inline-block;width:1250px}
        .item_answer_count{display:inline-block;width:200px}
        .item_button{color: black;text-decoration:none;font-size:120%;
            width:7em;text-decoration:none;padding:0.2em 0.6em;border-right:0px}
        .search_box{padding:20px;height:35px;background-color:rgba(255,255,255,0.7);width: 1600px;border-radius: 5px}
        .search_from{padding-left:200px;width: 1200px;}
        .search_input{width: 800px;height:25px;font-size: 16px;border-radius: 5px;border: 1px solid rgb(180, 180, 180);}
        .search_button{ text-align:center; width: 300px;height:32px;font-size: 18px;margin-left: -10px;
            letter-spacing:1.5em;border-radius: 4px;border: 1px solid rgb(180, 180, 180); }
        a:hover{color:#ff3300}
    </style>

    <meta charset="UTF-8">
    <title>Borrow</title>
</head>
<body class="bg">
<h2 style="text-align: center;font-size: 200%;font-family: 楷体">ReturnBooks</h2>
<!--<div style="margin: 0 auto;width: 500px;">-->
<!--    <a href="SearchReaders.php" style="text-align: center;font-size: 170%;font-family: 楷体">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearchReaders</a>-->
<!--</div>-->
<hr>
<div class="box">
    <div class="search_box">
        <form class="search_from" action="Return.php?act=seek" method="post">
            <span>
                <input class="search_input" type="text" name="bookID" placeholder="please input the bookID that wants to return ">
                <input class="search_button" type="submit" value="search">
            </span>
        </form>
    </div>
</div>
</body>
</html>
