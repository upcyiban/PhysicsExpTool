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
        var c = 0.25*(a11 - a21 + a12 - a22);
        var z = parseInt("12.2");
        var p = Math.PI;
/*        var a;
        var l = 0.01*(Math.sin(a))/k;*/
        $("#record").append("<tr> <th>"+a11+"</th> <th>"+a12+"</th> <th>"+a21+"</th> <th>"+a22+"</th> <th>"+z+"</th> </tr>");
    });
});
