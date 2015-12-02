
$(document).ready(function(){

    $('#JS_J0').click(function(){
        var   SYM= $("#SYM").val();
        var   SYD= $("#SYD").val();
        var    T0= $("#T0").val();
        var    T1= $("#T1").val();

        if(T0==T1){
            alert("T0不能等于T1，否则无意义");
        }
        var J1;
        J1 = lilunj_1(SYM,SYD);

        var J0;
        J0 = shijij_0(J1,T0,T1);

        var k;
        k = kJ(J1,T1,T0);


        $("#record_J0").append("<tr> <td style='word-break: break-all'>"+T0+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+T1+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+SYD+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+SYM+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+J1+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+J0+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+k+"</td style='word-break: break-all'> </tr>");
    });
    $('#JS_J2').click(function(){
        var   XZ= $("#XZ").val();
        var   M= $("#M").val();
        var   NJ= $("#NJ").val();
        var   WJ= $("#WJ").val();
        var   T= $("#T").val();
        var   K= $("#K").val();
        var   J0= $("#J0").val();
        if(NJ==WJ)
        {
            alert("内径和外径不能相同");
        }
        var   LJ;
        var   SJ;
        var   xxz;
        var   xd;
        if(XZ==1)
        {
            xxz = "金属圆筒";
            LJ = lilunj_2(M,WJ,NJ);
            SJ = shijij_1(J0,T,K);
            if(SJ<0)
            {
                alert("输入数据有误，使得实验测量的转动惯量小于0了")
            }
            xd = XiangDuiWuX(LJ,SJ);
        }
        else if(XZ==2)
        {
            xxz = "木球";
            LJ = lilunj_3(M,WJ);
            SJ = shijij_1(J0,T,K);
            NJ=0;
            if(SJ<0)
            {
                alert("输入数据有误，使得实验测量的转动惯量小于0了")
            }
            xd = XiangDuiWuX(LJ,SJ);
        }
        else if(XZ==3)
        {
            xxz = "细杆";
            LJ = lilunj_4(M,WJ);
            SJ = shijij_1(J0,T,K);
            NJ=0;
            if(SJ<0)
            {
                alert("输入数据有误，使得实验测量的转动惯量小于0了")
            }
            xd = XiangDuiWuX(LJ,SJ);
        }
        else
        {
            alert("不懂你要人家做什么");
        }

        $("#record_J2").append("<tr> <td style='word-break: break-all'>"+xxz+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+M+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+NJ+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+WJ+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+T+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+K+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+J0+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+LJ+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+SJ+"</td style='word-break: break-all'> <td style='word-break: break-all'>"+xd+"</td style='word-break: break-all'> </tr>");
    });
    /**
     * @return {number}
     */
    //function  Uncenter(x1,x2,x3,x4,x5,xp)
    //{
    //    var s=0;
    //    s=Math.pow(x1-xp,2)+Math.pow(x2-xp,2)+Math.pow(x3-xp,2)+Math.pow(x4-xp,2)+Math.pow(x5-xp,2);
    //    var Ua;
    //    Ua=Math.sqrt(s/(5*4));
    //    return Ua;
    //}
    function  kJ(j1,t1,t0){
        var k;
        k = 4* Math.PI*Math.PI*j1/(t1*t1-t0*t0);
        return k;
    }
    function  lilunj_1(m,d){
        var J;
        J= m*d*d/8;
        return J;
    }

    function lilunj_2(m,dw,dn){
        var j;
        j = m * (dw * dw+ dn* dn)/8;
        return j;
    }
    function lilunj_3(m,d){
        var j;
        j = m * d * d/10;
        return j;
    }
    function lilunj_4(m,l){
        var j;
        j = m * l* l/12;
        return j;
    }
    function lilunj_c(m,dw,dn,l){
        var j;
        j = m * (dw*dw + dn*dn)/16 + m*l*l/12;
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
