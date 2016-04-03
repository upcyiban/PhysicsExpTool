$(document).ready(function () {
    $('#ysmlbtn').click(function () {
        var d = $('#d').val();//creat by 77dfeba
        var l = $('#l').val();
        var m = $('#m').val();
        var f = $('#f').val();
        var i, da, la, ud, ul, ur, e,
            dpointnum = (d.match(/ /g)).length + 1,
            lpointnum = (d.match(/ /g)).length + 1;

        function average(num, string) {//get average
            var average;
            for (i = 0; i < dpointnum; i++) {
                var rs = parseFloat(d);
                da += rs;
                string = string.replace(rs, '');
            }
            return (average / dpointnum).toFixed(4);
        }
        da = average(dpointnum, d);
        la = average(lpointnum, l);
        var T = da / l;
        if (T <= 0.01) {//get fix number T
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
        function uncertainty(average, num, string, min) {//get uncertainty
            var ua = 0;
            var ub = min / Math.pow(3, 0.5);
            for (i = 0; i < num; i++) {
                var n = parseFloat(d);
                string = string.replace(n, '');
                ua += Math.pow(n - average, 2);
            }
            ua = Math.pow(u / num / (num - 1), 0.5);
            ua = Math.pow(Math.pow(ua, 2) + Math.pow(ub, 2), 0.5);
            return ua;
        }
        var E = 1.6067 * Math.pow(l, 3) * m * Math.pow(f, 2) / Math.pow(d, 4) * T;
        $('#record').append(

        );
    });
})
