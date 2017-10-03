<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
$nextQuestion = "<br><hr>";
echo ($nextQuestion);
// Task - 2 replace and change format of date
$date = str_replace('-', '/', $date);
print("Printing the newly formatted \$date with str_replace: ". $date ."<br>");

// Task - 2 Trying to use this formatting option as an alternative
$date2 = date('Y/m/d');
print("Alternatively try printing the newly formatted \$date using Y/n/d: ". $date2 ."<br><hr>");



// Task - 3 Compare Date and tar and print based on relation to 0
if (strcmp($date, $tar) > 0) {
		print ("the future" . $nextQuestion);
	} else if (strcmp($date, $tar) < 0) {
		print("the past" . $nextQuestion);
	}  else if (strcmp($date, $tar) == 0) {
		print("Oops" . $nextQuestion);
	}

//Task - 4 Print postiion of / in date and delimit with space 
$max = strlen($date);
$counts = 0;
$pos = strpos($date, '/');
$positions = array();

for($i = 0; $i<=$max; $i++) {
     $pos = strpos($date, '/', $counts);
     $counts++;
     if($pos == $counts){
           $positions[] = $pos;
     }
}

foreach ($positions as $value) {
    print($value . " ");
}
	echo ($nextQuestion);

// Task - 5 Count the number of words in date
$wordcount = str_word_count($date);
print("\$date has " . $wordcount . " words." . $nextQuestion);

// Task - 6 print out length of a string
print("Printing out the string length of \$date: " . $max . $nextQuestion);

//Task - 7 returnASCII value of first character of a string
$string = "Bob Marley";
$firstChar = substr($string, 0, 1);
$asciiVal = ord($firstChar);
print("My \$string was " . $string . ". The ASCII integer value of " . $firstChar . " is: ". $asciiVal . $nextQuestion);

// Task - 8 print the last two characters of a date
$lastTwo = substr($date, -2);
print ("The last two characters of \$date are: " . $lastTwo . $nextQuestion);

// Task - 9 break date into an array with / as separator , print all elements with a space
$dateArray = explode('/', $date);
$delimitIt = implode(" ", $dateArray);
print("Implode \$dateArray delimited by spaces: " . $delimitIt . $nextQuestion);

//Task - 10 Looping through year
foreach($year as $years) {
   $years = date('L', strtotime("$years-01-01"));
	for ($i = 0; $i < 1; $i++) {
		switch($years) {
			case '1':
			print("TRUE ");
		    break;
		    default:
		    print("False ");
			break;
	       }  //end switch
		
	} //end for
}  //end foreach


	
?>
