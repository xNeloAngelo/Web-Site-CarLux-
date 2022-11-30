<?php
include("konekcija_na_bazu.php");
$username=$_POST['username'];
$pass=$_POST['password'];
$password=md5($pass);
$queryuser=mysqli_query($a,"SELECT * FROM members WHERE username='$username'");
$checkuser=mysqli_num_rows($queryuser);
if($checkuser!=0)
{echo "Greska,".$username."je vec u upotreb.";}
else{
$insert_user=mysqli_query($a,"INSERT INTO members(username,password) VALUES('$username','$password')");

if($insert_user)
{echo "Uspesjno ste se registrovali.<br/>Da bi ste se ulogovali <a href=\"login1.php\">kliknite ovdje</a>.</p>";
}
else
{echo "Greska prilikom registracije".mysqli_error();}

}
?>