$("#sendData").click(function() {
	var statusInput = "";

	if($("#fileSound").val().trim() == "") {
		$("#fileSound").click();
		statusInput = "false";
		return false;
	}

	if (statusInput !== "false") {
		$("#loadingSpinner").removeClass("none");

		var sound = $("#fileSound").val();

		var data = new FormData();
		data.append('fileSound', $("#fileSound")[0].files[0]);

		$.ajax({
			url: "controller/upload.php",
			processData: false,
			contentType: false,
			type: 'POST',
			data: data,

			success: function(result) {
				if (result == "success") {
					$("#loadingSpinner").addClass("none");
					$("#popupsuccess").click();
				}
			}
		});
	}
});