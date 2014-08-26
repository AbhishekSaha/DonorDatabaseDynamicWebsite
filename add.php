<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Add New User</title>
 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <link href="form.css" rel="stylesheet" type="text/css" />
	<script>
$(document).ready(function() { 
    var options = { 
        success:       showResponse,  
 		clearForm: true
    }; 
 
    // bind to the form's submit event 
    $('#formid').submit(function() { 
        
    	var roy = new Object();
        roy.First = $('#FN').val();
        roy.Last = $('#LN').val();
        
       	var jo = JSON.stringify(roy);
       	
            $.ajax({

                type: "POST",
                url: "confirm.php",
                data: {roy: jo},
                success: function(msg){
                   if(msg=="Bill"){

                   var boolz = confirm("There already seems to be an entry with the same first and last name, do you wish to proceed anyway?");
                   if(boolz==true){
                   $('#formid').ajaxSubmit(options); 
                   }
                   }
                   else{
                    $('#formid').ajaxSubmit(options); 
                   }
                }

            }); // Ajax Call
        
    
        return false; 
    }); 
    
}); 


function showResponse(responseText, statusText, xhr, $form)  { 
    alert('Successfully entered into database!'); 
} 
	
	</script>
</head>
<body>



<div class="login-card">
<h1>Add New User</h1><br />
<form id="formid" method="post" action="dradd.php" onSubmit="return validate(this)" >
Last Name <input type="text" id= "LN" name="LN" />
First Name <input type="text" name="FN" id="FN" />
Email <input type="text" name="email" id="email" />
Phone Number <input type="text" name="phone" id="phone" /> 
Employer <input type="text" name="employer" id="employer" /> <br />
Relationship to EWB <br /> <textarea name="RLSHP" cols="40" rows="5" wrap="type"></textarea>
<input type="submit" id="butt" class="login-submit"></input> 
</form> 


</div>

<script language="javascript"type="text/javascript" >



function validate(form) {

LN = form.LN.value;
FN = form.FN.value;
amount = form.amount.value;

if (amount == "") form.amount.value="0";

if (FN=="" && LN==""){
	alert("No First or Last Name Entered");
	return false;

}
else if (FN ==""){
	alert("No First Name Entered");
	return false;
}
else if (LN == "") {
	alert('No Last Name Entered');
	return false;}
else
	return true;
}



</script>


</body>
</html>