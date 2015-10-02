<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
	
	switch ($_SESSION['login_user']) {
    case 'admin':
        header("location: profile.php");
        break;
    case 'client':
        header("location: profile1.php");
        break;
    case 'editor':
        header("location: profile2.php");
        break;
    default:
        echo "None of the above";
}
	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>