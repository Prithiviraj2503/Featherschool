// Document is ready
$(document).ready(function () {

// Validate Standard
	$('#standardcheck').hide();	
	let standardError = true;
	$('#standard').keyup(function () {	
	validatestandard();
	});
	
	function validatestandard() {
	let standardValue = $('#standard').val();	
	if (standardValue.length == '') {
	$('#standardcheck').show();
	standardError = false;
		return false;
	}
	else {
		$('#standardcheck').hide();
		standardError = true;	
	}
	}


// Validate Section
$('#sectioncheck').hide();	
let sectionError = true;
$('#section').keyup(function () {	
validatesection();
});

function validatesection() {
let sectionValue = $('#section').val();	
if (sectionValue.length == '') {
$('#sectioncheck').show();
sectionError = false;
	return false;
}
else {
	$('#sectioncheck').hide();
	sectionError = true;	
}
}

// Validate Academicyear
$('#academicyearcheck').hide();	
let academicyearError = true;
$('#academicyear').keyup(function () {	
validateacademicyear();
});

function validateacademicyear() {
let academicyearValue = $('#academicyear').val();	
if (academicyearValue.length == '') {
$('#academicyearcheck').show();
academicyearError = false;
	return false;
}
else {
	$('#academicyearcheck').hide();
	academicyearError = true;	
}
}

//Validate Course Feescheck
$('#coursefeescheck').hide();	
let coursefeesError = true;
$('#coursefees').keyup(function () {	
validatecoursefees();
});

//Submit Button Onclick

	$('#submitbtn').click(function () {	
	
		validatestandard();
		validatesection();
		validateacademicyear();

		if (standardError == true && sectionError == true && academicyearError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
