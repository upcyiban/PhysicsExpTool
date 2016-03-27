<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>液体表面张力系数的测量</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/ytbmzl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>液体表面张力系数的测量</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>表面张力计算</h3>
            <div class="form-horizontal">
                <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">f'(mN/m)</label>
                    <div class="col-sm-8">
                        <input id="f" type="text" class="form-control" value="输入f'" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">m(mg)</label>
                    <div class="col-sm-8">
                        <input id="m" type="text" class="form-control" value="输入m" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">常数k</label>
                    <div class="col-sm-8">
                        <input id="k" type="text" class="form-control" value="输入常数k" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">标准值 α标</label>
                    <div class="col-sm-8">
                        <input id="ab" type="text" class="form-control" value="输入标准值 α标" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">D内（mm）</label>
                    <div class="col-sm-8">
                        <input id="Dn" type="text" class="form-control" value="输入D内" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">D外（mm）</label>
                    <div class="col-sm-8">
                        <input id="Dw" type="text" class="form-control" value="输入D外" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="sa" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <td class="text-center">输入数据</td>
                    <td class="text-center"> α实验值</td>
                    <td class="text-center">δα</td>
                    <td class="text-center">Er(α)(%)</td>
                </tr>
                </thead>
                <tbody id="record_DB">
                </tbody>
            </table>
        </div>
        <div class="panel-body">
            <h3>不确定度</h3>
            <div class="form-horizontal">
                <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">数据1</label>
                    <div class="col-sm-8">
                        <input id="shu1" type="text" class="form-control" value="输入数据1" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">数据2</label>
                    <div class="col-sm-8">
                        <input id="shu2" type="text" class="form-control" value="输入数据2" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">数据3</label>
                    <div class="col-sm-8">
                        <input id="shu3" type="text" class="form-control" value="输入数据3" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">数据4</label>
                    <div class="col-sm-8">
                        <input id="shu4" type="text" class="form-control" value="输入数据4" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">数据5</label>
                    <div class="col-sm-8">
                        <input id="shu5" type="text" class="form-control" value="输入数据5" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="su" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>
            <h2>历史记录</h2>
            <table class="table">
                <thead>
                <tr>
                    <td class="text-center">输入数据</td>
                    <td class="text-center">A类不确定度</td>
                </tr>
                </thead>
                <tbody id="record_DB">
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