<?php
	$pass = "bye";
	$wordList =[
	'marathon',
	'soccer',
	'red',
	'yellow',
	'giddy',
	'dolphin',
	'bear',
	'ball',
	'cook',
	'minute',
	'line'];
	$passwordLength =5;
	//$passwordLength = (int)( $_POST["length"]);
	//$wantNumber = ( $_POST["num"]);
	//$wantSymbol = ( $_POST["sym"]);
	if($passwordLength >=1 && $passwordLength <=6){
		#replace default string with one word
		$pass = $wordList[rand(0, 10)];
		#If the user wants to use a number this will randomly select whaere it goes
		//if($wantNumber == "Yes"){
		//	$numPlace =rand(1, ($passwordLength-1));
		//}
		#If the user wants a symbol randomly choose where it should go
		//if($wantSymbol=="Yes"){
		//$symPlace = rand(1, ($passwordLength-1));
		//}
		#loop that checks if it is the right place to add a number then checks if it's the right place to add a symbol and then adds a word
		for($i =1; $i <$passwordLength; $i++){
			//if($i == $numplace){
			//	$pass = $pass + rand(1,99);
			//}
			//if ($i == $symPlace){
			//	$pass= $pass + char(rand(33, 47));
			//}
			$pass = $pass + $wordList[rand(0, 10)];
		}
	}
	else{
		$pass ="Please write the number of words in text box above";
	}