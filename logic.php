<?php
    
	$errorHandler = "";
	
	
	$password = "word1-word2-word3-word4"; //default entry for password 
	$maxNumOfPasswordWords = 9;
    $filename = "commonWords.txt";
	$contents = @fopen($filename, 'r'); 
    
	if ($contents)
	{
	   $outputArray = explode("\n", fread($contents, filesize($filename)));
	   $commonWords = array_filter($outputArray);
	   $arraySize = count($commonWords);
	}
	else
	{
	   $errorHandler = $filename + " can not be opened";
	}
	
	$numWords = (int)$_POST['numWords'];
	$addNumber = (bool)$_POST['addNumber'];
	$addSymbol = (bool)$_POST['addSymbol'];
	$submit =    $_POST['submit'];
	
	if ($submit == "Display new")
	{ 
	   $password = "";
	   $dash = "";
	   $specialCharacters = "-=~!@#$%^&*()_+,./<>?;:[]{}\|";
	   $specialCharactersArray = str_split ( $specialCharacters);
	   $password = trim($password, ' ');
	   
	   if ($numWords == 0)
	   {
	       $numWords = 4;
	   }
	   
	   if ($numWords > $maxNumOfPasswordWords)
	   {
	       $numWords = 4;
	   }
	   
	   for ($i = 0; $i < $numWords; $i++)
	   {
	       if ($i != 0)
		   {
		     $dash = "-";
		   }
	       $password = $password . $dash . trim($commonWords[rand ( 0 , ($arraySize - 1)) ], ' ');
	   }
	   
	   if ($addNumber)
	   {
	      $password = $password . rand ( 0 , 9) ;
	   }
	   
	   if ($addSymbol)
	   {
	      $password = $password . $specialCharactersArray[rand  (0 , (count($specialCharactersArray) - 1)) ] ;
	   }
	}
	
	

?>