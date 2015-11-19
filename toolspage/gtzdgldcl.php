<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no;">
    <title>刚体转动惯量的测量</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>刚体转动惯量的测量</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T0</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var1" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">T1</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var2" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="sfysbtn" class="btn btn-default">提交</button>
                    </div>
                </div>
            </div>
            <div class="answer">
                <table border="1" width="80%" height="80" align="center">

                    <tr>
                        <td><div align="center">物体名称</div></td>
                        <td><div align="center">质量(g)</div></td>
                        <td><div align="center">几何尺寸（mm)</div></td>
                        <td colspan="2"><div align="center">周期(s)</div></td>

                    </tr>

                    <tr>
                        <td align="center" rowspan="6">
                            载物盘
                        </td>
                        <td rowspan="6">
                            -----
                        </td>

                        <td rowspan="6">
                            ---------
                        </td>

                        <td rowspan="6">
                            T0
                        </td>

                        <tr>
                        <td >
                            时间1
                        </td>
                        </tr>

                        <tr>
                            <td>
                                时间2
                            </td>
                        </tr>

                        <tr>
                            <td>
                                时间3
                            </td>
                        </tr>

                        <tr>
                            <td>
                                时间4
                            </td>
                        </tr>

                        <tr>
                            <td>
                                时间5
                            </td>
                        </tr>

                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                </table>
答案:<span id="sfysanswer"></span>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>数据1</th>
                        <th>数据2</th>
                        <th>结果</th>
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