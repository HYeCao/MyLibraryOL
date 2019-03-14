<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PayDeposit</title>
    <style>
        .bg{
            background-color: #FFFFFF;
            height:500px;

        }
        h1{
            font-family: 微软雅黑;
        }
        p{
            color: #bbbbbb;
        }
    </style>
</head>
<body class="bg">

<div>
<h1>Remider:Please Pay Deposit on time!</h1>
<p>You can pay in the following ways:</p>

    <div>
        <form action="confirm_do.php?act=admin"method="post">
                <button class="confirm" type="submit">Confirm</button>
        </form>
    </div>
<img src="img/wechat.png" width="100px" height="100px" style="position:relative;top:50px;">
<img src="img/2d.png" width="100px" height="100px" style="position:relative;top:50px;">
<br>
<img src="img/pay.png" width="100px" height="100px" style="position:relative;top:50px;">
<img src="img/2d.png" width="100px" height="100px" style="position:relative;top:50px;">

</div>



</body>
</html>