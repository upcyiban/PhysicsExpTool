
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>落球法测量油品的黏滞系数</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/lqfcnzxs.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>落球法测量油品的黏滞系数</h1>
    <br>
    <div class="panel panel-default">
注释：<br>
        <p class="text-info">1.本实验仅计算液体密度，黏滞系数及雷诺数</p>
        <p class="text-info">2.黏滞系数需要通过作图得出的无限广延下的速度v0</p>
        <p class="text-info">3.处理数据所得的液体黏滞系数是由无限广延下的速度求得的，若想得到测试液体的黏滞系数需根据雷诺数Re对公式进行修正</p>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">T(单位：℃)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="T" placeholder="请输入实验室的温度T">
                    </div>
                </div>
                <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">v0(单位：m/s)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="v0" placeholder="请输入无限广延下的速度v0">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">m(单位：g)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m" placeholder="请输入小球的质量">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">d(单位：mm)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="d" placeholder="请输入小球的直径">
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
                    <td>液体密度ρ</td>
                    <td>黏滞系数η</td>
                    <td>雷诺数Re</td>

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