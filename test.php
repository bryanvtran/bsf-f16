<html> <body>
<form action="test.php" method="GET"> Name: <input type="text" name="name" /> Age: <input type="text" name="age" /> <input type="submit" />
</form>
<?php if($_GET["name"]){
echo "Welcome ".$_GET["name"]."<br />";
echo "You are ".$_GET["age"]." years old."; }
?> </body> </html>
