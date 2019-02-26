<?php 

session_start();

if (isset($_SESSION['message'])) {
	if($_SESSION['message']!=""){
	echo "<span
	style='color:red'>".$_SESSION['message']."</span>";
	$_SESSION['message'] = "";
}
	# code...
}
 ?>

<!DOCTYPE html>
<html>
<head>	
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<center>
	<div class="ckck">
    <h2 >Login Here</h2>
    <form method="POST" action="Ceklogin.php">
    	<table>
    		
    		<tr>
    			
    			<td></td>
    			<td><input type="text" name="username" required placeholder="username" class="usr"></td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input type="password" name="password" required placeholder="password"  class="psw"></td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><button type="submit" name="login"  class="btn"> login </button> </td>
    		</tr>
    	</table>
       </form>
    	<p>Don't Have Account?</p>
    	<tr>
    		<a href="register.php">sign up</a></tr>
   </div>
</center>

</body>
</html>