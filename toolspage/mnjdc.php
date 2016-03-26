<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>模拟法测绘静电场</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/mnjdc.js"></script>
</head>
<body>

<div id="container" class="container">
    <h1><strong>模拟法测绘静电场</strong></h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="panel panel-default">
                <p style="text-align: left"><strong>注释：</strong></p>
                <ul style="text-align: left">
                    <li>在使用之前，我们建议先把您计算的数值和工具计算的数值相校对，确认正确后使用</li>
                    <li>请设置每组试验中r的测量个数</li>
                    <li>本计算结果保留两位小数</li>
                </ul>
            </div>
            <div class="form-horizontal" id="record">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">每组数据r的个数</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="rNum" placeholder="输入r的测量个数">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button id="submitr" class="btn btn-default">确认</button>
                        </div>
                    </div>
                </div>

            </div>
<!--            <div class="col-sm-12">-->
            <!--                <button id="sum" class="btn btn-default">计算</button>-->
            <!--            </div>-->
            <h2>历史记录</h2>
            <table class="table">
                <thead id="date">
                <tr>
                    <th style="word-break: break-all;text-align: center">r平均</th>
                    <th style="word-break: break-all;text-align: center">lnr</th>
                </tr>
                </thead>
            </table>
        </div>
        <footer class="text-center">
            <p>Powered by upcyiban</p>
        </footer>
    </div>
</div>
</body>
</html>



