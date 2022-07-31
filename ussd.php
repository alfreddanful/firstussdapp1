<?php

// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];

$phone = $_GET['phoneNumber'];
$text = $_GET['text'];

//This is the first menu screen

if ($text == "") {
    $response = "CON Welcome to Bigsoja Enterprise.\n Please select 1 to pay for your credited Items. \n";
    $response .= "1. Pay for credited items";
    $response .= "2. Check for new items in stock.";
    

}

// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen

else if ($text == "1") {
    $response = "CON Please enter your customership phone number. \n";
    
} else if ($text == "1*1") {
    $response = "CON Please enter your name written on the invoice receipt. \n";
    
}

//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1*1") {
    $response = "CON Please enter an amount you want to pay for the credited items. \n";
   
} else if ($text == "1*1*1*1") {
    $response = "END Kindly complete the payment and call us for confirmation. \n";
    
} else if ($text == "2") {
    $response = "END Thank you for checking up. \n Our new items in stock will be sent to your customership phone number via sms shortly.";
    
}

//echo response

header('Content-type: text/plain');
echo $response;
