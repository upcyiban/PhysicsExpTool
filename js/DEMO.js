/**
 * Created by skyADMIN on 15/11/15.
 */

$(document).ready(function(){
    $('#sfysbtn').click(function(){
        var a1 = $('#var1').val();
        var a2 = $('#var2').val();
        var ans = a1 * a2;
        $('#sfysanswer').html(ans);
    });
})