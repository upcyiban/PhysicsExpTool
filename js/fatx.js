$(document).ready(function(){
    $('#fatxbtn').click(function (){
        var U1  = $("#U1").val();
        var I1  = $("#I1").val();
        var U2  = $('#U2').val();
        var I2  = $('#I2').val();
        if(U1 == 0 || I1 ==0 || U2 == 0 || I2 == 0){
            alert("请输入正确的数据！");
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
        var p0  = 0.5*m1*v10*v10;
        var p1  = 0.5*m1*v1*v1+0.5*m2*v2*v2;
        var p = (Math.abs((p0 - p1)))/p0;
        var e = (v2 - v1)/v10;
        var r = p1/p0;
        p0 = p0.toFixed(4);p1 = p1.toFixed(4);
        p = (p.toFixed(6))*100;
        e = e.toFixed(4);
        r = r.toFixed(4);
        $("#record").append("<tr> <th>"+p0+"</th> <th>"+p1+"</th> <th>"+p+"%</th> <th>"+e+"</th> <th>"+r+"</th> </tr>");
    });
});