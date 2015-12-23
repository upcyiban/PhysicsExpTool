<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
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
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="panel panel-default" style="text-align: left">
                <p><strong>注释：</strong></p>
                <ul style="text-align: left">
                    <li>在使用之前，我们建议先把您计算的数值和工具计算的数值相校对，确认正确后使用</li>
                    <li>数据书写方式请参考35°3′--->35.03</li>
                    <li>为了方便输入，可以把左右条纹顺序颠倒。</li>
                    <li>波长单位是nm(也可采用Å，1nm = 10Å）</li>
                    <li>本计算结果保留四位小数，在您列表记录数据请使用修约原则来保留三位小数。</li>
                    <li>拓展：埃米（Ångstrom或ANG或Å）是晶体学、原子物理、超显微结构等常用的长度单位，音译为"埃"，符号为Å，1Å等于10-10m，即纳米的十分之一。它不是国际单位，是一个历史上习用的单位，这个单位名称是为纪念瑞典物理学家埃斯特朗而定的符号，其不属于国际单位体系。</li>
                </ul>
            </div>
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
                        <th style="word-break: break-all;text-align: center">左侧左游标读数</th>
                        <th style="word-break: break-all;text-align: center">左侧右游标读数</th>
                        <th style="word-break: break-all;text-align: center">右侧左游标读数</th>
                        <th style="word-break: break-all;text-align: center">右侧右游标读数</th>
                        <th style="word-break: break-all;text-align: center">波长λ</th>
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