<?php
include "iapp.php";
?>
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
<div id="container" class="container-fluid">
    <h1>大物实验数据<br>辅助处理工具</h1>

    <p class="sta">
        &nbsp;当前已开发 <span>7</span> 个工具&nbsp;
    </p>
    <!--    <div class="search">-->
    <!--        <input class="searchinput" type="text">&nbsp;&nbsp;<button class="btn">搜索</button>-->
    <!--    </div>-->
    <div class="width-ctrl">
        <div id="warm" class="warm"></div>
        <ul id="task-list" class="task-list">
            <a href="toolspage/gscbc.php">
                <li>
                    <p class="report">光栅测量光的波长</p>
                </li>
            </a>
            <a href="toolspage/dlsh.php">
                <li>
                    <p class="report">动量守恒定律的验证</p>
                </li>
            </a>
            <a href="toolspage/n2dl.php">
                <li>
                    <p class="report">牛顿第二定律的验证</p>
                </li>
            </a>
            <a href="toolspage/fatx.php">
                <li>
                    <p class="report">电学元件的伏安特性研究</p>
                </li>
            </a>
            <a href="toolspage/gtzdgldcl.php">
                <li>
                    <p class="report">刚体转动惯量的测量</p>
                </li>
            </a>
            <a href="toolspage/rrbcl.php">
                <li>
                    <p class="report">空气热容比测量</p>
                </li>
            </a>
            <a href="toolspage/ccfbcl.php">
                <li>
                    <p class="report">亥姆霍兹</p>
                </li>
            </a>
            <a href="report.php">
                <li>
                    <p class="report">没有你想找的实验处理工具?点此反馈</p>
                </li>
            </a>
        </ul>
    </div>
    <footer class="text-center">
        <p>Powered by upcyiban</p>
    </footer>
</div>
</body>
</html>