$(document).ready(function() {
	$("#change").click(function(){
		htmlobj = $.ajax({
			url:"/code/Ajax-jQuery/time.php",
			async:false
		});
		$("#content").html(htmlobj.responseText);
  	});
});