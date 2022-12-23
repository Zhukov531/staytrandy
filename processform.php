<?php
//check for first name in field fame /if it isnt empty set to variable $firstname //otherwise set to empty string and print an error
if (lempty ($_REQUEST[' fname'])) {
$firstname = $_REQUEST [' fname'];
}
else {
    $firstname = "";
    echo "You forgot to enter your first name<br>";
}
//check for last name in field Iname /if it isnt empty set to variable $lastname //otherwise set to empty string and print an error
if (!empty ($_REQUEST[' Iname'])){
    $lastname = $_REQUEST ['name'];
}
else { 
    $lastname=™";
    echo "You forgot to enter your last name<br>";

}

if ($lastname != 11 && $firstname != 11)f
echo "<p>Thank you, $firstname $lastname for filling out the form</p>";
}
?>