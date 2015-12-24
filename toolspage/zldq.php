<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>直流电桥及其使用</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/zldq.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>直流电桥及其使用</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>单臂电桥</h3>
            <div class="form-horizontal">
                <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">待测电阻标称值/Ω</label>
                    <div class="col-sm-8">
                        <input id="RX1" type="text" class="form-control" value="输入待测电阻标称值" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">准确度等级指数α</label>
                    <div class="col-sm-8">
                        <input id="a" type="text" class="form-control" value="输入准确度等级指数α" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">比率读数C</label>
                    <div class="col-sm-8">
                        <input id="c1" type="text" class="form-control" value="输入比率读数" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">R0/Ω</label>
                    <div class="col-sm-8">
                        <input id="R01" type="text" class="form-control" value="输入R0" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">δR0/Ω</label>
                    <div class="col-sm-8">
                        <input id="bR0" type="text" class="form-control" value="输入δR0" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">δn/分格</label>
                    <div class="col-sm-8">
                        <input id="bn" type="text" class="form-control" value="输入δn" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="DB" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <td class="text-center">输入数据</td>
                    <td class="text-center">Rx</td>
                    <td class="text-center">S</td>
                </tr>
                </thead>
                <tbody id="record_DB">
                </tbody>
            </table>
        </div>
        <div class="panel-body">
            <h3>双臂电桥</h3>
            <div class="form-horizontal">
                <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">比率C</label>
                    <div class="col-sm-8">
                        <input id="c2" type="text" class="form-control" value="输入C" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">R0/Ω</label>
                    <div class="col-sm-8">
                        <input id="R02" type="text" class="form-control" value="输入R0" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Rx长度/m</label>
                    <div class="col-sm-8">
                        <input id="RxL" type="text" class="form-control" value="输入Rx长度" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">金属棒直径/mm</label>
                    <div class="col-sm-8">
                        <input id="d" type="text" class="form-control" value="输入金属棒直径" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="SB" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <td class="text-center">输入数据</td>
                    <td class="text-center">Rx</td>
                    <td class="text-center">ρ</td>
                </tr>
                </thead>
                <tbody id="record_SB">
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