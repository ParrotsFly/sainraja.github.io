<?php include "database/base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shelf - Add Books</title>

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

<?php include("menu/menu2.php"); ?>

</div>
<!--sidemenu-->

<!--register-->
<div id="addfield">

<div class="data">

<?php

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM books") 
or die(mysql_error());  

echo "<table width='100%' cellpadding='0' cellspacing='0' border='0'>";
echo "<tr> <th><h4>Title</h4></th> <th><h4>Author</h4></th> <th><h4>Genre</h4></th> <th><h4>Published</h4></th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td align='left'>"; 
	echo $row['title'];
	echo "</td><td>"; 
	echo $row['author'];
	echo "</td><td>";
	echo $row['Genre'];
	echo "</td><td>";
	echo $row['Published'];
	echo "</td></tr>";  
} 

echo "</table>";
?>

</div>
<!--ends data-->

</div>
<!--endregister-->

</div>
<!--end of global div-->

</body>
</html>

</body>
</html>