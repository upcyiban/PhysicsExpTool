/**
 * Created by 77dfeba on 2015/12/8.
 */
$(document).ready(function() {
    $('#rrbcl').click(function() {
        var up1 = $('#up1').val();up1 = Number(up1);
        var up2 = $('#up2').val();up2 = Number(up2);
        var p0 = $('#p0').val();p0 = Number(p0);
        var p1 = p0 + up1/20;p1 = p1.toFixed(4);
        var p2 = p0 + up2/20;p2 = p2.toFixed(4);
        var y=(Math.log(p1) - Math.log(p0))/(Math.log(p1) - Math.log(p2));y = y.toFixed(4);
        var h= up1+'，'+up2 +'，'+p0;
        $("#record").append("<tr> <td style='word-break: break-all'>"+h+"</td>"+
            "<td style='word-break: break-all'>"+p1+"kPa</td> " +
            "<td style='word-break: break-all'>"+p2+"kPa</td> " +
            "<td style='word-break: break-all'>"+y+"</td></tr>");
    });
});
