/**
 * Created by 77dfeba on 2015/11/18.
 */

$(document).ready(function () {
    $('#dlshbtn').click(function () {
        var m1 = $("#m1").val();
        var m2 = $("#m2").val();
        if (m1 == 0 || m2 == 0) {
            alert("质量不能为0,请重新输入!");
            return;
        }
        var v1 = $("#v1").val();
        if (v1 == 0) {
            v1 = 0;
        }
        else {
            v1 = 10 / v1;
        }
        var v2 = 10 / ($("#v2").val());
        var v10 = 10 / ($("#v10").val());
        var p0 = m1 * v10;
        var p1 = m1 * v1 + m2 * v2;
        var p = (Math.abs((p0 - p1))) / p0;
        var e = (v2 - v1) / v10;
        var r = (0.5 * m1 * v1 * v1 + 0.5 * m2 * v2 * v2) / (0.5 * m1 * v10 * v10);
        p0 = (100 * p0).toFixed(4);
        p1 = (100 * p1).toFixed(4);
        p = (100 * p).toFixed(2);
        e = e.toFixed(4);
        r = r.toFixed(4);
        v10 = v10.toFixed(4);
        v1 = v1.toFixed(4);
        v2 = v2.toFixed(4);
        var i = m1+"/"+m2+"/"+v10+"/"+v1+"/"+v2;
        $("#record").append("<tr> " +
            "<td style='word-break: break-all'>" + i + "</td> " +
            "<td style='word-break: break-all'>" + p0 + "E-2/" + p0 + "E-2</td> " +
            "<td style='word-break: break-all'>" + p + "%</td> " +
            "<td style='word-break: break-all'>" + e + "</td> " +
            "<td style='word-break: break-all'>" + r + "</td> </tr>");
    });
});