<?php 
    // This is a simple script where I used variables to capture the required info
    $TheName = "Kayiwa Peter"; 
    $DateOfBirth = "24-09-2002"; 
    $HomeAddress = "Ssentamu Rd, Rubaga, Kampala"; //captures home address 
    $CurrentYear = 2024; //Variable of Current year 
    $BirthYear = 2002; //variable of Birth Year 

    // Calculating the age
    $Age = $CurrentYear - $BirthYear;

    // Displaying the information
    echo " The Name is " . $TheName . ".\n"; // Print name on a new line
    echo " The Date of Birth is " . $DateOfBirth . ".\n"; // Print date of birth on a new line
    echo "The Home Address is " . $HomeAddress . ".\n"; // Print home address on a new line
    echo "Welcome!! Dear " . $TheName . "\n"; 
    echo "You are " . $Age . " Years Old Now."; // Print calculated age
?>
