<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nutridb";
$ch = mysqli_connect($servername, $username, $password, $database);
if ($ch) {
	echo "DB connected <br/>";
}

if ($_REQUEST['submit'] == "Submit") {

	// Appointment information
	$appointinrfatext = $_REQUEST['appointinrfatext'];
	$appointinexpectatext = $_REQUEST['appointinexpectatext'];
	$appointinclinical = implode(", ", $_REQUEST['appointinclinical']);
	$appointinclinicaltext = $_REQUEST['appointinclinicaltext'];
	$appointinothintext = $_REQUEST['appointinothintext'];

	// Personal and social history	
	$persocialbowel = implode(", ", $_REQUEST['persocialbowel']);
	$persocialboweltext = $_REQUEST['persocialboweltext'];

	$persocialsleep = implode(", ", $_REQUEST['persocialsleep']);
	$persocialsleeptext = $_REQUEST['persocialsleeptext'];

	$persocialsmoker = implode(", ", $_REQUEST['persocialsmoker']);
	$persocialsmokertext = $_REQUEST['persocialsmokertext'];

	$persocialalcohol = implode(", ", $_REQUEST['persocialalcohol']);
	$persocialalcoholtext = $_REQUEST['persocialalcoholtext'];

	$persocialmarital = implode(", ", $_REQUEST['persocialmarital']);
	$persocialmaritaltext = $_REQUEST['persocialmaritaltext'];
	$persocialphisytext = $_REQUEST['persocialphisytext'];

	$persocialrace = implode(", ", $_REQUEST['persocialrace']);
	$persocialothintext = $_REQUEST['persocialothintext'];

	//Dietary history
	$dietaryuwuptimetext = $_REQUEST['dietaryuwuptimetext'];
	$dietaryubedtimetext = $_REQUEST['dietaryubedtimetext'];
	$dietarytofd = implode(", ", $_REQUEST['dietarytofd']);
	$dietarytofdtext = $_REQUEST['dietarytofdtext'];
	$dietaryfavfoodtext = $_REQUEST['dietaryfavfoodtext'];
	$dietarydisfoodtext = $_REQUEST['dietarydisfoodtext'];
	$dietaryallergies = implode(", ", $_REQUEST['dietaryallergies']);
	$dietaryallergiestext = $_REQUEST['dietaryallergiestext'];
	$dietaryfoodint = implode(", ", $_REQUEST['dietaryfoodint']);
	$dietaryfoodinttext = $_REQUEST['dietaryfoodinttext'];
	$dietarynutridefitext = $_REQUEST['dietarynutridefitext'];
	$dietarywaterintake = implode(", ", $_REQUEST['dietarywaterintake']);
	$dietaryothintext = $_REQUEST['dietaryothintext'];

	//Medical history
	$medicaldiseases = implode(", ", $_REQUEST['medicaldiseases']);
	$medicaldiseasestext = $_REQUEST['medicaldiseasestext'];
	$medicalmedicatext = $_REQUEST['medicalmedicatext'];
	$medicalpershisttext = $_REQUEST['medicalpershisttext'];
	$medicalfamhisttext = $_REQUEST['medicalfamhisttext'];
	$medicalothintext = $_REQUEST['medicalothintext'];

	// Pregnancy history
	$pregnancytypeofrecord = implode(", ", $_REQUEST['pregnancytypeofrecord']);
	$pregnancygestatype = implode(", ", $_REQUEST['pregnancygestatype']);
	$pregnancylastmpin = $_REQUEST['pregnancylastmpin'];
	$pregnancyboflacin = $_REQUEST['pregnancyboflacin'];
	$pregnancydoflacimin = $_REQUEST['pregnancydoflacimin'];
	$pregnancyobservtext = $_REQUEST['pregnancyobservtext'];

	// Observations
	$observationregdatein = $_REQUEST['observationregdatein'];
	$observationobservtext = $_REQUEST['observationobservtext'];

	//Food Diary
	$foodiaryregdatein = $_REQUEST['foodiaryregdatein'];
	$foodiaryselect = implode(", ", $_REQUEST['foodiaryselect']);
	$foodiarytext = $_REQUEST['foodiarytext'];
	$foodiaryobservtext = $_REQUEST['foodiaryobservtext'];

	//Eating behaviour
	$eatbehavregdatein = $_REQUEST['eatbehavregdatein'];
	$eatbehavtext = $_REQUEST['eatbehavtext'];

	// Goal
	$goaltype = implode(", ", $_REQUEST['goaltype']);
	$goaldescriptext = $_REQUEST['goaldescriptext'];
	$goaldeadlinein = $_REQUEST['goaldeadlinein'];

	//sql 
	$add = "INSERT INTO information SET 
    appointinrfatext = '$appointinrfatext', 
    appointinexpectatext = '$appointinexpectatext', 
    appointinclinical = '$appointinclinical', 
    appointinclinicaltext = '$appointinclinicaltext', 
    appointinothintext = '$appointinothintext', 
    persocialbowel = '$persocialbowel', 
    persocialboweltext = '$persocialboweltext', 
    persocialsleep = '$persocialsleep', 
    persocialsleeptext = '$persocialsleeptext', 
    persocialsmoker = '$persocialsmoker', 
    persocialsmokertext = '$persocialsmokertext', 
    persocialalcohol = '$persocialalcohol', 
    persocialalcoholtext = '$persocialalcoholtext', 
    persocialmarital = '$persocialmarital', 
    persocialmaritaltext = '$persocialmaritaltext', 
    persocialphisytext = '$persocialphisytext', 
    persocialrace = '$persocialrace', 
    persocialothintext = '$persocialothintext', 
    dietaryuwuptimetext = '$dietaryuwuptimetext', 
    dietaryubedtimetext = '$dietaryubedtimetext', 
    dietarytofd = '$dietarytofd', 
    dietarytofdtext = '$dietarytofdtext', 
    dietaryfavfoodtext = '$dietaryfavfoodtext', 
	dietarydisfoodtext = '$dietarydisfoodtext',
    dietaryallergies = '$dietaryallergies', 
    dietaryallergiestext = '$dietaryallergiestext', 
    dietaryfoodint = '$dietaryfoodint', 
    dietaryfoodinttext = '$dietaryfoodinttext', 
    dietarynutridefitext = '$dietarynutridefitext', 
    dietarywaterintake = '$dietarywaterintake', 
    dietaryothintext = '$dietaryothintext', 
    medicaldiseases = '$medicaldiseases', 
    medicaldiseasestext = '$medicaldiseasestext', 
    medicalmedicatext = '$medicalmedicatext', 
    medicalpershisttext = '$medicalpershisttext', 
    medicalfamhisttext = '$medicalfamhisttext', 
    medicalothintext = '$medicalothintext', 
    pregnancytypeofrecord = '$pregnancytypeofrecord', 
    pregnancygestatype = '$pregnancygestatype', 
    pregnancylastmpin = '$pregnancylastmpin', 
    pregnancyboflacin = '$pregnancyboflacin', 
    pregnancydoflacimin = '$pregnancydoflacimin', 
    pregnancyobservtext = '$pregnancyobservtext', 
    observationregdatein = '$observationregdatein', 
    observationobservtext = '$observationobservtext', 
    foodiaryregdatein = '$foodiaryregdatein', 
    foodiaryselect = '$foodiaryselect', 
    foodiarytext = '$foodiarytext', 
    foodiaryobservtext = '$foodiaryobservtext', 
    eatbehavregdatein = '$eatbehavregdatein', 
    eatbehavtext = '$eatbehavtext', 
    goaltype = '$goaltype', 
    goaldescriptext = '$goaldescriptext', 
    goaldeadlinein = '$goaldeadlinein'
	";
	$result = mysqli_query($ch, $add);
	if ($result) {
		echo "success";
	} else {
		"not" . mysqli_error($ch);
	}
	//header("location:nutrium_link.html");	
}
