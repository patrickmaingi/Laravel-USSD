<?php
//1. Ensure ths code runs only after a POST from AT
if(!empty($_POST) && !empty($_POST['phoneNumber'])){
  $username   = "sandbox";
  $apikey     = "a7724afc969d3913074f2ebe5ed221313506c0a703be6c05bf82aa06be12b89e";

	//2. receive the POST from AT
	$sessionId     =$_POST['sessionId'];
	$serviceCode   =$_POST['serviceCode'];
	$phoneNumber   =$_POST['phoneNumber'];
	$text          =$_POST['text'];
if ( $text == "" ) {
		 // This is the first request. Note how we start the response with CON
		 $response = "CON Welcome to TTC epayments \n";
		 $response .= "1. Parking \n";
		 $response .= "2. Business permits \n";
		 $response .= "3. Land Rates \n";
     $response .= "4. My profile \n";

}
else if ( $text == "1" ) {
// Business logic for first level response
$response = "CON Select Option \n";
$response .= "1. Daily parking \n";
$response .= "2. Seasonal parking \n";

}
else if($text == "2") {
// Business logic for first level response
// This is a terminal request. Note how we start the response with END
$response = "CON Coming Soon";
$response .= "00. HOME \n";
}

else if($text == "3") {
// Business logic for first level response
// This is a terminal request. Note how we start the response with END
$response = "CON Coming soon";
$response .= "00. HOME \n";
}

else if($text == "4") {
// Business logic for first level response
// This is a terminal request. Note how we start the response with END
$response = "CON My profile \n" ;
$response .= "1. Enter pin to view \n";
$response .= "2. Register \n";
$response .= "00. HOME \n";
}

else if($text == "1*1") {
// This is a second level response where the user selected 1 in the first instance
$response = "CON Select parking zone \n";
$response .= "1. CBD \n";
$response .= "2. Kaloleni \n";
$response .= "3. Makongeni \n";
$response .= "4. Mwakingali \n";
$response .= "5. Mazeras \n";
$response .= "6. Mabomani \n";
$response .= "7. Tanzania \n";
$response .= "8. Kaloleni \n";
$response .= "00. HOME";
$response .= "0. BACK";
$response .= "98. MORE \n";
}

else if ( $text == "1*2" ) {
		 // This is a second level response where the user selected 1 in the first instance
$response = "CON Select parking zone \n";
$response .= "1. CBD \n";
$response .= "2. Kaloleni \n";
$response .= "3. Makongeni \n";
$response .= "4. Mwakingali \n";
$response .= "5. Mazeras \n";
$response .= "6. Mabomani \n";
$response .= "7. Tanzania \n";
$response .= "8. Kaloleni \n";
$response .= "00. HOME \n";
}

else if ( $text == "4*1" ) {
		 // This is a second level response where the user selected 1 in the first instance
$response = "CON Enter pin \n";
}

else if ( $text == "4*2" ) {
		 // This is a second level response where the user selected 1 in the first instance
$response = "CON Enter ID number \n";
}


// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;
}
// DONE!!!
?>
