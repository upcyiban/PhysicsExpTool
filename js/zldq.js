$(document).ready(function(){
    $('#DB').click(function(){
        var   RX1= $("#RX1").val();
        var   a= $("#a").val();
        var    c1= $("#c1").val();
        var    R01= $("#R01").val();
        var   bR0= $("#bR0").val();
        var    bn= $("#bn").val();

        var Rx;
        Rx = SRx(c1,R01);
        Rx  = Rx.toFixed(3);
        var S;
        S = SS(bn,bR0,R01);
        S  = S.toFixed(3);
        $("#record_DB").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+RX1+" <br/>"+a+"<br/>" +c1+"<br/> " +R01 + " <br/>"+bR0 + "<br/>"+bn+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+Rx+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+S+"</td style='word-break: break-all'> " +
            "</tr>");
    });
    $('#ux').click(function(){
        var   Shu1= $("#Shu1").val();
        var   Shu3= $("#Shu3").val();
        var   Shu2= $("#Shu2").val();
        var   Shu4= $("#Shu4").val();
        var   Shu5= $("#Shu5").val();

        var Ux;
        Ux= UxSum(Shu1,Shu2,Shu3,Shu4,Shu5);

            $("#record_Ux").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+Shu1+"<br>"
            +Shu2+"<br>"+Shu3+"<br>"+Shu4+"<br>"+Shu5+"</td style='word-break: break-all'>" +
            "<td style='word-break: break-all'>"+Ux+"</td style='word-break: break-all'>" +
            "</tr>");
    });
    $('#SB').click(function(){
        var   c2= $("#c2").val();
        var   R02= $("#R02").val();
        var   RxL= $("#RxL").val();
        var   d= $("#d").val();
        var Rx3;
        Rx3 = SRx(c2,R02);
        d = d/1000;
        var rou;
        rou = DianZuLv(Rx3,RxL,d);
        Rx3  = Rx3.toFixed(3);
        rou  = rou.toFixed(3);
        $("#record_SB").append("<tr>" +
            " <td style='word-break: break-all'>"+c2+"<br>"+R02+"<br>"+RxL+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+Rx3+"</td style='word-break: break-all'>" +
            "<td style='word-break: break-all'>"+rou+"</td style='word-break: break-all'>" +
            " </tr>");
    });
    function SRx(c,R0){
        var rx;
        rx = c*R0;
        return rx;
    }
    function SS(bn,bR0,R0){
        var s;
        s = bn/(bR0/R0);
        return s;
    }
    function UxSum(Shu1,Shu2,Shu3,Shu4,Shu5){
        var sum;
        var pin;
        pin = (Shu1+Shu2+Shu3+Shu4+Shu5)/5;
        sum =Math.sqrt( ((Shu1-pin)*(Shu1-pin)+(Shu2-pin)*(Shu2-pin)+(Shu3-pin)*(Shu3-pin)+(Shu4-pin)*(Shu4-pin)+(Shu5-pin)*(Shu5-pin))/20);
        return sum;
    }
    function  DianZuLv(r,l,d)
    {
        var x;
        var s;
        s = Math.PI*d*d;
        x = r*s/l;
        return x;
    }
});