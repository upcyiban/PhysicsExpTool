/**
 * Created by wh980 on 2015/11/16.
 */
$(document).ready(function () {
    $('#n2dlbtn').click(function () {
        var u = $('#u').val();//u
        var i = $('#i').val();//i
        var p = $('#p').val();//p
        var a=u*i/(0.52*p);
        a= a.toFixed(4);
        alert("热功率为"+a+"W");

    });

});



