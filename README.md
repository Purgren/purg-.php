# purg+.php
purg+ is a php file developed to enhance the dynamic message display in developers projects, with the easiest implementation approach.
Features of purg+;
1.It is a php file
2.It is designed for dynamic message display  
3.It combines the powers of jquery and CSS
4.It is designed in php functions
5.It has the simplest implementation approach
6.It allows developers to code less for quality UI

Implementation
1.Download purg+.php and jquery file
2.Copy the file to your desired location
3.Include the file name in all the pages you would wish to use purg+ features
4.Call the respective function name to display results.

<?php
include "purg+.php";//Include the purg+ file
function display(){
if(isset($_POST['success'])){
alertSuccess();// this purg+ function displays success message with darkseagreen background    
}elseif(isset($_POST['error'])){
alertUpdateErr();// this purg+ function displays error message    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Purg+ presentation</title>
<script src="jquery.min.js"></script><!--Include the jquery javascript file-->
<link rel="stylesheet" href="styles.css">
</head><body bgcolor="#6495ed"><div class="a1">
<form method="post" action="techfair.php">
<?php
display();
?>
<button name="success">Display Success</button>
<button name="error">Display Error</button>
</form>
</div>
</body>
</html>




