<!DOCTYPE html><html>
    <head>
<title>Create Simple Website</title>
<link rel="icon" href="http://aez-tech/Images/AEZ.png" />   
<link rel="stylesheet" type="text/css"
href="http://aez-tech/Main/Style.css"/>
</head>

<body>
<div class="header" >
<img class="logo_php" src="http://aez-tech/Images/php.png">

<div class="sub_header">
<p class="title"> 
<strong><u>Create Simple Website</u></strong></p>

<div class="nav_menu">
<a  href="http://aez-tech/Main/Main.php?Home">Home</a>
<a href="http://aez-tech/Main/Main.php?social_Media">Social Media</a>
</div></div>

<img class="logo_aez-tech" src="http://aez-tech/Images/AEZ.png">    
</div> 

<?php 

if ($_SERVER['QUERY_STRING']==="social_Media") {
    include_once "social_Media.html" ;
} else {
    include_once "Home.php" ;}
    
 ?>

<div class="footer">
<p ><strong>AEZ-Tech .... 2024 - 2025</strong><br>
<br><u class="website">Website : https://aeztech.wordpress.com</u>
</p></div></body></html>
