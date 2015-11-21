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
            <br/>

            <div>
                <h3>请在下列表格中输入数据</h3>
            </div>
            <div class="answer">

                <table border="1" width="80%" height="80" align="center" style="color: #5bc0de">

                    <th>
                        <tr>
                            <td>
                                <div align="center">物体名称</div>
                            </td>
                            <td colspan="2">
                                <div align="center">几何尺寸（mm）</div>
                            </td>

                        </tr>
                    </th>

                    <tr>
                        <td rowspan="6">
                            塑料圆柱体直径
                        </td>
                        <td rowspan="6">
                            D
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="Dsy1" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input id="Dsy2" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="Dsy3" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="Dsy4" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="Dsy5" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="6">
                            空心金属圆筒内径
                        </td>
                        <td rowspan="6">
                            d
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="KyN1" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input id="KyN2" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="KyN3" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="KyN4" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="KyN5" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="6">
                            空心金属圆筒外径
                        </td>
                        <td rowspan="6">
                            D
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="KyW1" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input id="KyW2" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="KyW3" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="KyW4" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="KyW5" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            木球直径
                        </td>
                        <td >
                            D
                        </td>
                        <td>
                            <input id="MQD" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="6">
                            金属细杆长度
                        </td>
                        <td rowspan="6">
                            L
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="XG1" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input id="XG2" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="XG3" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="XG4" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="XG5" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="6">
                            金属滑块内径
                        </td>
                        <td rowspan="6">
                            d
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="HKN1" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input id="HKN2" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="HKN3" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="HKN4" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="HKN5" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="6">
                            金属滑块外径
                        </td>
                        <td rowspan="6">
                            D
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="HKW1" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input id="HKW2" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="HKW3" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="HKW4" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="HKW5" type="text" value="请输入尺寸" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                </table><br/><br/><br/>
                <table border="1" width="80%" height="80" align="center" style="color: #5bc0de">
                    <th>
                        <tr>
                            <td>
                                物体
                            </td>
                            <td>
                                质量
                            </td>
                        </tr>
                    </th>
                    <tr>
                        <td>
                            塑料圆柱体
                        </td>
                        <td>
                            <input id="SYM" type="text" value="请输入圆柱体质量" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            空心圆筒
                        </td>
                        <td>
                            <input id="KYM" type="text" value="请输入圆筒质量" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            木球
                        </td>
                        <td>
                            <input id="MQM" type="text" value="请输入木球质量" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            细杆
                        </td>
                        <td>
                            <input id="XGM" type="text" value="请输入细杆质量" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            金属滑块
                        </td>
                        <td>
                            <input id="HKM" type="text" value="请输入滑块质量" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                </table><br/><br/><br/>
                <table border="1" width="80%" height="80" align="center" style="color: #5bc0de">
                    <th>
                    <tr>
                        <td>
                         T[x]
                        </td>
                        <td>
                            第一次
                        </td>
                        <td>
                            第二次
                        </td>
                        <td>
                            第三次
                        </td>
                        <td>
                            第四次
                        </td>
                        <td>
                            第五次
                        </td>
                    </tr>
                    </th>
                    <tr>
                        <td>
                            T[0]
                        </td>
                        <td>
                            <input id="t01" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t02" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t03" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t04" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t05" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            T[1]
                        </td>
                        <td>
                            <input id="t11" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t12" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t13" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t14" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t15" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            T[2]
                        </td>
                        <td>
                            <input id="t21" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t22" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t23" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t24" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t25" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            T[3]
                        </td>
                        <td>
                            <input id="t31" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t32" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t33" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t34" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t35" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            T[4]
                        </td>
                        <td>
                            <input id="t41" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t42" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t43" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t44" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="t45" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            X=5cm
                        </td>
                        <td>
                            <input id="x5_1" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x5_2" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x5_3" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x5_4" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x5_5" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            X=10cm
                        </td>
                        <td>
                            <input id="x10_1" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x10_2" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x10_3" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x10_4" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x10_5" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            X=15cm
                        </td>
                        <td>
                            <input id="x15_1" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x15_2" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x15_3" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x15_4" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x15_5" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            X=20cm
                        </td>
                        <td>
                            <input id="x20_1" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x20_2" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x20_3" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x20_4" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x20_5" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            X=25cm
                        </td>
                        <td>
                            <input id="x25_1" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x25_2" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x25_3" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x25_4" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                        <td>
                            <input id="x25_5" type="text" value="请输入时间" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" style="color:#666;" />
                        </td>
                    </tr>
                </table><br/>
                <button id="submit" style="color: #31b0d5"><h5>  提交  </h5></button><br/><br/><br/>
            </div>
            <h2>答案</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>答案</th>
                    <th>公式</th>
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