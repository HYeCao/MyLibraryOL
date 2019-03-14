<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <style>
        body{
        background-image:url("img/bg.jpg");
            background-size:cover;
        }
        .box
        {
         height:500px;
            width:1500px;
        }
        .wrap{
            background-color: #FFFFFF;
            margin:90px  auto;
            width: 300px;
            height:300px;
            font-family: 微软雅黑;
            text-align: center;
            float:left;
        }
        .content
        {
            font-family: 微软雅黑;
            text-align: left;
            padding:3px;

        }
        .title
        {
            font-family: 微软雅黑;
            text-align: left;
            color: #c5964f;

        }
        .picture{
            margin:90px  auto;
            width: 300px;
            height:300px;
           float:left;
        }
        </style>
</head>
<body>
<div class="box">
<!--<div><img src="img/book.png" class="picture"></div>-->
    <?php $con=mysqli_connect("localhost","root","root","bibliosoft");
    $sql="select max(News_id)as id from news_table";
    $res=mysqli_query($con,$sql);
    $ress=mysqli_fetch_array($res);
    $id=$ress['id'];
    $sqls="select * from news_table where News_id='$id'";
    $res1=mysqli_query($con,$sqls);
    $res2=mysqli_fetch_array($res1);


    ?>
    <div class="box">
        <div><img src="img/book.png" class="picture" alt="Wrong"></div>

        <div class="wrap" >

            <p class="title"><strong><?php echo $res2['News_title']?></strong></p>
            <hr>
            <p class="content"><?php echo $res2['News_content']?></p>

        </div>
    </div>


</div>
</div>

</body>
</html>