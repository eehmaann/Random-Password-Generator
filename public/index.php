<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>p2 XABC Password Generator</title>
    <?php require 'logic.php'; ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <
</head>

	<body>
		<h1> XABC Password Generator</h1>
		<form action="logic.php" method="post">
			To create a random password based off of memorable words, fill out the form and press generate<br>
			How many words would you like used (choose from 2-6)?
			<input type="text" name="length"><br>
			Do you want to include a numeber? 
			<input type="radio" name="num" value="No" checked> No
			<input type="radio" name="num" value="Yes"> Yes <br>
			Do you want to use a symbol?
			<input type="radio" name="sym" value="No" checked>No
			<input type="radio" name="sym" value="Yes"> Yes <br>
			<input type="submit" value="Generate">
		</form>
		<?php echo $pass ?>
	</body>	
