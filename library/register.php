<?php include "database/base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shelf - Register</title>

<link rel="stylesheet" type="text/css" href="style/default.css"/>
<script src="js/autoclear.js" type="text/javascript"></script>

</head>

<body>

<!--start of global div-->
<div id="global">

<!--header-->
<div id="header">

<!--login-->
<div id="login">

<!--spacing-->
<div class="spacing">



</div><!--ends spacer-->

</div>
<!--endlogin-->

<a href="index.php"><img src="images/logo.png" class="logo" width="101" height="58" border="0" alt="Ashburn Library"/></a>

</div>
<!--endheader-->

<!--sidemenu-->
<div id="sidemenu">

<?php include("menu/menu.php"); ?>

</div>
<!--sidemenu-->

<!--register-->
<div id="regfield">

<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<div class=\"error_txt\"> ";
		echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
		echo "</div>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
		    echo "<div class=\"error_txt\"> ";
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
			echo "</div>";
        }
        else
        {
         	echo "<div class=\"error_txt\"> ";
			echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";
			echo "</div>";    
        }    	
     }
}
else
{
	?>
	
<div class="box">	
	
<ul class="reg">	       
	<form method="post" action="register.php" name="registerform">
		<li class="padding">Pick a username</li>
		<li><input type="text" name="username" value="USERNAME" class="user_register" /> </li>
		<li class="padding2">Set your Password</li>
        <li><input type="password" name="password" value="PASSWORD" class="password_register" /> </li>
		<li class="padding2">Provide an e-mail</li>
        <li><input type="text" name="email" value="EMAIL" class="email_register" /> </li>
		
		<li class="padding3"><input type="image" src="images/register.png" class="submit_register" name="register"/> </li>


 	</form>
</ul>	

</div>
	    
   <?php
}
?>

</div>
<!--endregister-->

</div>
<!--end of global div-->

</body>
</html>

</body>
</html>