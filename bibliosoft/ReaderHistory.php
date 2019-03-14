<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        a{
            text-decoration: none;
        }
        .bg {
            background: url("img/p2bg.jpg");
            background-size: cover;
            height: 500px;
            background-attachment: fixed;
        }
    </style>
    <meta charset="UTF-8">
    <title>Borrow</title>
</head>
<body class="bg">
<h2 style="text-align: center;font-size: 200%;font-family: 楷体">ViewHistory</h2>
<div style="margin: 0 auto;width: 500px;">
    <form method="post" action="Return.php?act=return">

        <a href="ReturnHistory.php" style="font-size: 150%;font-family: 楷体">ReturnHistory&nbsp</a>
        <a href="ReaderBorrowHistory.php" style="font-size: 150%;font-family: 楷体">&nbsp&nbsp&nbspBorrow</a>
        <a href="ReaderBHistory.php" style="font-size: 150%;font-family: 楷体">&nbsp&nbsp&nbspBorrowHistory</a>
    </form>
</div>
<hr>
</body>
</html>
