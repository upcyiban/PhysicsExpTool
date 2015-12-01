<?php
include "iapp.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>牛顿第二定律</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/n2dl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>牛顿第二定律</h1>
    <br>
    <div class="panel panel-default">
        注释：<br>
        <p>本计算结果保留四位小数，在记录数据请使用修约原则来保留三位小数。</p>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">x(单位：mm)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="x" placeholder="请输入光电门的宽度x">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">t1(单位：ms)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="t1" placeholder="请输入第一次通过光电门的时间t1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">t2(单位：ms)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="t2" placeholder="请输入第二次通过光电门的时间t2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">s(单位：m)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="s" placeholder="请输入两个光电门的距离s">
                    </div>
                </div>
                <h2>当合外力不变时计算M*a</h2>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">M(单位：kg)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="M" placeholder="请输入系统的总质量">
                    </div>
                </div>
                <h2>当系统总质量不变时计算F/a</h2>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">F(单位：N)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="F" placeholder="请输入外力F">
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="n2dlbtn" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>

            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>光电门的宽度x</th>
                    <th>第一次通过光电门的时间t1</th>
                    <th>第二次通过光电门的时间t2</th>
                    <th>两个光电门的距离s</th>
                    <th>系统的总质量(外力F)</th>
                    <th>计算结果</th>
                </tr>
                </thead>
                <tbody id="record">
                </tbody>
            </table>
        </div>
    </div>

    <footer class="text-center">
        <p>Powered by upcyiban</p>
    </footer>
</div>
</body>
</html>