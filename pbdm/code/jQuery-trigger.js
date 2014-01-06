$(document).ready(function() {
	$("#change").click(function(){
		$("#content").html(new Date().getSeconds());
  	});
  	$("#change_bis").click(function(){
		$("#change").trigger("click");
	});
});
