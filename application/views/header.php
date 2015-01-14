<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Greeklish2Greek Converter</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- custom css -->
<link href="assets/custom.css" rel="stylesheet">

<!-- jquery before bootstrap -->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


<script type="text/javascript" src="converter.js"></script>

<script type="text/javascript">

var previousText = "";

function convertGreeklishText() {

  var greeklishString = $('#greeklish_text');

  //if current string is not allready converted 
  if (greeklishString != previousText) {

    var newText="";

    try {
      newText = greeklishToGreek($(greeklishString).val());
    } catch(err) {
		//feature error handling
    }

    $("#greek_text").val(newText);
    
    previousText = $(greeklishString).val();

  }
}


function convertGreekText() {
  $('#greeklish_text').val(greekToGreeklish($('#greek_text').val()));
}

$(document).ready(function() {
  $('#greeklish_text').focus();

  convertGreeklishText();

  //attach event handler on greeklish box  
  $('#greeklish_text').bind("mouseover keyup paste click focusin focusout", function(e) {
    convertGreeklishText();  
  });

  $("#greeklish_text").mouseup(function(){
    convertGreeklishText();  
  });
 
  $("#greeklish_text").mousedown(function() {
    convertGreeklishText();  
  });
 
  
  $('#greek_text').bind("mouseover keyup paste click focusin focusout", function(e) {
    convertGreekText();  
  });

  
});

</script>

</head>
<body>

	<!-- Wrap all page content here -->
	<div id="wrap">

		<div class="page-header">
			<h1>Greeklish2Greek</h1>
		</div>