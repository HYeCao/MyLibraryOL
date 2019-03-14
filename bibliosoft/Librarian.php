
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Librarian</title>
    <meta name="description" content="reader wannts to pay 300 deposit ,borrw books and search books">
    <style>
        *{
            margin: 0px;
            padding:0px;
        }
        .wrap{
            height:800px;
            width:1500px;
            background-color: blue;
        }

        .index{
            margin:0px;
            padding: 0px;
            width:1500px ;
            height:250px;
            background-image: url("img/backg.jpg") ;
        }

        .nav {
            height:26px;
            border-bottom:2px solid #2788da;
        }
        .nav li{
            float:left;
            list-style-type: none;
        }
        .nav li a{
            color:#000000;
            text-decoration:none;
            padding-top:4px;
            display:block;
            width:100px;
            height:22px;

            text-align:center;
            background-color:#ececec;
            margin-left:2px;
        }
        .nav li a:hover{
            background-color:#bbbbbb;
            color:#FFFFFF;
        }
        .nav li a#current{
            background-color:#2788da;
            color:#FFFFFF;
        }
        .menu{
            background-color: #FFFFFF;
            width:2000px;
            height:30px;
        }
        #iframeContent{
            height:500px;
            width:1500px;

        }
        .logout{;
            height:250px;
            position: relative;
            left: 1400px;
            top:0px;
            bottom: 214px;
        }


    </style>
</head>

<body>
<div class="wrap"><!-- 外层盒子-->
    <div class="index">
        <div class="logout" >
            <!--登出按钮设置. -->
            <form action="index.php?act=admin" method="post" >
                <button class="login" type="submit" style="height:40px;width:100px;float: left">login out</button>
            </form>
        </div>

    </div>

    <div >
        <div class="menu">
            <ul class="nav">
                <li><a href="lib_index.php" id="current" target="show">Index</a></li>
                <li><a href="lib_SearchBooks.php" target="show" class="hover">SearchBooks</a></li>
<!--                <li><a href="#" target="show">AddBooks</a></li>-->
<!--                <li><a href="#" target="show">DeleteBooks</a></li>-->
<!--                <li><a href="#" target="show">Borrorwinfo</a></li>-->
<!--                <li><a href="#" target="show">RemindReaders</a></li>-->
<!--                <li><a href="#" target="show">DailyStatistics</a></li>-->
<!--                <li><a href="#" target="show">AddReaders</a></li>-->
<!--                <li><a href="#" target="show">KeepReservation</a></li>-->

            </ul>
        </div>

        <div>
            <iframe id="iframeContent" frameborder="0" src="libindex.html" name="show"></iframe>
        </div>
    </div>
</body>
</html>


>