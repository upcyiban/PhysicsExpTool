<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Һ�����������о�</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/gtzdgldcl.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1>Һ�����������о�</h1>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>����������ת���������J0��ת������K</h3>
            <div class="form-horizontal">
                <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">����Բ��������m(��λ:kg)</label>
                    <div class="col-sm-8">
                        <input id="SYM" type="text" class="form-control" value="��������Բ��������" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">����Բ����ֱ��D(��λ:m)</label>
                    <div class="col-sm-8">
                        <input id="SYD" type="text" class="form-control" value="��������Բ����ֱ��" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T0(��λ:s)</label>
                    <div class="col-sm-8">
                        <input id="T0" type="text" class="form-control" value="����T0" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T1(��λ:s)</label>
                    <div class="col-sm-8">
                        <input id="T1" type="text" class="form-control" value="����T1" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="JS_J0" class="btn btn-default">����</button>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                ע�ͣ�<br>
                <p>��ȷ�������ڸ���ʵ�����Ĳ�ͬ�������м��㡣</p>
            </div>
            <h2>��ʷ��¼</h2>
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">T0</th>
                    <th class="text-center">T1</th>
                    <th class="text-center">D</th>
                    <th class="text-center">m</th>
                    <th class="text-center">J1</th>
                    <th class="text-center">J0</th>
                    <th class="text-center">K</th>
                </tr>
                </thead>
                <tbody id="record_J0">
                </tbody>
            </table>
        </div>
        <div class="panel-body">
            <h3>ת������������ֵ��ʵ��ֵ</h3>
            <div class="form-horizontal">
                <br/>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ѡ�������</label>
                    <div class="col-sm-8">
                        <input id="XZ" type="text" class="form-control" value="��������x" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>

                </div>
                <div class="panel panel-default">
                    ע�ͣ�<br>
                    <p>����1����ԲͲ��2����ľ��3����ϸ��</p>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">����m(��λ:kg)</label>
                    <div class="col-sm-8">
                        <input id="M" type="text" class="form-control" value="��������" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">�ھ�d(��λ:m)</label>
                    <div class="col-sm-8">
                        <input id="NJ" type="text" class="form-control" value="�������ԲͲ�ھ�d�����û����������" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">�⾶D(��λ:m)</label>
                    <div class="col-sm-8">
                        <input id="WJ" type="text" class="form-control" value="�����⾶D�򳤶�" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">T(��λ:s)</label>
                    <div class="col-sm-8">
                        <input id="T" type="text" class="form-control" value="����T" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ת������k</label>
                    <div class="col-sm-8">
                        <input id="K" type="text" class="form-control" value="����k" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">�����̻�֧�ܵ�ת������J0</label>
                    <div class="col-sm-8">
                        <input id="J0" type="text" class="form-control" value="���������̻�֧�ܵ�ת������J0" onfocus="if(this.value==defaultValue) {this.value=''}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button id="JS_J2" class="btn btn-default">����</button>
                    </div>
                </div>
            </div>
            <h2>��ʷ��¼</h2>
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">������</th>
                    <th class="text-center">m</th>
                    <th class="text-center">d</th>
                    <th class="text-center">D</th>
                    <th class="text-center">T</th>
                    <th class="text-center">k</th>
                    <th class="text-center">J0</th>
                    <th class="text-center">����ֵ</th>
                    <th class="text-center">ʵ��ֵ</th>
                    <th class="text-center">������%</th>

                </tr>
                </thead>
                <tbody id="record_J2">
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