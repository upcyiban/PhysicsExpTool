/**
 * Created by lenovo on 2016/3/24.
 */
$(document).ready(function () {
    $('#n2dlbtn').click(function () {
        var T = $('#T').val();
        var m = $('#m').val();
        var v0 = $('#v0').val();
        var d = $('#d').val();
        m = m/ 1000;
        var r=d/2;
        var p =950/(1+0.0005*T)*r*r*r;
        var V=4/3*3.14*r;
        var nzxs;
        nzxs=(m-p*V)*9.8/(3*3.14*d*v0);
        var Re=d*v0*p/nzxs;

            $("#record").append("<tr>  <td style='word-break: break-all'>" + T + "<br>" + m + "<br> " + v0 + "<br> " + d + "</td>"+
                "<td style='word-break: break-all'>" + p + "</td> " +
                " <td style='word-break: break-all'>" + nzxs + "</td>" +
                "<td style='word-break: break-all'>" + Re+ "</td>  </tr>");

    });
    function SB(L,S){
        var b;
        b = Math.abs((L-S)/L)*100;
        return b;
    }
});