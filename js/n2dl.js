/**
 * Created by wh980 on 2015/11/16.
 */
$(document).ready(function(){
    $('#n2dlbtn').click(function(){
        var  x1=$('#x').val();
        var t1 = $('#t1').val();
        var t2 = $('#t2').val();
        var s= $('#s').val();
        var a = (( x1 / t2) * (x1/t2)  -  (x1 / t1) * (x1 / t1) ) / (s*2);
        var M=0;
        var F=0;
        var M = $('#M').val();
        var F= $('#F').val();

       if (F==0)
       {
           ans = M * a;
       }
        else
       ans = F / a;
        $('#n2dlanswer').html(ans);
    });
})