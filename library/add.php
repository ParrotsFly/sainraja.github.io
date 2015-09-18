<?php include "database/base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shelf - Profile - Add Books</title>

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

<?php include("menu/menu3.php"); ?>

</div>
<!--sidemenu-->

<!--register-->
<div id="addfield">

<?php
if(!empty($_POST['title']) && !empty($_POST['author']))
{
	$title = mysql_real_escape_string($_POST['title']);
    $author = mysql_real_escape_string($_POST['author']);
	$genre = mysql_real_escape_string($_POST['genre']);
    $published = mysql_real_escape_string($_POST['published']);
    
	 $checktitlename = mysql_query("SELECT * FROM books WHERE title = '".$title."'");
     
     if(mysql_num_rows($checktitlename) == 1)
     {
     	echo "<div class=\"error_txt\"> ";
		echo "<h1>Error</h1>";
        echo "<p>Sorry, that book is already in the database. Try again.</p>";
		echo "</div>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO books (title, author, genre, published) VALUES('".$title."', '".$author."', '".$genre."', '".$published."')");
		
        if($registerquery)
        {
		    echo "<div class=\"error_txt\"> ";
        	echo "<h1>Success</h1>";
        	echo "<p>The book was added to our database. Please <a href=\"add.php\">click here to go back</a>.</p>";
			echo "</div>";
        }
        else
        {
         	echo "<div class=\"error_txt\"> ";
			echo "<h1>Error</h1>";
        	echo "<p>Sorry, adding the book to the database failed. Please go back and try again.</p>";
			echo "</div>";    
        }    	
     }
}
else
{
	?>
	
<div class="box">	
	
<ul class="reg">	       
	<form method="post" action="add.php" name="bookform">
		<li class="padding">Title</li>
		<li><input type="text" name="title" value="Book Name" class="user_register" /> </li>
		<li class="padding2">Author</li>
        <li><input type="text" name="author" value="Book Author" class="password_register" /> </li>
		<li class="padding2">Genre</li>
        <li><input type="text" name="genre" value="Genre" class="email_register" /> </li>
		<li class="padding2">Published (YYMMDD)</li>
        <li><input type="text" name="published" value="Publish Date" class="email_register" /> </li>
		
		<li class="padding3"><input type="image" src="images/addtitle.png" class="submit_register" name="register"/> </li>


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