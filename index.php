<!DOCTYPE html>
<html>

<head>

    <title>xkcd style password generator</title>
	
	<?php require 'logic.php' ?>
	
	<style>
		.center {text-align: center;color: green; font-family: verdana; font-size: 24px;} 
		.display {text-align: center;color: blue; font-family: verdana; font-size: 24px; border:2px solid #000000; word-wrap:break-word;} 
		.head {text-align: center;color: blue; font-family: verdana; font-size: 32px;}
		.body {background: silver;}			
		.error {text-align: center;color: red; font-family: verdana; font-size: 36px;} 
		.form { position: relative; width: 500px; margin:0 auto; color: purple; font-family: verdana; font-size: 20px;}	
        		
	</style>
   
</head>

<body class="body">

    <h1 class="head">XKCD Style Password Generator</h1>   
	<p class="center">Suggested password is:</p> 
	<p class="display"><?php echo $password; ?></p>
	

	<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
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
	
	<p class="error"><?php echo $errorHandler;?></p>
	
</body>

</html>