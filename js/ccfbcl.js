/**
 * Created by fzy on 2015/12/5.
 */
$(document).ready(function () {
    $('#ccfbcl').click(function () {
        var c = $('#c').val();
        Number(c);
        var b = $('#b').val();
        Number(b);
        var x = $('#x').val();
        Number(x);
        var n = $('#n').val();
        Number(n);
        var r = $('#r').val();
        Number(r);
        var i = $('#i').val();
        Number(i);
        var input;
        if (c == 1) {

            var u = 4 * Math.PI * Math.pow(10, -7);
            var b1 = 0.5 * (u * n * i * r * r) / Math.pow((r * r + x * x), 1.5);
            var rr = Math.abs((b1 - b) / b) * 100;
            input = b + "-" + x + "-" + n + "-" + r + "-" + i;
        }
        else if (c == 2) {
            rr = x + b;
            input = b + "-" + x;
        }
        else {
            alert("重新输入输入类型QAQ");
            return
        }


        $('#record').append("<tr><td style='word-break: break-all'>" + x + "</td>" +
            "<td style='word-break: break-all'>" + b + "</td> " +
            "<td style='word-break: break-all'>" + b1 + "</td> " +
            "<td style='word-break: break-all'>" + rr.toFixed(2) + "%</td></tr>");
    });
})