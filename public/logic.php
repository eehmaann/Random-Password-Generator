<? php
	$pass = "Please fill out all contestant names.";
	//$pass = "Please type enter a number between 1 and 6 in numeric form";
	//$wordList =[
	//'marathon',
	//'soccer',
	//'red',
	//'yellow',
	//'giddy',
	//'dolphin',
	//'bear',
	//'ball',
	//'cook',
	//'minute',
	//'line'];
	//$passwordLength = parseInt( $_POST["length"]);
	//$wantNumber = ( $_POST["num"]);
	//$wantSymbol = ( $_POST["sym"]);
	//if($passwordLength >=1 AND <=6){
		//replace default stong with one word
		//$pass = $wordList[random_int(0, 10)]
		# If the user wants to use a number this will randomly select whaere it goes
		#if($wantNumber = "Yes"){
			//$numPlace =random_int(1, ($passwordLength-1));
		//}
		#If the user wants a symbol randomly choose where it should go
		//if($wantSymbol="Yes"){
		//	$symPlace = random_int (1, ($passwordLength-1));
		//}
		#loop that checks if it is the right place to add a number then checks if it's the right place to add a symbol and then adds a word
		//for($i =1; $i <$passwordLength; i++){
		//	if($i == $numplace){
		//		$pass = $pass + random_int(1,99);
		//	}
		//	if ($i == $symPlace){
		//		$pass= $pass + char(random_int(33, 47))
		//	}
		//	$pass = $pass + $wordList[random_int(0, 10)];
		//}
	//}

// Build an array with multiple words.  
// Build a form that returns a string for the number of words
# if pasrseint is less equal to or greater than 2 and less than or equal to 9, then that number is the times the loop is repeated
# if loop times is greater than one do coin flip.  If yes insert random number between 1 and 42
# if symbols is selected insert ascii number corresponding with random number between 33 and 47 if loop is greater than 1 and 
#Random number between 1 and 10 to select which word in the array.
