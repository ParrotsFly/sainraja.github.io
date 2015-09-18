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

<?
//connect to mysql
//change user and password to your mySQL name and password
mysql_connect("sain.hussainraja.com","hnr311","238020hr"); 
	
//select which database you want to edit
mysql_select_db("hnr311"); 

$search=$_POST["search"];

//get the mysql and store them in $result
//change whatevertable to the mysql table you're using
//change whatevercolumn to the column in the table you want to search
$result = mysql_query("SELECT * FROM books WHERE author LIKE '%$search%'");


echo "<table width='100%' cellpadding='0' cellspacing='0' border='0'>";
echo "<tr> <th><h4>Title</h4></th> <th><h4>Author</h4></th> <th><h4>Genre</h4></th> <th><h4>Published</h4></th> </tr>";
//grab all the content
while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
   //modify these to match your mysql table columns
  
   $author=$r["author"];
   $title=$r["title"];
   $genre=$r["Genre"];
   $publish=$r["Published"];
   $id=$r["id"];
   
	echo "<tr><td align='left'>"; 
	echo $r['title'];
	echo "</td><td>"; 
	echo $r['author'];
	echo "</td><td>";
	echo $r['Genre'];
	echo "</td><td>";
	echo $r['Published'];
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
