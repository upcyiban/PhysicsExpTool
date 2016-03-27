$(document).ready(function(){
    $('#sa').click(function(){
        var   f= $("#f").val()/1000;
        var   k= $("#k").val();
        var   m= $("#m").val()/1000;
        var   ab= $("#ab").val();
        var   Dn= $("#Dn").val()/1000;
        var   Dw= $("#Dw").val()/1000;

        var a;
        a = SSa(f,Dn,Dw,m);
        var da;
        da = Da(ab,a);
        var ea;
        ea = Ea(da,ab);
        $("#record_DB").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+f+" <br/>"+k+"<br/>" +ab+"<br/> " +Dn + " <br/>"+Dw + "<br/>" +
            " <td style='word-break: break-all'>"+a+"</td> " +
            " <td style='word-break:break-all'>"+da+"</td> " +
            " <td style='word-break:break-all'>"+ea+"</td> " +
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

    function SSa(f,dw,dn,m){
        var rx;
        rx = (m*9.8-f)/(Math.PI*(dn+dw));
        return rx;
    }
    function UxSum(Shu1,Shu2,Shu3,Shu4,Shu5){
        var sum;
        var pin;
        pin = (Shu1+Shu2+Shu3+Shu4+Shu5)/5;
        sum =Math.sqrt( ((Shu1-pin)*(Shu1-pin)+(Shu2-pin)*(Shu2-pin)+(Shu3-pin)*(Shu3-pin)+(Shu4-pin)*(Shu4-pin)+(Shu5-pin)*(Shu5-pin))/20);
        return sum;
    }
    function Da(ab,a){
        var da;
        da = a - ab;
        return da;
    }
    function Ea(da,ab){
        var ea;
        ea = da/ab*100;
        return ea;
    }
});