$(document).ready(function(){
	$("#change_load").click(function(){
		$("#content_load").load(
			"/code/Ajax-jQuery/time.php #time",
			{limit: 25,time: "time:"},
			function(responseText,status,xhr) {
			  console.log(xhr.statusText);
			  console.log(status);
			  console.log(responseText);
			});
	});
});