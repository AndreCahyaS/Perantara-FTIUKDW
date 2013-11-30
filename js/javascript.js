$(document).ready(function(){
	$("#ubahpassword").hide(5);

	
	$("#halsaya").click(function(){
		$("#ubahpassword").hide(5);
		$("#halamansaya").show(5);
	})

	$("#ubahpass").click(function(){
		$("#halamansaya").hide(5);
		$("#ubahpassword").show(5);
	})



})