<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Word of the Day</title>
	<style type="text/css">
	body {
		text-align: center;
	}
	.today {
		font-size: 2em;
		margin: 3% 0 3%;
	}	
	</style>
</head>
<body>

<?php
	// Set the default date for the server
	date_default_timezone_set('America/Chicago');

	// Get the day of the week. 'l' formats as name of day of the week
	$today = date("l");
	$todayNum = date("m-d-y");
?>
	<div class='today'><?php print "Today is $today, $todayNum <br><br> The word of the day is: ";?></div>
<?php
	// Depending on what day it is, display 'Today is ' & the word for that day
	switch($today) {
		case "Monday":
			echo "<img src='monday_word.jpg'>";
			break;
		case "Tuesday":
			echo "<img src='tuesday_word.jpg'>";
			break;
		case "Wednesday":
			echo "<img src='wednesday_word.jpg'>";
			break;
	}

?>
</body>
</html>
