$(document).ready(function()
{
	$(".mobile-nav-open").click(function(){
		$("#mobile-nav ul").css("display" , "block");
	});
	$(".mobile-nav-close").click(function(){
		$("#mobile-nav ul").css("display" , "none");
	});
});