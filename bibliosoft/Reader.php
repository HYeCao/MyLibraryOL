
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reader</title>
    <meta name="description" content="reader wannts to pay 300 deposit ,borrw books and search books">
    <style>
        *{
            margin: 0px;
            padding: 0px;
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
            width:1500px;
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
                <li><a href="Readerindex.html" id="current" target="show">Index</a></li>
<!--                <li><a href="ReaderSearch.php" target="show">BorrowBooks</a></li>-->
<!--                <li><a href="ReturnReaderSearch.php" target="show">ReturnBooks</a></li>-->

                <li><a href="lib_SearchBooks.php" target="show" >SearchBooks</a></li>
<!--                <li><a href="PayDeposit.php" target="show">PayDeposit</a></li>-->
                <li><a href="ReaderHistory.php" target="show">History</a></li>
                <li><a href="ReaderAlter.php" target="show">AlterInfor</a></li>
                <li><a href="ReaderFine.php" target="show">ViewFine</a></li>
                <li><a href="ReaderAppoint.php" target="show">AppointBooks</a></li>
<!--                <li><a href="ReaderChangePW.php" target="show">RecoverPassword</a></li>-->
<!--                <li><a href="sendemail.php" target="show">Mail</a></li>-->
            </ul>
        </div>

        <div>
            <iframe id="iframeContent" frameborder="0" src="Readerindex.php" name="show"></iframe>
        </div>
    </div>

    <div class="footer">
        CopyRight @2018 NPU.SPM-A2 All Rights Reserved
        &nbsp&nbsp&nbspBrowser Support:&nbspIE(9.0)&nbsp Chrome &nbspFireFox &nbsp360(7.0) &nbspSogou(6+) &nbspQQ
   </div>

</div>
</body>
</html>


