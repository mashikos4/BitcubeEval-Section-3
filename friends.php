<!DOCTYPE html>
<html>
<head>
<title> login page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action=""  style="background-color:#0000FF">
<p><b><h1><center>Welcome to my friends Page</center></h1></b></p>
<p><center><b>Click<u> Profile button</u> to view profile page or click <u>logout button </u>to go back to login page</b></center></p>
<input name ="submit1" type="submit" class="login_btn" value="PROFILE"style="background-color:lime">
<input name ="submit2" type="submit" class="login_btn" value="LOGOUT" style="background-color:lime">
</form>

<?php
 if(isset($_POST['submit1'])){
		
		header("Location:profile.php");
}
else if(isset($_POST['submit2'])){
		
		header("Location:logout.php");
}
?>

</body>
</html>
