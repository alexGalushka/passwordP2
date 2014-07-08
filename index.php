<!DOCTYPE html>
<html>
<head>

    <title>xkcd style password generator</title>
	<link REL="StyleSheet" TYPE="text/css" HREF="myStyle.css">
    <?php require 'logic.php' ?>
   
</head>

<body >

    <h1>XKCD Style Password Generator</h1>   
	
	<p>Suggested password is: </p> 
	<p><?php echo trim($password, ' '); ?></p>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	   1. Enter number of words. If left blank the default number of 4 will be used. <br>
	      "word1-word2-word3-word4" is the default entry for password.
	   <br>
	   2. Choose to add number and/or symbol
	   <br>
	   3. Click "Display new" for suggested password
	   <br><br>
	   # of Words: <input type="text" size="1" name="numWords" value="<?php echo $name;?>"> (up to 9 words allowed)
	   <br><br>
	   <input type="checkbox" name="addNumber" value="true" /> Add a number
	   <br><br>
	   <input type="checkbox" name="addSymbol" value="true" /> Add a symbol
	   <br><br>
	   <input type="submit" name="submit" value="Display new"> 
	</form>
	
	
	
</body>
</html>