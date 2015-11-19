<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no;">
    <title>光栅测量光的波长</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/gscbc.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1><strong>光栅测量光的波长</strong></h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">级次k</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="k" placeholder="级次">
                    </div>
                </div>
                <h3>左侧条纹</h3>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">左游标读数</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="angle1" placeholder="左侧左游标读数">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">右游标读数</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="angle2" placeholder="左侧右游标读数">
                    </div>
                </div>
                <h3>右侧条纹</h3>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">左游标读数</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="angle3" placeholder="右侧左游标读数">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">右游标读数</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="angle4" placeholder="右侧右游标读数">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="gscbcbtn" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>左侧左游标读数</th>
                        <th>左侧右游标读数</th>
                        <th>右侧左游标读数</th>
                        <th>右侧右游标读数</th>
                        <th>波长λ</th>
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