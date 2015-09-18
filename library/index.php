<?php include "database/base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shelf - Your Organizer - Home</title>

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

<a href="index.php"><img src="images/logo.png" class="logo" width="101" height="58" border="0" alt="Shelf"/></a>

</div>
<!--endheader-->

<!--sidemenu-->
<div id="sidemenu">

<?php include("menu/menu.php"); ?>

</div>
<!--sidemenu-->

<!--account-->
<div class="account">

<!--headerstart-->
<div class="header1">
<h1>Account</h1>
<p>
Registration is free.
<br/>
Save your collection online.
</p>
</div>
<!--ends header1-->


</div>
<!--account-->

<!--benefits-->
<div class="benefits">

<!--headerstart-->
<div class="header1">
<h1>Benefits</h1>
<p>
Store your books.
<br/>
Organize by title, genre etc.
</p>
</div>
<!--ends header1-->


</div>
<!--benefits-->

<!--update-->
<div class="update">

</div>
<!--update-->


</div>
<!--end of global div-->

</body>
</html>
