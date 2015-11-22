
$(document).ready(function(){

    $('#submit').click(function(){
            var Dsy1 = $('#Dsy1').val();
            var Dsy2 = $('#Dsy2').val();
            var Dsy3 = $('#Dsy3').val();
            var Dsy4 = $('#Dsy4').val();
            var Dsy5 = $('#Dsy5').val();
            var KyN1 = $('#KyN1').val();
            var KyN2 = $('#KyN2').val();
            var KyN3 = $('#KyN3').val();
            var KyN4 = $('#KyN4').val();
            var KyN5 = $('#KyN5').val();
            var KyW1 = $('#KyW1 ').val();
            var KyW2 = $('#KyW2').val();
            var KyW3 = $('#KyW3').val();
            var KyW4 = $('#KyW4').val();
            var KyW5 = $('#KyW5').val();
            var XG1 = $('#XG1').val();
            var XG2 = $('#XG2').val();
            var XG3 = $('#XG3').val();
            var XG4 = $('#XG4').val();
            var XG5 = $('#XG5').val();
            var HKN1 = $('#HKN1').val();
            var HKN2 = $('#HKN2').val();
            var HKN3 = $('#HKN3').val();
            var HKN4 = $('#HKN4').val();
            var HKN5 = $('#HKN5').val();
            var HKW1 = $('#HKW1').val();
            var HKW2 = $('#HKW2').val();
            var HKW3 = $('#HKW3').val();
            var HKW4 = $('#HKW4').val();
            var HKW5 = $('#HKW5').val();

            var Dsy = (Dsy1+Dsy2+Dsy3+Dsy4+Dsy5)/5;
            var KyN = (KyN1+KyN2+KyN3+KyN4+KyN5)/5;
            var KyW = (KyW1+KyN2+KyN3+KyN4+KyN5)/5;
            var MQD = $('#MQD').val();
            var XG = (XG1+XG1+XG3+XG4+XG5)/5;
            var HKN = (HKN1+HKN2+HKN3+HKN4+HKN5)/5;
            var HKW = (HKN1+HKN2+HKN3+HKN4+HKN5)/5;


            var t01 = $('#t01').val();
            var t02 = $('#t02').val();
            var t03 = $('#t03').val();
            var t04 = $('#t04').val();
            var t05 = $('#t05').val();
            var t11 = $('#t11').val();
            var t12 = $('#t12').val();
            var t13 = $('#t13').val();
            var t14 = $('#t14').val();
            var t15 = $('#t15').val();

            var t0 = (t01+t02+t03+t04+t05)/5;
            var t1 =(t11+t12+t13+t14+t15)/5;

            var t21 = $('#t21').val();
            var t22 = $('#t22').val();
            var t23 = $('#t23').val();
            var t24 = $('#t24').val();
            var t25 = $('#t25').val();
            var t31 = $('#t31').val();
            var t32 = $('#t32').val();
            var t33 = $('#t33').val();
            var t34 = $('#t34').val();
            var t35 = $('#t35').val();
            var t41 = $('#t41').val();
            var t42 = $('#t42').val();
            var t43 = $('#t43').val();
            var t44 = $('#t44').val();
            var t45 = $('#t45').val();

            var t2 = (t21+t22+t23+t24+t25)/5;
            var t3 =(t31+t32+t33+t34+t35)/5;
            var t4 =(t41+t42+t43+t44+t45)/5;

            var x5_1 = $('#x5_1').val();
            var x5_2 = $('#x5_2').val();
            var x5_3 = $('#x5_3').val();
            var x5_4 = $('#x5_4').val();
            var x5_5 = $('#x5_5').val();
            var x15_1 = $('#x15_1').val();
            var x15_2 = $('#x15_2').val();
            var x15_3 = $('#x15_3').val();
            var x15_4 = $('#x15_4').val();
            var x15_5 = $('#x15_5').val();
            var x25_1 = $('#x25_1').val();
            var x25_2 = $('#x25_2').val();
            var x25_3 = $('#x25_3').val();
            var x25_4 = $('#x25_4').val();
            var x25_5 = $('#x25_5').val();

            var x5 = (x5_1+x5_2+x5_3+x5_4+x5_5)/5;
            var x15 =(x15_5+x15_4+x15_3+x15_2+x15_1)/5;
            var x25 =(x25_1+x25_2+x25_3+x25_4+x25_5)/5;

            var x10_1 = $('#x10_1').val();
            var x10_2 = $('#x10_2').val();
            var x10_3 = $('#x10_3').val();
            var x10_4 = $('#x10_4').val();
            var x10_5 = $('#x10_5').val();
            var x20_1 = $('#x20_1').val();
            var x20_2 = $('#x20_2').val();
            var x20_3 = $('#x20_3').val();
            var x20_4 = $('#x20_4').val();
            var x20_5 = $('#x20_5').val();

            var x10 =(x10_5+x10_4+x10_3+x10_2+x10_1)/5;
            var x20 =(x20_1+x20_2+x20_3+x20_4+x20_5)/5;

            var SYM = $('#SYM').val();
            var KYM = $('#KYM').val();
            var MQM = $('#MQM').val();
            var XGM = $('#XGM').val();
            var HKM = $('#HKM').val();

            //计算J0,以及不确定度
            var J1 = lilunj_1(SYM,Dsy);
            var J1_1 = lilunj_1(SYM,Dsy1);
            var J1_2 = lilunj_1(SYM,Dsy2);
            var J1_3 = lilunj_1(SYM,Dsy3);
            var J1_4 = lilunj_1(SYM,Dsy4);
            var J1_5 = lilunj_1(SYM,Dsy5);

            var J0 = shijij_0(J1,t0,t1);
            var J0_1 = shijij_0(J1_1,t01,t11);
            var J0_2 = shijij_0(J1_2,t01,t11);
            var J0_3 = shijij_0(J1_3,t03,t13);
            var J0_4 = shijij_0(J1_4,t04,t14);
            var J0_5 = shijij_0(J1_5,t05,t15);
            var Ua_J0 = Uncenter(J0_1,J0_2,J0_3,J0_4,J0_5,J0);


            var k = kJ(J1,t1,t0);
            var k1 = kJ(J1_1,t11,t01);
            var k2 = kJ(J1_2,t12,t02);
            var k3 = kJ(J1_3,t13,t03);
            var k4 = kJ(J1_4,t14,t04);
            var k5 = kJ(J1_5,t15,t05);
            var Ua_k = Uncenter(k1,k2,k3,k4,k5,k);

            //计算金属圆筒的转动惯量及相对误差
            var J2S = shijij_1(J0,t1,k);
            var J2L = lilunj_2(KYM,KyW,KyN);
            var J2X = XiangDuiWuX(J2S,J2L);

            //计算木球的转动惯量及相对误差
            var J3S = shijij_1(0.179*Math.pow(10,-4),t3,k);
            var J3L = lilunj_3(MQM,MQD);
            var J3X = XiangDuiWuX(J3S,J3L);

            //计算金属细杆的转动惯量及相对误差
            var J4S = shijij_1(0.232*Math.pow(10,-4),t4,k);
            var J4L = lilunj_4(XGM,XG);
            var J4X = XiangDuiWuX(J4S,J4L);
        //输出答案
            document.getElementById("J_1").innerHTML=J1;
            document.getElementById("k").innerHTML=k;
            document.getElementById("Ua_J0").innerHTML=Ua_J0;
            document.getElementById("Ua_k").innerHTML=Ua_k;
            document.getElementById("J2L").innerHTML=J2L;
            document.getElementById("J2S").innerHTML=J2S;
            document.getElementById("J2X").innerHTML=J2X;
            document.getElementById("J3S").innerHTML=J3S;
            document.getElementById("J3L").innerHTML=J3L;
            document.getElementById("J3X").innerHTML=J3X;
            document.getElementById("J4L").innerHTML=J4L;
            document.getElementById("J4S").innerHTML=J4S;
            document.getElementById("J4S").innerHTML=J4S;
            document.getElementById("J4X).innerHTML=J4X;
        }

    );

    /**
     * @return {number}
     */
    function  Uncenter(x1,x2,x3,x4,x5,xp)
    {
        var s=0;
        s=Math.pow(x1-xp,2)+Math.pow(x2-xp,2)+Math.pow(x3-xp,2)+Math.pow(x4-xp,2)+Math.pow(x5-xp,2);
        var Ua;
        Ua=Math.sqrt(s/(5*4));
        return Ua;
    }
    function  kJ(j1,t1,t0){
        var k;
        k = 4* Math.PI*Math.PI*j1/(t1*t1-t0*t0);
        return k;
    }
    function  lilunj_1(x1,x2){
        var J;
        J= x1*Math.pow(10,-3)*x2*Math.pow(10,-3)*x2*Math.pow(10,-3)/8;
        return J;
    }

    function lilunj_2(m,dw,dn){
        var j;
        j = m *Math.pow(10,-3)* (dw*Math.pow(10,-3) * dw*Math.pow(10,-3) + dn*Math.pow(10,-3) * dn*Math.pow(10,-3))/8;
        return j;
    }
    function lilunj_3(m,d){
        var j;
        j = m*Math.pow(10,-3) * d *Math.pow(10,-3)* d*Math.pow(10,-3)/10;
        return j;
    }
    function lilunj_4(m,l){
        var j;
        j = m *Math.pow(10,-3)* l*Math.pow(10,-2) * l*Math.pow(10,-2)/12;
        return j;
    }
    function lilunj_c(m,dw,dn,l){
        var j;
        j = m *Math.pow(10,-3)* (dw*Math.pow(10,-3)*dw*Math.pow(10,-3) + dn*Math.pow(10,-3)*dn*Math.pow(10,-3))/16 + m*l*l/12;
        return j;
    }

    function shijij_0(j1,t0,t1){
        var J;
        J = j1*t0*t0/(t1*t1-t0*t0);
        return J;
    }

    function shijij_1(j0,t1,k){
        var j;
        j = t1*t1*k/(4*Math.PI*Math.PI)-j0;
        return j;
    }
    function XiangDuiWuX(x1,x2){
        var x;
        x=(x1-x2)/x1*100;
        return x;
    }
});
