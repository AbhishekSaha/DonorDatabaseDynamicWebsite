<!doctype HTML>
<head>

  <meta charset="utf-8" />
    <title>Add New Donation</title>
 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <link href="form.css" rel="stylesheet" type="text/css" />
	<script>
$(document).ready(function() { 
    var options = { 
        success:       showResponse,  
 		clearForm: true
    }; 
    
    $('#formtwo').submit(function() { 
        
    	var roy = new Object();
        roy.Jon = $('#DONORID').val();
        
        
       	var jo = JSON.stringify(roy);
       	
            $.ajax({

                type: "POST",
                url: "cfirm.php",
                data: {roy: jo},
                success: function(msg){
                   if(msg==0){
                   alert("DonorID is not in the system, please recheck");
                   }
                   else{
                    $('#formtwo').ajaxSubmit(options); 
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

<div id = "from" class="login-card">
<h1>Add New Donation</h1><br />
<form id="formtwo" method="post" action="sert.php">
DonorId <input type="text" name="DONORID" id="DONORID" />
Date <input type="date" name="ddate" id="ddate"/><br /> <br />
Event <input type="text" name="event" id="event"/>
Amount <input type="text" name="amount" id="amount" /><input type="submit" class="login-submit" id="hutt"></input> 
</form>
</div>


</body>







</html>