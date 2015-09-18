<?php include "../database/base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ashburn Library</title>

<link rel="stylesheet" type="text/css" href="../style/default.css"/>
<script src="../js/autoclear.js" type="text/javascript"></script>

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

<?php include("../php/login2.php"); ?>

</div><!--ends spacer-->

</div>
<!--endlogin-->

<a href="index.php"><img src="../images/logo.png" class="logo" border="0" alt="Ashburn Library"/></a>

</div>
<!--endheader-->

<!--sidemenu-->
<div id="sidemenu">

<?php include("../menu/menu.php"); ?>

</div>
<!--sidemenu-->
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. Please <a href=\"../index.php\">click here to login</a>.</p>";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }    	
     }
}
else
{
	?>
	
	       
	<form method="post" action="register.php" name="registerform">

		<input type="text" name="username" value="USERNAME" class="user_register" />
		<input type="password" name="password" value="PASSWORD" class="password_register" />
        <input type="text" name="email" value="EMAIL" class="email_register" />
		
		<input type="image" src="../images/register.png" class="submit_register" name="register"/>

	</form>
	
	    
   <?php
}
?>

</div>
<!--end of global div-->

</body>
</html>

</body>
</html>