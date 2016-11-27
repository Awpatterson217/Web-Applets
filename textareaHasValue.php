<!DOCTYPE html>
<!--
This snippet of code forces a user to enter data into a field before they can submit a form. 
The PHP could be removed.

This code was initially written to force users who were editing a post to document there changes. 
PHP was used on the backend - articles the users had written were stored on a MySQL DB. 
-->
<html>
<head>
	<title>
		textareaHasValue
	</title>
</head>
<body>
	<?php
		// Is the user editing a post, or creating a new one.
		$isEditing = true;
	?>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<?php
	/*
	*@author Adam Patterson
	*/
	if($isEditing){
		echo "<script>
		$(document).ready(function(){
			
			$('#editDoc').css('display', 'table-row');
			//$('#the_submit').prop('disabled','false');
			//$('#the_submit').attr('title','Good To Go'); 
			$('#the_submit').prop('disabled','true');
			$('#the_submit').attr('title','Edit Must Be Documented');

		});

		$(document).ready(function () {
			$('#editTextArea').keyup(function(){

				var val = $.trim($(\"#editTextArea\").val());
				if (val != \"\") {
				$('#the_submit').removeAttr('disabled');
				$('#the_submit').attr('title','Good To Go');
				//$('#the_submit').prop('disabled','true');
				//$('#the_submit').attr('title','Edit Must Be Documented'); 
				}
			});
		});

		$(document).ready(function () {
			$('#editTextArea').keyup(function(){

				var val = $.trim($(\"#editTextArea\").val());
				if (val == \"\") {
				//$('#the_submit').removeAttr('disabled');
				//$('#the_submit').attr('title','Good To Go');
				$('#the_submit').prop('disabled','true');
				$('#the_submit').attr('title','Edit Must Be Documented'); 
				}
			});
		});
		</script>";
	}
	?>
	<table>
	<tr style='display:none' id="editDoc">
	<td>
	<div>    
	<h1>documentation of edit</h1><br />
	What have you changed?<br />
	<textarea id="editTextArea"></textarea>
	</div>
	</td>
	</tr>
	</table>
	
	<input type="submit" id="the_submit">
	
</body>
</html>
