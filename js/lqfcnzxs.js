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
        r=r/1000;
        d=d/1000;
        var p =950/(1+0.0005*T);
        var V=4/3*3.14*r*r*r;
        var nzxs;
        nzxs=(m-p*V)*9.8/(3*3.14*d*v0);
        var Re=d*v0*p/nzxs;

            $("#record").append("<tr>  <td style='word-break: break-all'>" + T + "<br>" + v0+ "<br> " +  m*1000 + "<br> " + d*1000 + "</td>"+
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