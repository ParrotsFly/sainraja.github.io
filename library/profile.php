<?php include "database/base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shelf - Profile</title>

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

<a href="index2.php"><img src="images/logo.png" class="logo" width="101" height="58" border="0" alt="Ashburn Library"/></a>

</div>
<!--endheader-->

<!--sidemenu-->
<div id="sidemenu">

<?php include("menu/menu4.php"); ?>

</div>
<!--sidemenu-->

<!--register-->
<div id="addfield">

<div class="mem_txt">
<h3>Your Username:</h3>

<p><?=$_SESSION['Username']?></p>

<br/>

<h3>Your E-mail address:</h3>

<p><?=$_SESSION['EmailAddress']?></p>

<br/>

<p>This is your profile page. You can add books or edit books that you have added to Shelf's Online Database.</p>



</div>


</div>
<!--endregister-->

</div>
<!--end of global div-->

</body>
</html>

</body>
</html>