$(document).ready(function(){
    $('#DB').click(function(){
        var   RX1= $("#RX1").val();
        var   a= $("#a").val();
        var    c1= $("#c1").val();
        var    R01= $("#R01").val();
        var   bR0= $("#bR0").val();
        var    bn= $("#bn").val();

        var Rx;
        Rx = SRx(c1,R01);

        var S;
        S = SS(bn,bR0,R01);

        $("#record_DB").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+RX1+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+a+"</td style='word-break: break-all'>" +
            " <td style='word-break: break-all'>"+c1+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+R01+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+bR0+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+bn+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+Rx+"</td style='word-break: break-all'> " +
            " <td style='word-break: break-all'>"+S+"</td style='word-break: break-all'> " +
            "</tr>");
    });
    $('#ux').click(function(){

        for(;;)
        {
            var   Rx2= $("#Rx2").val();
            if(Rx2 == 0)
            {
                alert("你输入了0，表示输入结束,再输入的数据将无效")
                break;
            }
            else
            {
                var sum;
                sum += UxSum(Rx2);
            }
        }


            $("#record_Ux").append(
            "<tr> " +
            "<td style='word-break: break-all'>"+xxz+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+M+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+NJ+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+WJ+"</td style='word-break: break-all'>" +
            " </tr>");
    });
    $('#SB').click(function(){
        var   c2= $("#c2").val();
        var   R02= $("#R02").val();
        var   RxL= $("#RxL").val();

        var Rx3;
        Rx3 = SRx(c2,R02);
        $("#record_SB").append("<tr>" +
            " <td style='word-break: break-all'>"+c2+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+R02+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+RxL+"</td style='word-break: break-all'> " +
            "<td style='word-break: break-all'>"+Rx3+"</td style='word-break: break-all'>" +
            " </tr>");
    });
    function SRx(c,R0){
        var rx;
        rx = c*R0;
        return rx;
    }
    function SS(bn,bR0,R0){
        var s;
        s = bn/(bR0/R0);
        return s;
    }
    function UxSum(x){
        var ux;
    }
});