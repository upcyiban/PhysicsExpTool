<!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>空气比热容的测量</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/rrbcl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1><strong>空气比热容的测量</strong></h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="panel panel-default"  >
                <p style="text-align: left"><strong>注释：</strong></p>
                <ul style="text-align: left">
                    <li>填写时请注意单位</li>
                    <li>平均值请您按照历史数据求出</li>
                    <li>本计算结果保留四位小数，在您记录数据请请使用修约原则来处理数据。</li>
                </ul>
            </div>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Up1(单位:mV)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="up1" placeholder="输入Up1的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Up2(单位:mV)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="up2" placeholder="输入Up2的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">P0(单位:kPa)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="p0" placeholder="输入P0的值">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="rrbcl" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <th style="word-break: break-all;text-align: center">输入数据</th>
                    <th style="word-break: break-all;text-align: center">p1</th>
                    <th style="word-break: break-all;text-align: center">p2</th>
                    <th style="word-break: break-all;text-align: center">绝热指数</th>
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