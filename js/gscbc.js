/**
 * Created by 77dfeba on 2015/11/19.
 */
$(document).ready(function(){
    $('#gscbcbtn').click(function(){
        var a11 = $('#angle1').val();
        var a12 = $('#angle2').val();
        var a21 = $('#angle3').val();
        var a22 = $('#angle4').val();
        var k = $('#k').val();
        var a11z = parseInt(a11);
        var a12z = parseInt(a12);
        var a21z = parseInt(a21);
        var a22z = parseInt(a22);
        var a11c = 100*(a11-a11z)+a11z*60;alert(a11c);
        var a12c = 100*(a12-a12z)+a12z*60;alert(a12c);
        var a21c = 100*(a21-a21z)+a21z*60;alert(a21c);
        var a22c = 100*(a22-a22z)+a22z*60;alert(a22c);
        var c = Math.abs(0.25*(a21c - a11c + a22c - a12c));alert(c);
        c = c/60/180*Math.PI;alert(c);
        var l = 0.0001*Math.sin(c)/k*Math.pow(10,9);
        $("#record").append("<tr> <td style='word-break: break-all'>"+a11+"</td> " +
            "<td style='word-break: break-all'>"+a12+"</td>"  +
            "<td style='word-break: break-all'>"+a21+"</td> " +
            "<td style='word-break: break-all'>"+a22+"</td>"  +
            "<td style='word-break: break-all'>"+ l.toFixed(4)+"</td> " +
            "</tr>");
    });
});
