/**
 * Created by wh980 on 2015/11/16.
 */
$(document).ready(function () {
    $('#n2dlbtn').click(function () {
        var x1 = $('#x').val();
        var t1 = $('#t1').val();
        var t2 = $('#t2').val();
        var s = $('#s').val();

        x1 = x1 / 100;
        t1 = t1 / 1000;
        t2 = t2 / 1000;
        M1 = M1 / 1000;
        M2 = M2 / 1000;
        var aL;
        var v1;
        var v2;
        v1 =(x1 / t1) ;
        v2 = ( x1 / t2) ;
        var a = (v2*v2 -v1*v1) / (s * 2);
        if (a == 0) {
            alert("加速度不能为0,请重新输入!");
        }

        var M1 = $('#M1').val();
        var  M2= $('#M2').val();

        aL = M2*9.7/(M1+M2);
        var FL;
        var FS;
        FL = M2*aL;
        FS = M2*a;
        var ba;
        var bf;
        ba = SB(aL,a);
        bf = SB(FL,FS);

        if (a != 0) {
            aL = aL.toFixed(6);
            a = a.toFixed(6);
            x1 = (x1*100).toFixed(0);
            t1 = (1000*t1).toFixed(2);
            t2 = (t2*1000).toFixed(2);
            //M1 = (M1*1000).toFixed(1);
            //M2 = (M2*1000).toFixed(1);
            ba = ba.toFixed(1);
            v1 = v1.toFixed(6);
            v2 = v2.toFixed(6);
            bf = bf.toFixed(1);
            $("#record").append("<tr>  <td style='word-break: break-all'>" + x1 + "<br>" + t1 + "<br> " + t2 + "<br> " + s +"<br> " + M1 +"<br>" + M2 + "</td> " +
            "<td style='word-break: break-all'>" + a + "</td> " +
            " <td style='word-break: break-all'>" + aL + "</td>" +
            "<td style='word-break: break-all'>" + v1 + "</td> " +
            "<td style='word-break: break-all'>" + v2 + "</td> "+
            " <td style='word-break: break-all'>" + FS + "</td>" +
            " <td style='word-break: break-all'>" + ba + "</td>" +
            "<td style='word-break: break-all'>" + bf + "</td>  </tr>");
        }
    });
    $('#uncenter').click(function(){
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
    function SB(L,S){
        var b;
        b = Math.abs((L-S)/L)*100;
        return b;
    }
    function UxSum(Shu1,Shu2,Shu3,Shu4,Shu5){
        var sum;
        var pin;
        pin = (Shu1+Shu2+Shu3+Shu4+Shu5)/5;
        sum =Math.sqrt( ((Shu1-pin)*(Shu1-pin)+(Shu2-pin)*(Shu2-pin)+(Shu3-pin)*(Shu3-pin)+(Shu4-pin)*(Shu4-pin)+(Shu5-pin)*(Shu5-pin))/20);
        return sum;
    }
});


