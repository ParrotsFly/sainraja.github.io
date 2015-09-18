<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>
    
    <h2>Welcome to the Members Area!</h2>
  	 <span class="textlog">Thanks for logging in! You are <b><?=$_SESSION['Username']?> </b> and your email address<br/> is <b> <?=$_SESSION['EmailAddress']?> </b></span>
     
    
    <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	 $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
	 $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
    	 $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
        
    	 echo "<h2>Success</h2>";
        echo "<span class=\"textlog\">We are now redirecting you to the member area.</span>";
        echo "<meta http-equiv='refresh' content='=2;index2.php' />";
    }
    else
    {
    	 echo "<h2>Error</h2>";
        echo "<span class=\"textlog\">Sorry, your account could not be found. Please <a href=\"http://www.hussainraja.com/library/index.php\">try again</a>.</span>";
    }
}
else
{
	?>
 
<form method="post" action="index.php" name="loginform" id="loginform">
	<input type="text" class="login_1" value="Username" name="username"/>
	<input type="password" class="password_1" value="Password" name="password"/>
	<input type="image" src="../images/login.png" class="button_1" name="login" value="Login"/>
    </form>
   <?php
}
?>
