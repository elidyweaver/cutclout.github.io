<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "air.element.1@proton.me";

# SUBJECT (Subscribe/Remove)
$subject = "Cut Clout Sign Up";

# RESULT PAGE
$location = "https://cutclout.com/thank-you/index.html";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "NostrNpub: ".$_REQUEST['NostrNpub']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Oh Oh! we couldn't sign you up.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>
