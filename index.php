<?php
//error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
//ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>p2 XABC Password Generator</title>
    <?php require 'logic.php'; ?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

	<body>
		<h1> XABC Password Generator</h1>
		<form  method= "POST" action="index.php" >
			<p>To create a random password based off of memorable words, fill out the form and press generate</p>
			<label for ="length"> How many real words would you like the password to be comprised of? (choose from 2-6)?</label>
			<input type="number" name="length" min="2" max="6"><br>
			Do you want to include a number? 
			<input type="radio" name="num" value="No" checked> No
			<input type="radio" name="num" value="Yes"> Yes <br>
			Do you want to use a symbol?
			<input type="radio" name="sym" value="No" checked>No
			<input type="radio" name="sym" value="Yes"> Yes <br>
			<input type="submit" value="Generate">
		</form>
		<p> <strong>Your generated password is:</strong></p>
		<p><?php echo $pass ?></p>
	</body>	
