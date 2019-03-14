<!DOCTYPE html>
<html lang="en">
<head>
<!--
	<?php 
//	require 'sendemail.php';
	?>
-->
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
            background-color: white;
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
			list-style-type: none;
            border-bottom:1px solid #2788da;
        }
        .nav li{
            float:left;
            position: relative;
			list-style-type: none;
			display: inline-block;
        }
        .nav li a{
            color:#000000;
            text-decoration:none;
            padding-top:4px;
            display:block;
            width:100px;
            height:22px;
			position:relative;
            text-align:center;
            background-color:#ececec;
            margin-left:0px;
        }
        .nav li a:hover{
            background-color:#bbbbbb;
            color:#FFFFFF;
        }
        .nav li a#current{
            background-color:#2788da;
            color:#FFFFFF;
        }
		.nav li ul{
			display: none;
		}
		.nav li:hover ul{
			display: inline-block;
			position: absolute;
			background-color: aliceblue;
			width:100px;
			lest:0;
			box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
		}
		.nav li:hover ul li a{
			display: block;
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
        .footer{
            background: #98CCE7;
            margin: auto;
            position: center;
            text-align: center;
        }
		.nav li:hover ul li a{
			display:block;
			color:#000000;
            padding-top:4px;
            width:100px;
            height:22px;
            text-align:center;
            background-color:#ececec;
            margin-left:0px;
		}
		.nav li:hover ul li a:hover {
			background-color: aquamarine;
		}
    </style>
</head>
<body>
<div class="wrap"><!-- 外层盒子-->
    <div class="index">
        <div class="logout" >
            <!--登出按钮设置. -->
            <form action="index.php?act=admin"method="post" >
                <button class="login" type="submit" style="height:40px;width:100px;float: left">login out</button>
            </form>
        </div>

    </div>

    <div >
        <div class="menu">
            <ul class="nav">
                <li><a href="lib_index.php" id="current" target="show">Index</a></li>
                <li><a href="lib_reg.php" target="show">Register</a></li>
                <li><a href="lib_readerinfo.php" target="show">Readers</a></li>
				<li><a herf="####">Book</a>
				<ul>
				<li><a href="lib_SearchBooks.php" target="show" >SearchBooks</a></li>
				<li><a href="add.php" target="show" >AddBooks</a></li>
				<li><a href="lib_edit.php" target="show">EditBooks</a></li>
				<li><a href="ReaderBorrow.php" target="show">BorrowBooks</a></li>
                <li><a href="ReturnReaderSearch.php" target="show">ReturnBooks</a></li>
				</ul>
				</li>
				<li><a herf="####">Information</a>
				<ul>
                <li><a href="lib_borrowinfo.php" target="show">Borrowinfo</a></li>
                <li><a href="lib_returninfo.php" target="show">Returninfo</a></li>
				</ul>
				</li>
                <li><a href="lib_fine.php" target="show">ViewFine</a></li>
                <li><a href="lib_income.php" target="show">Income</a></li>
                <li><a href="####" >Location</a>
                    <ul>
                        <li><a href="lib_location_add.php" target="show">AddLocation</a></li>
                        <li><a href="lib_location.php" target="show">EditLocation</a></li>
                    </ul>
                </li>
                <li><a href="####" >Category</a>
                    <ul>
                        <li><a href="lib_type_add.php" target="show">AddCategory</a></li>
                        <li><a href="lib_type.php" target="show">ViewCategory</a></li>
                    </ul>
                </li>


                <li><a href="####" >News</a>
                    <ul>
                        <li><a href="lib_addnews.php" target="show">PostNews</a></li>
                        <li><a href="lib_news_list.php" target="show">EditNews</a></li>
                    </ul>
                </li>
<!--                <li><a href="#" target="show">DailyStatistics</a></li>-->
<!--                <li><a href="#" target="show">AddReaders</a></li>-->
<!--                <li><a href="#" target="show">KeepReservation</a></li>-->

            </ul>
        </div>
        <div>
            <iframe id="iframeContent" frameborder="0" src="lib_index.php" name="show"></iframe>
        </div>
        <div class="footer">
            CopyRight @2018 NPU.SPM-A2 All Rights Reserved
            &nbsp&nbsp&nbspBrowser Support:&nbspIE(9.0)&nbsp Chrome &nbspFireFox &nbsp360(7.0) &nbspSogou(6+) &nbspQQ
        </div>
    </div>
</body>
</html>