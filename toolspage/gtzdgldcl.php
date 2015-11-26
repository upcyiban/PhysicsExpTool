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
    <script src="../js/gtzdgldcl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>刚体转动惯量的测量</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>金属载物盘转动惯量J0和转动常数K</h3>
            <div class="form-horizontal">
            <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">塑料圆柱体质量m(单位:kg)</label>
                    <div class="col-sm-8">
                        <input id="SYM" type="text" class="form-control" value="输入塑料圆柱体质量" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">塑料圆柱体直径D(单位:m)</label>
                <div class="col-sm-8">
                    <input id="SYD" type="text" class="form-control" value="输入塑料圆柱体直径" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">T0(单位:s)</label>
                <div class="col-sm-8">
                    <input id="T0" type="text" class="form-control" value="输入T0" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                </div>
            </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T1(单位:s)</label>
                    <div class="col-sm-8">
                        <input id="T1" type="text" class="form-control" value="输入T1" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="JS J0" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                注释：<br>
                <p>不确定度由于各个实验器材不同，请自行计算。</p>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>T0</th>
                    <th>T1</th>
                    <th>D</th>
                    <th>m</th>
                    <th>J1</th>
                    <th>J0</th>
                    <th>K</th>
                </tr>
                </thead>
                <tbody id="record J0">
                </tbody>
            </table>


            </div>
        <div class="panel-body">
            <h3>转动惯量的理论值和实验值</h3>
            <div class="form-horizontal">
                <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">选择计算量</label>
                    <div class="col-sm-8">
                        <input id="XZ" type="text" class="form-control" value="输入数字x" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>

                </div>
                <div class="panel panel-default">
                    注释：<br>
                    <p>输入1代表圆筒，2代表木球，3代表细杆</p>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">质量m(单位:kg)</label>
                    <div class="col-sm-8">
                        <input id="YTM" type="text" class="form-control" value="输入质量" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">内径d(单位:m)</label>
                    <div class="col-sm-8">
                        <input id="YTN" type="text" class="form-control" value="输入金属圆筒内径d，如果没有请输入零" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">外径D(单位:m)</label>
                    <div class="col-sm-8">
                        <input id="YTW" type="text" class="form-control" value="输入外径D" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T(单位:s)</label>
                    <div class="col-sm-8">
                        <input id="T2" type="text" class="form-control" value="输入T2" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">转动常数k</label>
                    <div class="col-sm-8">
                        <input id="K" type="text" class="form-control" value="输入k" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">载物盘转动惯量J0</label>
                    <div class="col-sm-8">
                        <input id="K" type="text" class="form-control" value="输入J0" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="JS J0" class="btn btn-default">计算</button>
                    </div>
                </div>

        </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>所算量</th>
                    <th>d</th>
                    <th>D</th>
                    <th>T</th>
                    <th>k</th>
                    <th>J0</th>
                    <th>理论值</th>
                    <th>实验值</th>
                    <th>相对误差%</th>
                </tr>
                </thead>
                <tbody id="record J2">
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