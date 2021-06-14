function sendOTP() {
	$(".error").html("").hide();
	var number = $("#mobile").val();

	if (number.length == 10 && number != null) {
		// var input = {
		// 	"mobile_number" : number,
		// 	"action" : "send_otp"
		// };
		// console.log(number.length);
		$.ajax({
			url : '../functions/function.php', //'controller.php',
			type : 'POST',
			data :{
				"mobile_number" : number,
				"action" : "send_otp"
			},
			success : function(response) {
				$(".container").html(response);
			}
		});
	} else {
		$(".error").html('Please enter a valid number!')
		$(".error").show();
	}
}

function verifyOTP() {
	$(".error").html("").hide();
	$(".success").html("").hide();
	var otp = $("#mobileOtp").val();
	// var input = {
	// 	"otp" : otp,
	// 	"action" : "verify_otp"
	// };
	if (otp.length == 6 && otp != null) {
	console.log(otp);

		$.ajax({
			url : 'http://localhost/forgot/include/controller.php',
			type : 'POST',
			dataType : "json",
			data : {
				"otp" : otp,
				"action" : "verify_otp"
			},
			success : function(response) {
				$("." + response.type).html(response.message)
				$("." + response.type).show();
				window.location = 'http://localhost/forgot/include/reset-pass.php';
			},
			error : function() {
				alert("ss");
			}
		});
	} else {
		$(".error").html('You have entered wrong OTP.')
		$(".error").show();
	}
}
