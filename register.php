<?php

$email=$_POST['email'];
$username=$_POST['username'];

mysql_connect("localhost","root","");
mysql_create_db("royal_golf");
$select="insert into users (email, username) values('".$email"', '".$username"')";
$sql=mysql_query($select)

print '<script type="text/javascript">';
print '<alert ("The data is inserted")';
print '</script>';

mysql_close();
?>