<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>霍尔效应及磁场分布测量</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>霍尔效应及磁场分布测量</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">输入类型</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="c" placeholder="1为载流线圈，2为亥姆霍兹">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">x' & B1</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="x" placeholder="测量实际位置x' 或 B1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">B & B2</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="b" placeholder="测量值B 或 B2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">N</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="n" placeholder="匝数（实验2无需填写）">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">R</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="r" placeholder="载流线圈半径（实验2无需填写）">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">I</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="i" placeholder="激励电流（实验2无需填写）">
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="ccfbcl" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <th style="text-align: center">输入数据</th>
                    <th style="text-align: center">相对误差 或 B1+B2</th>
                </tr>
                </thead>
                <tbody>
                <tr id="record">

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