<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Get Reverse IP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="table.css" rel="stylesheet" type="text/css" />

</head>
<body>

<input type="text" id="searchip"><input type="submit">
<div id="output"></div>

<script>


        var fir = <?php $det = $_POST['selection'];  echo json_encode($det); ?>;
        var sec = <?php $ret = $_POST['entry']; echo json_encode($ret); ?>;
        
        
        var que = "SELECT * FROM DONORS WHERE " + fir + " = '" + sec;
            
           
            
            
            
            $.ajax({

                type: "POST",
                url: "load.php",
                data: 'ent=' + que + "';",
                success: function(msg){
                    $('#output').html(msg);

                    $(".alter").click(function () {

    		$.ajax({

                type: "GET",
                url: "retrieve.php",
                data: 'ip=' + $(this).html(),
                success: function(msg){
                    $('#output').html(msg);
                }

            }); // Ajax Call
    
});

                }

            }); // Ajax Call
  
  
  
  function fun(hmm) {
  
  	$.ajax({

                type: "POST",
                url: "load.php",
                data: "ent=" + que + "' ORDER BY " + hmm +";",
                success: function(msg){
                    $('#output').html(msg);
                }
        
       }); //validation code to see State field is mandatory.  
    }

	function revert() {
  
  	$.ajax({

                type: "POST",
                url: "load.php",
                data: 'ent=' + que + "';",
                success: function(msg){
                    $('#output').html(msg);
                }
        
       }); //validation code to see State field is mandatory.  
    }
		
		
			
			 </script>
</body>
</html>
