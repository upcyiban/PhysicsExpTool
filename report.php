<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>PhysicsExpTool</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1 align="center">问题反馈</h1>
    <ul class="list-group">
        <?php
        include "conn.php";
        $perNumber=10; //每页显示的记录数
        $page=@$_GET['page']; //获得当前的页面值
        $count=mysql_query("select count(*) from cyh"); //获得记录总数
        $rs=mysql_fetch_array($count);
        $totalNumber=$rs[0];
        $totalPage=ceil($totalNumber/$perNumber); //计算出总页数
        if (!isset($page)) {
            $page=1;
        } //如果没有值,则赋值1
        $startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
        $result = mysql_query("SELECT * FROM cyh");
        while ($row = mysql_fetch_array($result)) {
            echo "<a href='#' class='list-group-item' align='center'>" . $row[1] . "  " . $row[2] . "</a>";
        }
        if ($page != 1) { //页数不等于1
            ?>
            <a href="report.php?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
            <?php
        }
        for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
            ?>
            <a href="report.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
            <?php
        }
        if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
            ?>
            <a href="report.php?page=<?php echo $page + 1;?>">下一页</a>
            <?php
        }
        ?>
    </ul>
    <form id="form1" action="submit.php" method="post" class="add-task" align='center'>
        <input id="liuyan" type="text" class="new-task-inp" name="content" value="">
        <input type="submit" class="btn btn-lg btn-primary" value="留言">
    </form>
</body>
</html>
