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
        var rr;
        if (c == 1) {
            var b1 = 0.5 * (4 * Math.PI *0.0001 * n * i * r * r) /(Math.pow((r * r + x * x), 1.5));
            rr = (100*(Math.abs(b1 - b) / b1)).toFixed(2) +"%";
            input = x + "，" + b + "，" + n + "，" + r + "，" + i;
        }
        else if (c == 2) {
            rr = (Number(x) + Number(b)).toFixed(4);
            input = b + "，" + x;
        }
        else {
            alert("重新输入输入类型QAQ");
            return
        }


        $('#record').append("<tr><td style='word-break: break-all'>"+c+"</td><td style='word-break: break-all' >" + input + "</td> <td style='word-break: break-all '>" + rr + "</td></tr>");
    });
})