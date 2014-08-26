<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="landing.css" />
<title>EWB DONORS DATABSE</title>
</head>
<body>
<div id = "header">
EWB DONOR DATABASE
</div>
<div id="bdy">
<div id="left">
<div id="nuser">
<a href="add.php">Add New Donor</a>
</div>
<div id="nentry">
<a href="addc.php">Add New Donation</a>
</div>
</div>

<div class="verticalLine">
</div>

<div id="right">
<div id="bilbo">
<p>
<form  action="results.php" method="post" onSubmit="return validate(this)"> Search: <br />

<select name="selection">
  <option value="LAST">Last Name</option>
  <option value="EMPLOYER">Employer</option>
  <option value="DONORID">Donor ID</option>
  <option value="PHONE">Phone Number</option>
</select>
<input type="text" name="entry" /><input type="submit" />
</form>
</p>
</div>
</div>
</div>
 
<script language="javascript"type="text/javascript" >

function validate(form) {

opt = form.idint.value;

if (opt == "") {
	alert('Nothing entered');
	return false;}
else
	return true;
}


</script>
</body>
</html>


