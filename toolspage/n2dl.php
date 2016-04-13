<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>牛顿第二定律</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/n2dl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>牛顿第二定律</h1>
    <br>
    <div class="panel panel-default">
<!--        注释：<br>-->
<!--        <p>本计算结果保留四位小数，在记录数据请使用修约原则来保留三位小数。</p>-->
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">x(单位：cm)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="x" placeholder="请输入光电门的宽度x">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">t1(单位：ms)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="t1" placeholder="请输入第一次通过光电门的时间t1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">t2(单位：ms)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="t2" placeholder="请输入第二次通过光电门的时间t2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">s(单位：m)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="s" placeholder="请输入两个光电门的距离s">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">m1（单位：g）</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="M1" placeholder="请输入M1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">m2（单位：g）</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="M2" placeholder="请输入M2">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="n2dlbtn" class="btn btn-default">计算</button>
                    </div>
                </div>
            </div>

            <h2>历史记录</h2>
            <table class="table-responsive">
                <thead>
                <tr>
                    <td>历史数据</td>
                    <td>a实</td>
                    <td>a理论</td>
                    <td>V1</td>
                    <td>V2</td>
                    <td>F理论</td>
                    <td>F实际（m2*a实）</td>
                    <td>Ba(%)</td>
                    <td>BF(%)</td>
                </tr>
                </thead>
                <tbody id="record">
                </tbody>
            </table>
        </div>
<!--        <div class="panel-body">-->
<!--            <h3>A类不确定度</h3>-->
<!--            <div class="form-horizontal">-->
<!--                <br/>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputEmail3" class="col-sm-2 control-label">数据1</label>-->
<!--                    <div class="col-sm-8">-->
<!--                        <input id="shu1" type="text" class="form-control" value="输入数据1" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputEmail3" class="col-sm-2 control-label">数据2</label>-->
<!--                    <div class="col-sm-8">-->
<!--                        <input id="shu2" type="text" class="form-control" value="输入数据2" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputEmail3" class="col-sm-2 control-label">数据3</label>-->
<!--                    <div class="col-sm-8">-->
<!--                        <input id="shu3" type="text" class="form-control" value="输入数据3" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputEmail3" class="col-sm-2 control-label">数据4</label>-->
<!--                    <div class="col-sm-8">-->
<!--                        <input id="shu4" type="text" class="form-control" value="输入数据4" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputEmail3" class="col-sm-2 control-label">数据5</label>-->
<!--                    <div class="col-sm-8">-->
<!--                        <input id="shu5" type="text" class="form-control" value="输入数据5" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <div class="col-sm-12">-->
<!--                        <button id="uncenter" class="btn btn-default">计算</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <h2>历史记录</h2>-->
<!--            <table class="table">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <td class="text-center">输入数据</td>-->
<!--                    <td class="text-center">A类不确定度</td>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody id="record_Ux">-->
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
    </div>

    <footer class="text-center">
        <p>Powered by upcyiban</p>
    </footer>
</div>
</body>
</html>