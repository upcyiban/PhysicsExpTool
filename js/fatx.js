/**
 * Created by 77dfeba on 2015/11/25.
 */

$(document).ready(function(){
    $('#fatxbtn').click(function (){
        var U11  = $('#U1').val();Number(U11);
        var I11  = $('#I1').val();Number(I11);
        var U22  = $('#U2').val();Number(u22);
        var I22  = $('#I2').val();Number(I22);
        var A;
        var B;
        A = (U11-U22) / Math.log(I11/I22);
        B = U11 - A * Math.log(I11);
        var h = U11 +'£¬'+ I11 +'£¬'+ U22 +'£¬'+ I22;
        $("#record").append("<tr> <td style='word-break: break-all'>"+h+"</td>  <td style='word-break: break-all'>"+A+"</td> <td style='word-break: break-all'>"+B+"</td> </tr>");
    });
});