
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
    }




    );
    function  Submit() {
        var Dsy1 = $('#Dsy1').val();
        var Dsy2 = $('#Dsy2').val();
        var Dsy3 = $('#Dsy3').val();
        var Dsy4 = $('#Dsy4').val();
        var Dsy5 = $('#Dsy5').val();
        var KyN1 = $('#KyN1').val();
        var KyN2 = $('#KyN2').val();
        var KyN3 = $('#KyN3').val();
        var KyN4 = $('#KyN4').val();
        var KyN5 = $('#KyN5').val();
        var KyW1 = $('#KyW1 ').val();
        var KyW2 = $('#KyW2').val();
        var KyW3 = $('#KyW3').val();
        var KyW4 = $('#KyW4').val();
        var KyW5 = $('#KyW5').val();
        var XG1 = $('#XG1').val();
        var XG2 = $('#XG2').val();
        var XG3 = $('#XG3').val();
        var XG4 = $('#XG4').val();
        var XG5 = $('#XG5').val();
        var HKN1 = $('#HKN1').val();
        var HKN2 = $('#HKN2').val();
        var HKN3 = $('#HKN3').val();
        var HKN4 = $('#HKN4').val();
        var HKN5 = $('#HKN5').val();
        var HKW1 = $('#HKW1').val();
        var HKW2 = $('#HKW2').val();
        var HKW3 = $('#HKW3').val();
        var HKW4 = $('#HKW4').val();
        var HKW5 = $('#HKW5').val();

        var Dsy = (Dsy1+Dsy2+Dsy3+Dsy4+Dsy5)/5;
        var KyN = (KyN1+KyN2+KyN3+KyN4+KyN5)/5;
        var KyW = (KyW1+KyN2+KyN3+KyN4+KyN5)/5;
        var MQD = $('#MQD').val();
        var XG = (XG1+XG1+XG3+XG4+XG5)/5;
        var HKN = (HKN1+HKN2+HKN3+HKN4+HKN5)/5;
        var HKW = (HKN1+HKN2+HKN3+HKN4+HKN5)/5;


        var t01 = $('#t01').val();
        var t02 = $('#t02').val();
        var t03 = $('#t03').val();
        var t04 = $('#t04').val();
        var t05 = $('#t05').val();
        var t11 = $('#t11').val();
        var t12 = $('#t12').val();
        var t13 = $('#t13').val();
        var t14 = $('#t14').val();
        var t15 = $('#t15').val();

        var t0 = (t01+t02+t03+t04+t05)/5;
        var t1 =(t11+t12+t13+t14+t15)/5;

        var t21 = $('#t21').val();
        var t22 = $('#t22').val();
        var t23 = $('#t23').val();
        var t24 = $('#t24').val();
        var t25 = $('#t25').val();
        var t31 = $('#t31').val();
        var t32 = $('#t32').val();
        var t33 = $('#t33').val();
        var t34 = $('#t34').val();
        var t35 = $('#t35').val();
        var t41 = $('#t41').val();
        var t42 = $('#t42').val();
        var t43 = $('#t43').val();
        var t44 = $('#t44').val();
        var t45 = $('#t45').val();

        var t2 = (t21+t22+t23+t24+t25)/5;
        var t3 =(t31+t32+t33+t34+t35)/5;
        var t4 =(t41+t42+t43+t44+t45)/5;

        var x5_1 = $('#x5_1').val();
        var x5_2 = $('#x5_2').val();
        var x5_3 = $('#x5_3').val();
        var x5_4 = $('#x5_4').val();
        var x5_5 = $('#x5_5').val();
        var x15_1 = $('#x15_1').val();
        var x15_2 = $('#x15_2').val();
        var x15_3 = $('#x15_3').val();
        var x15_4 = $('#x15_4').val();
        var x15_5 = $('#x15_5').val();
        var x25_1 = $('#x25_1').val();
        var x25_2 = $('#x25_2').val();
        var x25_3 = $('#x25_3').val();
        var x25_4 = $('#x25_4').val();
        var x25_5 = $('#x25_5').val();

        var x5 = (x5_1+x5_2+x5_3+x5_4+x5_5)/5;
        var x15 =(x15_5+x15_4+x15_3+x15_2+x15_1)/5;
        var x25 =(x25_1+x25_2+x25_3+x25_4+x25_5)/5;

        var x10_1 = $('#x10_1').val();
        var x10_2 = $('#x10_2').val();
        var x10_3 = $('#x10_3').val();
        var x10_4 = $('#x10_4').val();
        var x10_5 = $('#x10_5').val();
        var x20_1 = $('#x20_1').val();
        var x20_2 = $('#x20_2').val();
        var x20_3 = $('#x20_3').val();
        var x20_4 = $('#x20_4').val();
        var x20_5 = $('#x20_5').val();

        var x10 =(x10_5+x10_4+x10_3+x10_2+x10_1)/5;
        var x20 =(x20_1+x20_2+x20_3+x20_4+x20_5)/5;

        var SYM = $('#SYM').val();
        var KYM = $('#KYM').val();
        var MQM = $('#MQM').val();
        var XGM = $('#XGM').val();
        var HKM = $('#HKM').val();
    }


});
