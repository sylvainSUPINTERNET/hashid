<?php

        //Trouver bcrypt avec son salt (utiliser la methode de php en trouvant les 2 $salt$password) => + faire le system de parametre (argc avec en param sur le CLI le hash puis le parse avec le tableau)
        $list_algo = [6 => "CRC16", 8 => "Adler32", 32 => "md5", 40 => "sha1", "bcrypt" => "todo", 128 => "whirlpool"];

	if($argv[1] && is_string($argv[1])){
		$hash_length = strlen($argv[1]);	
		print "". $list_algo[$hash_length];
		
		//if find nothing 
		if($list_algo[$hash_length] == ""){
			EOL;
			// try another list of 15 
			// if still nothing we return no algo find for this hash 
			print " No algorithm found for this hash : " . $argv[1];
		}
	}else{

	EOL;
	print " Please enter a hash into paramters ... ";
	}


     

