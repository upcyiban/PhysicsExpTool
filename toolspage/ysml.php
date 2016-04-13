<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>动态法测量固体材料的杨氏模量</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/ysml.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>测杨氏模量</h1>
    <br>
    <div class="panel panel-default">
        <p style="text-align: left">注释：</p>
        <p style="text-align: left">数据末位有零应舍去，本计算结果保留四位小数，在记录数据请使用修约原则来保留三位小数。</p>
        <p style="text-align: left">直接输入5次L和D测量数据，每个数据用一个空格作为分隔符，不确定度需转换为百分比。</p>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">质量M(单位：g)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m" placeholder="质量M">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">材料直径D(单位：mm)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="d" placeholder="材料直径D">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">材料长L(单位：cm)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="l" placeholder="材料长度L">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">基础频率f(单位：hz)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="f" placeholder="基础频率f">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="ysmlbtn" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table-responsive">
                <thead>
                <tr>
                    <td>输入数据</td>
                    <td>D、L均值</td>
                    <td>µD、µL、µR</td>
                    <td>最终结果</td>
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