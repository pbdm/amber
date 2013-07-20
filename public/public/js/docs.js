//为Table 添加样式
$('.cv table').addClass('table table-hover');

$(document).ready(function(){
    $('.span5 a').each(function(){
        $(this).attr('target','_blank');   
    });  
});