$(document).ready(function () {
    $('#ysmlbtn').click(function () {//creat by 77dfeba
        var d = $('#d').val();
        var l = $('#l').val();
        var m = $('#m').val();
        var f = $('#f').val();
        var i, da, la, ud, ul, ur, e,
            dpointnum = (d.match(/ /g)).length + 1,
            lpointnum = (d.match(/ /g)).length + 1;
        //get average
        function average(num, string) {
            var average = 0;
            for (i = 0; i < dpointnum; i++) {
                var rs = parseFloat(string);
                average += rs;
                string = string.replace(rs, '');
            }
            return (average / dpointnum).toFixed(4);
        }

        da = average(dpointnum, d);
        la = average(lpointnum, l);
        //end average

        var T = da / la * 0.1;//get fix number T
        if (T <= 0.01) {
            T = 1.001
        } else if (T <= 0.02) {
            T = 1.002
        } else if (T <= 0.03) {
            T = 1.005
        } else if (T <= 0.04) {
            T = 1.008
        } else if (T <= 0.05) {
            T = 1.014
        } else if (T <= 0.06) {
            T = 1.019
        } else if (T <= 0.08) {
            T = 1.033
        } else {
            T = 1.055
        }
        //end T
        //get uncertainty
        function uncertainty(average, num, string, min) {
            var ua = 0;
            var ub = min / Math.pow(3, 0.5);
            for (i = 0; i < num; i++) {
                var n = parseFloat(string);
                string = string.replace(n, '');
                ua += Math.pow(n - average, 2);
            }
            ua = Math.pow(ua / num / (num - 1), 0.5);
            ua = Math.pow(Math.pow(ua, 2) + Math.pow(ub, 2), 0.5);
            return ua.toFixed(4);
        }

        ud = uncertainty(da, dpointnum, d, 0.00001);//0.01mm
        ul = uncertainty(la, lpointnum, l, 0.001);///0.01m
        //end uncertainty
        var E = 1.6067 * Math.pow(la*0.01, 3) * m *0.001* Math.pow(f, 2) * T / Math.pow(da * 0.001, 4) * 0.0000000001;//E=1.6067*l^3*f^2*m*m/d^4
        E = E.toFixed(4);
        var urd = -4 * Math.pow(da, -1) * ud;//uncertain d = -4/d
        var url = 3 * Math.pow(la, -1) * ul;//uncertainty l = 3*l
        ur = Math.pow(Math.pow(urd, 2) + Math.pow(url, 2), 0.5);//compound uncertainty ur
        ur = ur.toFixed(4);
        var Er = (E * ur).toFixed(4);
        $('#record').append("<tr>" +
            "<td style='word-break: break-all'>" + m + 'g、' + f + 'hz..' + "</td>" +
            "<td style='word-break: break-all'>" + da + 'mm、' + la + 'cm' + "</td>" +
            "<td style='word-break: break-all'>" + ud + '、' + ul + '、' + ur + "</td>" +
            "<td style='word-break: break-all'>" + '(' + E + '±' + Er + ')' + 'E^10' + "</td>" +
            "</tr>"
        );
    });
});
