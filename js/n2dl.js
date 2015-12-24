/**
 * Created by wh980 on 2015/11/16.
 */
$(document).ready(function () {
    $('#n2dlbtn').click(function () {
        var x1 = $('#x').val();
        var t1 = $('#t1').val();
        var t2 = $('#t2').val();
        var s = $('#s').val();

        x1 = x1 / 1000;
        t1 = t1 / 1000;
        t2 = t2 / 1000;
        var aL;
        var a = (( x1 / t2) * (x1 / t2) - (x1 / t1) * (x1 / t1) ) / (s * 2);
        if (a == 0) {
            alert("加速度不能为0,请重新输入!");
        }

        var M1 = $('#M1').val();
        var  M2= $('#M2').val();
        M1 = M1 / 1000;
        M2 = M2 / 1000;
        aL = M2*9.8/(M1+M2);
        var FL;
        var FS;
        FL = M2*aL;
        FS = M2*a;
        var ba;
        var bf;
        ba = SB(aL,a);
        bf = SB(FL,FS);

        if (a != 0) {
            aL = aL.toFixed(2);
            a = a.toFixed(2);
            x1 = (x1*1000).toFixed(0);
            t1 = (1000*t1).toFixed(2);
            t2 = (t2*1000).toFixed(2);
            M1 = (M1*1000).toFixed(1);
            M2 = (M2*1000).toFixed(1);
            ba = ba.toFixed(1);
            FL = FL.toFixed(4);
            FS = FS.toFixed(4);
            bf = bf.toFixed(1);
            $("#record").append("<tr>  <td style='word-break: break-all'>" + x1 + "<br>" + t1 + "<br> " + t2 + "<br> " + s +"<br> " + M1 +"<br>" + M2 + "</td> " +
            "<td style='word-break: break-all'>" + a + "</td> " +
            " <td style='word-break: break-all'>" + aL + "</td>" +
            "<td style='word-break: break-all'>" + FS + "</td> " +
            "<td style='word-break: break-all'>" + FL + "</td> " +
            " <td style='word-break: break-all'>" + ba + "</td>" +
            "<td style='word-break: break-all'>" + bf + "</td>  </tr>");
        }
    });
    function SB(L,S){
        var b;
        b = Math.abs((L-S)/L)*100;
        return b;
    }
});


