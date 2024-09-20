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

//we can also add userinput for instance 

<?php 
    // We can also add user input to allow different users to put in this info then it is displayed as output
    $TheName = readline("Enter your name: "); 
    $HomeAddress = readline("Enter your home address: "); 
    $DateOfBirth = readline("Enter your date of birth (DD-MM-YYYY): ");
    
    $CurrentYear = readline("Enter the current year: "); 
    $BirthYear = readline("Enter your year of birth: "); 

    $Age = $CurrentYear - $BirthYear;

    echo "The Name is " . $TheName . ".\n"; 
    echo "The Date of Birth is " . $DateOfBirth . ".\n"; 
    echo "The Home Address is " . $HomeAddress . ".\n"; 
    echo "Welcome!! Dear " . $TheName . ".\n"; 
    echo "You are " . $Age . " years old now.\n"; 

    // You can also use functions to come up with this; however, I am still understanding the concept, so the function example is not included.
?>
