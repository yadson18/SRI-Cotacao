$(document).ready(function(){
	$(".link-login, .link-register").on("click", function(){
		if($(this).attr("class") === "link-register"){
			$("#login-form").hide();
			$("#register-form").show();
			$(".modal-title").text("Faça seu registro");
		}
		if($(this).attr("class") === "link-login"){
			$("#register-form").hide();
			$("#login-form").show();
			$(".modal-title").text("Login");
		}
	});
});