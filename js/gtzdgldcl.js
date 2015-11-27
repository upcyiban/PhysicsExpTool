
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

        $("#record_J0").append("<tr> <th>"+T0+"</th> <th>"+T1+"</th> <th>"+SYD+"</th> <th>"+SYM+"</th> <th>"+J1+"</th> <th>"+J0+"</th> <th>"+k+"</th> </tr>");

    });
    $('#JS_J').click(function(){

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
