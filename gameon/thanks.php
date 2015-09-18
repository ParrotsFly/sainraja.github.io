<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="keywords" content="GameOn, playstation, xbox, wii, gamer, videogames, games"/>
<meta name="description" content="A gaming website with plenty of gaming content, news and reviews."/>
<meta name="author" content="Hussain Raja"/> 

<title>GameOn - Your Source for Gaming News</title>

<link rel="stylesheet" href="css/main.css" type="text/css" />

</head>

<body>

<div id="global"><!--- centers all the content -->
<div id="content"><!--- contains content elements -->

<div class="tplogo"><!--- Contains the PSG logo -->

</div><!--- This ends the PSG logo div -->

<div class="tpmenu"><!-- contains menu items -->

<ul class="solidblockmenu">
<li><a href="index.htm">Home</a></li>
<li><a href="news.htm">News</a></li>
<li><a href="content.htm">Content</a></li>
<li><a href="community.htm">Community</a></li>
</ul>

</div><!-- ends tpmenu -->

<div class="updatehighlights"><!-- start of highlights -->


</div><!-- end of highlights -->

<div class="index"><!-- contains all the text -->

<div class="newstext"><!-- text div -->
<h2>Contact us</h2>

<h1>Sent!</h1>

<p><?php
if(isset($_POST['submit'])) {

$to = "sainraja@gmail.com";
$subject = "GameOn";
$fname_field = $_POST['fname'];
$lname_field = $_POST['lname'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
$body = "From: $fname_field $lname_field\n E-Mail: $email_field\n Message:\n $message";
 
echo "Thank you $fname_field for contacting GameOn. Someone will contact you in two business days.";
mail($to, $subject, $body);

} else {

echo "blarg!";

}
?></p>
<br/>

</div><!-- end of text div -->
</div><!-- ends the index div -->

<div class="info"><!-- start of information -->

<ul class="solidblockmenu2">
<li><a href="about.htm">About</a></li>
<li><a href="contact.htm" class="current">Contact</a></li>
<li><a href="map.htm">Site Map</a></li>
</ul>

</div><!-- end of information -->

</div><!--- This ends the content div -->
</div><!--- This ends the global div -->
</body>
</html>















