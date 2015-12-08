/**
 * Created by 77dfeba on 2015/12/8.
 */
$(document).ready(function() {
    $('#rrbcl').click(function() {
        var up1 = $('#up1').val();
        var up2 = $('#up2').val();
        var p0 = $('#p0').val();
        var t0 = $('#t0').val();
        up1 /=20;up2 /=20;
        var y=(Math.log(up1) - Math.log(p0))/(Math.log(up1) - Math(up2));
        $('#record').appendChild("<tr> " +
            "<td style='word-break: break-all'>"+up1+"</td> " +
            "<td style='word-break: break-all'>"+up2+"</td> " +
            "<td style='word-break: break-all'>"+y+"</td></tr>");
    });
});