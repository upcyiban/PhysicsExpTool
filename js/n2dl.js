/**
 * Created by wh980 on 2015/11/16.
 */
$(document).ready(function(){
    $('#n2dlbtn').click(function(){
        var  x1=$('#x').val();
        var t1 = $('#t1').val();
        var t2 = $('#t2').val();
        var s= $('#s').val();
        x1 = x1 /1000;
        t1 = t1/1000;
        t2 = t2/1000;
        var a = (( x1 / t2) * (x1/t2)  -  (x1 / t1) * (x1 / t1) ) / (s*2);
        if( a==0 ){
            alert("加速度不能为0,请重新输入!");
        }
        var M=0;
        var F=0;
        var M = $('#M').val();
        var F= $('#F').val();
        var ans;
       if (F==0)
       {
           ans = M * a;
           ans = ans.toFixed(4);
           $("#record").append("<tr> <th>"+x1+"</th> <th>"+t1+"</th> <th>"+t2+"</th> <th>" + s+ "</th><th>"+M+"</th> <th>"+ans+"</th> </tr>");
       }
        else
       {
           ans = F / a;
           ans = ans.toFixed(4);

           $("#record").append("<tr> <th>" + x1 + "</th> <th>" + t1 + "</th> <th>" + t2 + "</th> <th>" + s+ "</th>  <th>" + F + "</th> <th>" + ans + "</th> </tr>");
       }
    });
})