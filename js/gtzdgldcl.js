
$(document).ready(function(){

    $('#submit').click(function(){
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
