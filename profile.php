<!DOCTYPE html>
<html>
<head>
<title> Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="" style="background-color:#0000FF">
<p><b><h1><center>Welcome to my profile Page</center></h1></b></p>
<p><center><b>Click <u>friends button </u> to view friends page or click <u>logout button</u> to go back to login page</b></center></p>
<input name ="submit1" type="submit" class="login_btn" value="FRIENDS"style="background-color:lime">
<input name ="submit2" type="submit" class="login_btn" value="LOGOUT"style="background-color:lime">
</form>

<?php
 if(isset($_POST['submit1'])){
		
		header("Location:friends.php");
}
else if(isset($_POST['submit2'])){
		
		header("Location:logout.php");
}
?>
</body>
</html>