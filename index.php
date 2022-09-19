<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>


<div class="container" id="main-content">
	    
	<h2>Landry Droupy - Homework 2</h2>
	<p>Filling out information here will use the POST method</p>
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
	
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

	<p>Filling out the information here will use the GET method</p>
<form action="window.php" method="get">
Name: <input type="text" name="name"><br>
	
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</div>

<?php include("includes/footer.php");?>

</body>
</html>
