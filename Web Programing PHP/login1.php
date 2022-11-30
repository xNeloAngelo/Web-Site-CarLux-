<?php
session_start();
include("konekcija_na_bazu.php");
if(!empty($_POST['username']) and !empty($_POST['password']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$checklogin=mysqli_query($a,"SELECT * FROM members WHERE Username='".$username."' AND Password='".$password."'");
if(mysqli_num_rows($checklogin)==1)
{
 echo "<h1>Uspjesno ste na logovoali</h1>";
}
else 
{echo"<h1>Greska</h1>;
echo <p>Klikni na <a href=\"login1.php\">i probajte ponovo</a></p>";
}
}
else 
{
?>
<html>
<body>
<h1>Login</h1>
<p>Hvala na posjeti!Logirajte se</p>
<form action="login1.php" method="POST">
<b>username:</b><input type="text" name="username" id="username"><br />
<b>password:</b><input type="password" name="password" id="password"><br />
<input type="submit" value="Login"><input type="reset" value="Obrisi">
</form>
<?php
}
?>
</body>
</html>