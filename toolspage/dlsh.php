<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
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
        <div class="panel-body">
            <br>
            <div class="panel panel-default"  >
                <p style="text-align: left"><strong>注释：</strong></p>
                <ul style="text-align: left">
                    <li>在使用之前，我们建议先把您计算的数值和工具计算的数值相校对，确认正确后使用</li>
                    <li>T11为滑行器1经过光电门1时间，T12为滑行器1经过光电门2时间，T22为滑行器2经过光电门2</li>
                    <li>动量单位是kg*(m/s)^2,因计算数值小故使用科学计数法记录，E-3是指10^-3</li>
                    <li>本计算结果保留四位小数，在您列表记录数据请使用修约原则来保留三位小数。</li>
                </ul>
            </div>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">M1/Kg</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m1" placeholder="输入m1的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">M2/Kg</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m2" placeholder="输入m2的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">T11/Ms</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="v10" placeholder="输入t11的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">T22/Ms</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="v2" placeholder="输入t22的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T12/Ms</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="v1" placeholder="输入t12的值,如果没有则填0">
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
                        <th style="word-break: break-all;text-align: center">输入数据(m1/m2/v11/v22/v12)</th>
                        <th style="word-break: break-all;text-align: center">初/末动量P0/P1(E-2)</th>
                        <th style="word-break: break-all;text-align: center">百分比误差</th>
                        <th style="word-break: break-all;text-align: center">恢复系数e(弹性)</th>
                        <th style="word-break: break-all;text-align: center">动能比R(非弹性)</th>
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