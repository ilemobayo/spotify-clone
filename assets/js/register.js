
// jquery executes on page ready

//toggles hide/show register/login form
$(document).ready(function() {

	$("#hideLogin").click(function() {
        $("#loginForm").hide();
        console.log("loginForm: hide js");
        $("#registerForm").show();
        console.log("registerForm: show js");
	});

	$("#hideRegister").click(function() {
        $("#loginForm").show();
        console.log("loginForm: show js");
        $("#registerForm").hide();
        console.log("registerForm: hide js");
	});
});