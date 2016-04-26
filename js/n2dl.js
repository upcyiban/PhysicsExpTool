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
            x1 = (x1*100).toFixed(0);
            t1 = (1000*t1).toFixed(2);
            t2 = (t2*1000).toFixed(2);
            a = a.toFixed(2);
            aL = aL.toFixed(2);
            //M1 = (M1*1000).toFixed(1);
            //M2 = (M2*1000).toFixed(1);
            ba = ba.toFixed(1);
            bf = bf.toFixed(1);
            v1 = v1.toFixed(2);
            v2 = v2.toFixed(2);
            FL = FL.toFixed(2);
            FS = FS.toFixed(2);
            $("#record").append("<tr>  <td style='word-break: break-all'>" + x1 + "<br>" + t1 + "<br> " + t2 + "<br> " + s +"<br> " + M1 +"<br>" + M2 + "</td> " +
            "<td style='word-break: break-all'>" + a + "</td> " +
            " <td style='word-break: break-all'>" + aL + "</td>" +
            "<td style='word-break: break-all'>" + v1 + "</td> " +
            "<td style='word-break: break-all'>" + v2 + "</td> "+
            " <td style='word-break: break-all'>" + FL + "</td>" +
             " <td style='word-break: break-all'>" + FS + "</td>" +
            " <td style='word-break: break-all'>" + ba + "</td>" +
            "<td style='word-break: break-all'>" + bf + "</td>  </tr>");
        }
    });
    $('#uncenter').click(function(){
        var shu = new Array()
        shu[0]= $("#shu1").val();
        shu[1]= $("#shu2").val();
        shu[2]= $("#shu3").val();
        shu[3]= $("#shu4").val();
        shu[4]= $("#shu5").val();
        var p;
        var sum;
        for ( i=0; i<5; i++)
        {
            p=p+shu[i];
        }
        p=p/5;
        for ( i=0; i<5; i++)
            shu[i]=shu[i]-p;
        for ( i=0; i<5; i++)
            sum += shu[i]*shu[i];
        var Ux;
        Ux= Math.sqrt(sum/20);
        Ux = Ux.toFixed(6);
        $("#record_Ux").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+shu[0]+"<br>"
            +shu[1]+"<br>"+shu[2]+"<br>"+shu[3]+"<br>"+shu[4]+"</td>" +
            "<td style='word-break: break-all'>"+Ux+"</td>" +
            "</tr>");
    });
    function SB(L,S){
        var b;
        b = Math.abs((L-S)/L)*100;
        return b;
    }

});


