<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>小型制冷装置</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/xxzl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>小型制冷装置</h1>
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
                    <label for="inputPassword3" class="col-sm-2 control-label">U(单位：V)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="u" placeholder="请输入电压值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">I(单位：A)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="i" placeholder="请输入电流值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">P(电)(单位：W)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="p" placeholder="请输入电功率">
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
                    <td>历史数据</td>
                    <td>a实</td>
                    <td>a理论</td>
                    <td>F实</td>
                    <td>F理论</td>
                    <td>Ba(%)</td>
                    <td>BF(%)</td>
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