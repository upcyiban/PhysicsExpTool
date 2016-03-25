$(document).ready(function(){
    $('#sa').click(function(){
        var   f= $("#f").val();
        var   k= $("#k").val();
        var   ab= $("#ab").val();
        var   Dn= $("#Dn").val();
        var   Dw= $("#Dw").val();
        var Rx;
        Rx = SRx(c1,R01);
        Rx  = Rx.toFixed(3);
        var S;
        S = SS(bn,bR0,R01);
        S  = S.toFixed(3);
        var a;
        a = SSa(f,Dn,Dw);
        $("#record_DB").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+RX1+" <br/>"+a+"<br/>" +c1+"<br/> " +R01 + " <br/>"+bR0 + "<br/>"+bn+"</td > " +
            " <td style='word-break: break-all'>"+Rx+"</td> " +
            " <td style='word-break:break-all'>"+S+"</td> " +
            "</tr>");
    });
    $('#su').click(function(){
        var   shu1= $("#shu1").val();
        var   shu2= $("#shu2").val();
        var   shu3= $("#shu3").val();
        var   shu4= $("#shu4").val();
        var   shu5= $("#shu5").val();

        var Ux;
        Ux= UxSum(shu1,shu2,shu3,shu4,shu5);

        $("#record_Ux").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+shu1+"<br>"
            +shu2+"<br>"+shu3+"<br>"+shu4+"<br>"+shu5+"</td>" +
            "<td style='word-break: break-all'>"+Ux+"</td>" +
            "</tr>");
    });

    function SSa(f,dw,dn){
        var rx;
        rx = f/(Math.PI*(dn+dw));
        return rx;
    }
    function UxSum(Shu1,Shu2,Shu3,Shu4,Shu5){
        var sum;
        var pin;
        pin = (Shu1+Shu2+Shu3+Shu4+Shu5)/5;
        sum =Math.sqrt( ((Shu1-pin)*(Shu1-pin)+(Shu2-pin)*(Shu2-pin)+(Shu3-pin)*(Shu3-pin)+(Shu4-pin)*(Shu4-pin)+(Shu5-pin)*(Shu5-pin))/20);
        return sum;
    }
});