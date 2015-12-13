$(document).ready(function(){
    $('#JS_J0').click(function(){
        var   SYM= $("#SYM").val();
        var   SYD= $("#SYD").val();
        var    T0= $("#T0").val();
        var    T1= $("#T1").val();

        var J1;
        J1 = lilunj_1(SYM,SYD);

        var J0;
        J0 = shijij_0(J1,T0,T1);

        var k;
        k = kJ(J1,T1,T0);


        $("#record_DB").append("<tr> " +
            "<td style='word-break: break-all'>"+SYM+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+J0+"</td style='word-break: break-all'>" +
            " <td style='word-break: break-all'>"+k+"</td style='word-break: break-all'> </tr>");
    });
    $('#JS_J2').click(function(){
        var   XZ= $("#XZ").val();
        var   M= $("#M").val();
        var   NJ= $("#NJ").val();
        var   WJ= $("#WJ").val();
        var   T= $("#T").val();
        var   K= $("#K").val();
        var   J0= $("#J0").val();
        if(NJ==WJ)
        {
            alert("");
        }

        else if(XZ==3)
        {
            LJ = lilunj_4(M,WJ);
            SJ = shijij_1(J0,T,K);
            NJ=0;
            if(SJ<0)
            {
                alert("输入数据有误，使得实验测量的转动惯量小于0了")
            }
            xd = XiangDuiWuX(LJ,SJ);
        }
        else
        {
            alert("不懂你要人家做什么");
        }

        $("#record_SB").append("<tr> <td style='word-break: break-all'>"+xxz+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+M+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+NJ+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+WJ+"</td style='word-break: break-all'>" +
            " <td style='word-break: break-all'>"+T+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+K+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+J0+"</td style='word-break: break-all'>" +
            " <td style='word-break: break-all'>"+LJ+"</td style='word-break: break-all'>" +
            " <td style='word-break: break-all'>"+SJ+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+xd+"</td style='word-break: break-all'> </tr>");
    });
});