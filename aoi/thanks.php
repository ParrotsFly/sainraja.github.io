<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="keywords" content="art of islam, calligraphy, artist, word, alphabet, arabic"/>
<meta name="description" content="A website dedicated to Islamic Calligraphy."/>
<meta name="author" content="Hussain Raja"/> 

<title>Art of Islam: Calligraphy</title>
<!-- stylesheet -->
<link href="style/aoi.css" type="text/css" rel="stylesheet"/>
<!-- stylesheet -->
</head>
<body>
<!-- start of code - this starts the topbanner id -->
<div id="topbanner"></div>
<!-- div id that centers the page -->

<div id="center">
<!-- start of top logo div -->
<div class="tplogo"></div><!-- end of top logo div -->

<!-- start of menu div--><div class="tpmenu">

<ul id="menu">
	<li><a href="index.htm" title="Home">Home</a></li>
	<li><a href="history.htm" title="History">History</a></li>
	<li><a href="calligraphy.htm" title="Calligraphy">Calligraphy</a></li>
	<li><a href="about.htm" title="About">About</a></li>
	<li><a href="contact.htm" title="Contact">Contact</a></li>
</ul>
        

</div><!-- end of menu div-->

<!-- start of content div -->
<div class="content">
<!-- start of column1 -->
<div class="column1aa">
<!-- text div --><div class="text1">

<h1>Thank you!</h1>

<p><?php
if(isset($_POST['submit'])) {

$to = "sainraja@gmail.com";
$subject = "Art of Islam";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
 
echo "Thank you $name_field for contacting Art of Islam. We will get back to you shortly.";
mail($to, $subject, $body);

} else {

echo "blarg!";

}
?></p>




</div> 
<!-- end of text div -->
</div>
<!-- end of column1 -->

<!--footer--><div class="footer"></div><!--end footer-->

</div><!-- end of content div -->




</div><!-- end of div id center -->


</body>
</html>
