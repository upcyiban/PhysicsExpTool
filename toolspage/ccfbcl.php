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
    <script src="../js/ccfbcl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>霍尔效应及磁场分布测量</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="panel panel-default"  >
                <p style="text-align: left"><strong>注释：</strong></p>
                <ul style="text-align: left">
                    <li>在使用之前，我们建议先把您计算的数值和工具计算的数值相校对，确认正确后使用</li>
                    <li>实验类型提示：1为载流线圈，2为亥姆霍兹</li>
                    <li>类型1时填写所有数据，实验2仅将B1、B2填写前两个数据</li>
                    <li>请注意对应物理量的单位</li>
                    <li>本计算结果保留四位小数，在您列表记录数据请使用修约原则来保留三位小数。</li>
                </ul>
            </div>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">实验类型</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="c" placeholder="填1或2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">X'/M or B1/mT</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="x" placeholder="测量实际位置x' 或 B1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">B/mT or B2/mT</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="b" placeholder="测量值B 或 B2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">N/匝</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="n" placeholder="匝数（实验2无需填写）">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">R/M</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="r" placeholder="载流线圈半径（实验2无需填写）">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">I/A</label>
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
                    <th style="word-break: break-all;text-align: center">实验类型</th>
                    <th style="word-break: break-all;text-align: center">输入数据</th>
                    <th style="word-break: break-all;text-align: center">相对误差 或 B1+B2</th>
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