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
        var c = 0.25*(Math.abs(a11 - a21) + Math.abs(a12 - a22));
        var z = parseInt(c);
        var x = (c - z)/60;
        var p = Math.PI;
        c = (x + z)*p/180;
        var l = 0.01*(Math.sin(c))/k*Math.pow(10,9);
        l = l.toFixed(4);
        $("#record").append("<tr> <th>"+a11+"</th> <th>"+a12+"</th> <th>"+a21+"</th> <th>"+a22+"</th> <th>"+l+"</th> </tr>");
    });
});
