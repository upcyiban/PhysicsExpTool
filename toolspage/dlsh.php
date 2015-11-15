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
    <script src="../js/main.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>动量守恒定律的验证</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">V1</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var1" placeholder="输入v1的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">V2</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var2" placeholder="输入v2的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">V10</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var2" placeholder="输入v10的值">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">V20</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var2" placeholder="输入v20的值">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="sfysbtn" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <div class="answer">
答案:<span id="sfysanswer"></span>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>V1</th>
                        <th>V2</th>
                        <th>V10</th>
                        <th>V20</th>
                        <th>P0</th>
                        <th>P1</th>
                        <th>百分比误差</th>
                        <th>恢复系数e（限弹性碰撞）</th>
                        <th>动能比R（限非弹性碰撞）</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="record0">

                    </tr>
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