<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>电学元件的伏安特性研究</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fatx.js"></script>
</head>
<body>

<div id="container" class="container">
    <h1><strong>电学元件的伏安特性研究</strong></h1>
    <p>研究二极管正向电压和电流关系（NaN表示无解）</p>
    <br>
    <div class="panel panel-default">
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">U1(单位:V)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="U1" placeholder="输入U1的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">I1(单位:mA)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="I1" placeholder="输入I1的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">U2(单位:V)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="U2" placeholder="输入U2的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">I2(单位:mA)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="I2" placeholder="输入I2的值">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="fatxbtn" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <th style="word-break: break-all">输入数据</th>
                    <th style="word-break: break-all">A</th>
                    <th style="word-break: break-all">B</th>
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