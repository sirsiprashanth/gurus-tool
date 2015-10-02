<?php
$username = 'editor';
$connection = mysql_connect("localhost", "root", "");
mysql_select_db("company", $connection);
$result = mysql_query("SELECT `user` FROM `login` WHERE `username`= '$username'", $connection);
while($row = mysql_fetch_array($result)) {
$usertype = $row['user'];
	
	switch ($usertype) {
    case 'admin':
        header("location: ../login/profile.php");
        break;
    case 'client':
        header("location: ../login/profile1.php");
        break;
    case 'editor':
        header("location: ../login/profile2.php");
        break;
    default:
        echo "None of the above";
}
}
?>