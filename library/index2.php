<?php include "database/base.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shelf - Your Organizer - Member</title>

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

<?php include("php/login.php"); ?>

</div><!--ends spacer-->

</div>
<!--endlogin-->

<a href="index2.php"><img src="images/logo.png" class="logo" width="101" height="58" border="0" alt="Shelf"/></a>

</div>
<!--endheader-->

<!--sidemenu-->
<div id="sidemenu">

<?php include("menu/menu2.php"); ?>

</div>
<!--sidemenu-->

<!--register-->
<div id="memberpage">

<div class="mem_txt">
<h3>Welcome to the members area, <?=$_SESSION['Username']?>.</h3>

<p>You can change your e-mail address: <?=$_SESSION['EmailAddress']?> by going to your profile. You can start adding books to our database by clicking on Add link on the side menu.</p>



</div>

</div>
<!--register-->

</div>
<!--end of global div-->

</body>
</html>
