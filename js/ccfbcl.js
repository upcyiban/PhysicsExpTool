/**
 * Created by fzy on 2015/12/5.
 */
$(document).ready(function(){
    $('#ccfbcl').click(function(){
        var b = $('#var1').val();
        var x = $('#var2').val();
        var n = 400,r = 0.105,u = 4*Math.PI*Math.pow(10,-7),i = 300;
        var b1;
        b1 = 0.5*(u*n*i*r*r)/Math.pow((r*r+x*x),1.5);
        var rr;
        rr = Math.abs((b1-b)/b)*100;
        $('#record').append("<tr><td style='word-break: break-all'>"+x+"</td>" +
            "<td style='word-break: break-all'>"+b+"</td> " +
            "<td style='word-break: break-all'>"+b1+"</td> " +
            "<td style='word-break: break-all'>"+rr.toFixed(2)+"%</td></tr>");
    });
})