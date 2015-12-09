<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>双缝衍射实验</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>双缝衍射实验</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">数据1</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var1" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">数据2</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="var2" placeholder="Password">
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