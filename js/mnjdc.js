/**
 * Created by yyljj on 2016/3/24.
 */
var n = 0;
function sum1(){
    var sum = 0;
    for(var i=0;i<n;i++){
        sum += Number($('#r'+i).val());
        $('#r'+i).val("");
    }

    var ave=1.0*sum/n;
    ave=ave.toFixed(2);
    $("#date").append('<tr> <th style="word-break: break-all;text-align: center">'+ave+'</th> <th style="word-break: break-all;text-align: center">'+Math.log(ave).toFixed(2)+'</th></tr>');
}
 $(document).ready(function (){

    $('#submitr').click(function(){
        var rNum = $('#rNum').val();
        n = rNum;
        for(var i = 0;i < rNum; i++){
            $('#record').append(" <div class='form-group'><label for='inputPassword3' class='col-sm-2 control-label'>r"+(i+1)+"</label> <div class='col-sm-8'> <input type='text' class='form-control' id='r"+i+"' placeholder='请输r"+(i+1)+"'> </div> </div> ");

        }
        $("#record").append('<button id="sum" class="btn btn-default" onclick = "sum1()" >计算</button>');

    }) ;
})
