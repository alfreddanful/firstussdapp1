<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];


//This is the first menu screen

if ( $text == "" ) {
  $response  = "CON Are you set, sure and fully ready to get our Monday Special Numbers? \n";
  $response .= "1. Yes, I'm Ready";
  $response .= "2. No, I'm Not";
}


// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen

else if ($text == "1") {
  $response  = "CON  Welcome to Sureman Lotto Forecast. \n";
  $response .= "1. Get Monday Game \n";
  $response .= "2. Today's Results \n";
  $response .= "3. Contact Us \n";
  $response .= "4. View T/c's \n";
}


//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
  $response = "CON Today is Monday, And we have Special Numbers for you. \n";
  $response .= "1. Pay 5Ghc to receive it \n";
  $response .= "2. No, I don't want it";
}

else if ($text == "1*1*1") {
  $response = "CON To confirm payment and receive our Monday Special numbers, make sure you use Momo, Tigo or Vodafone cash and have up to 5ghc in your account.\n";
  $response .= " 1. Continue To Pay \n"; 
  $response .= " 2. Cancel";
}

else if ($text == "1*1*2") {
  $response = "END  Bye, Have a nice day, But you can check it again later.";
}


else if ($text == "1*1*1*1") {
  $response = "END Confirm prompt to receive our numbers";
}


else if ($text == "1*1*1*2") {
  $response = "END Bye, Have a nice day, But you can check it again later.";
}

// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
  $response = "CON Draw Results \n";
  $response .= "1. Show Us Love \n";
}

// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
  $response = "CON Enter Amount to send \n";
  $response .= " \n";
}
        
else if ($text == "1*2*1*1") {
  $response = "END ";
}
    
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
  $response = "END Call/WhatsApp Us: 0507373262 \n";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
  $response = "CON Terms And Conditions has been sent to your number. \n";
  $response .= "1. Back \n";
}

// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
  $response = "CON \n";
 
}

//echo response

header('Content-type: text/plain');
echo $response;
