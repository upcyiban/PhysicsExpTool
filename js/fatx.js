/**
 * Created by 77dfeba on 2015/11/25.
 */

$(document).ready(function(){
    $('#fatxbtn').click(function (){
        var U11  = $('#U1').val();
        var I11  = $('#I1').val();
        var U22  = $('#U2').val();
        var I22  = $('#I2').val();
        var A;
        var B;
        A = (U11-U22) / Math.log(I11/I22);
        B = U11 - A * Math.log(I11);
        $("#record").append("<tr> <th>"+U11+"</th> <th>"+I11+"</th> <th>"+U22+"</th> <th>"+I22+"</th> <th>"+A+"</th> <th>"+B+"</th> </tr>");
    });
});