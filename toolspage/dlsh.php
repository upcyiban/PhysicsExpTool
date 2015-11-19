<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no;">
    <title>动量守恒定律的验证</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/dlsh.js"></script>
</head>
<body>

<div id="container" class="container">
    <h1><strong>动量守恒定律的验证</strong></h1>
    <br>
    <div class="panel panel-default">
        注释：<br>
        <p>本计算结果保留四位小数，在记录数据请保留三位小数并请使用修约原则。</p>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">M1(单位:Kg)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m1" placeholder="输入m1的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">M2(单位:Kg)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m2" placeholder="输入m2的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T1(单位:Ms)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="v1" placeholder="输入t1的值,如果没有则填0">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">T2(单位:Ms)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="v2" placeholder="输入t2的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">T10(单位:Ms)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="v10" placeholder="输入t10的值">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="dlshbtn" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>初动量P0</th>
                        <th>末动量P1</th>
                        <th>百分比误差</th>
                        <th>恢复系数e</th>
                        <th>动能比R</th>
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