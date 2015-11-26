/**
 * Created by 77dfeba on 2015/11/18.
 */

$(document).ready(function(){
    $('#dlshbtn').click(function (){
        var m1  = $("#m1" ).val();
        var m2  = $("#m2").val();
        if(m1 == 0 || m2 ==0){
            alert("质量不能为0,请重新输入!");
            return ;
        }
        var v1  = $("#v1").val();
        if(v1 == 0){
            v1 = 0;
        }
        else{
            v1  = 1/v1;
        }
        var v2  = 1/($("#v2").val());
        var v10 = 1/($("#v10").val());
        var p0  = 50*m1*v10*v10;
        var p1  = 50*m1*v1*v1+50*m2*v2*v2;
        var p = (Math.abs((p0 - p1)))/p0;
        var e = (v2 - v1)/v10;
        var r = p1/p0;
        p0 = p0.toFixed(4);p1 = p1.toFixed(4);
        p = (p*100).toFixed(2);//换算成百分比
        e = e.toFixed(4);
        r = r.toFixed(4);
        $("#record").append("<tr> <th>"+m1+"</th> <th>"+m2+"</th> <th>"+p0+"e-2</th> <th>"+p1+"e-2</th> <th>"+p+"%</th> <th>"+e+"</th> <th>"+r+"</th> </tr>");
    });
});