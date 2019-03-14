<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search books</title>
    <style>
        .body{background:url("img/p3.JPG");
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
</head>
<body class="body" >
    <?php include ('ReaderBorrowBooks.php');
    // 1. 链接数据库
    $borrowID="borrowID";
    $bookID="bookID";
    $readerName="root";
    $readerPassword="root";
    $startTime="startTime";
    $endTime="endTime";
    $isback="isback";
    $fineID="fineID";
    $debtDays="debtDays";
    $database="bibliosoft";
    $servername="localhost";

    // 创建连接
    $conn = new mysqli($servername,$readerName,$readerPassword,$database);

    // 检测连接
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
<div class="box">
    <div class="search_box">
        <form class="search_from" action="lib_SearchOver.php?act=seek" method="post">
            <span>
                <input class="search_input" type="text" name="bookName" placeholder="please input the name of book that you want to search ">
                <input class="search_button" type="submit" value="search">
            </span>
        </form>
    </div>
</div>

</body>
</html>