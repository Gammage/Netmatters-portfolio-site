<?php

// backend - create, check to database. verify inputs, inputs send to database. connection closed.

$firstnameError = false;
$lastnameError = false;
$emailvalid = false;
$subjectvalid = false;
$messagevalid = false;
// $successMessage = false;
// $failureMessage = false;
// $showModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "bengamma_bengammage";
    $password = "B_202003195502";
    $dbname = "bengammage_netmatters_portfolio_site";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
    $firstname =  mysqli_real_escape_string($conn, $_POST['first_name']);

    if(strlen($firstname) > 0 && preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $firstnameError = false;

    } else {
        $firstnameError = true;
    }

    $lastname =  mysqli_real_escape_string($conn, $_POST['last_name']);

    if(strlen($lastname) > 0 && preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $lastnameError = false;

    } else {
        $lastnameError = true;
    }

    $email =  mysqli_real_escape_string($conn, $_POST['email_address']);
    // $emailregex = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

    // Filter_validate_email or regex?
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailvalid = false;
    } else {
        $emailvalid = true;
    }

    $subject =  mysqli_real_escape_string($conn, $_POST['subject']);

    if(strlen($subject) > 0) {
        $subjectvalid = false;
    } else {
        $subjectvalid = true;
    }

    $message =  mysqli_real_escape_string($conn, $_POST['message']);

    if(strlen($message) > 0) {
        $messagevalid = false;
    } else {
        $messagevalid = true;
    }

    if(!$firstnameError && !$lastnameError && !$emailvalid && !$subjectvalid && !$messagevalid) {
        $sql = "INSERT INTO `contactme`(`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
        
        if(mysqli_query($conn, $sql)){
            echo "success";
            // $successMessage = true;
            // $showModal = true;
            
            $firstname = '';
            $lastname = '';
            $email = '';
            $subject = '';
            $message = '';

        } else {
            // $failureMessage = true;
            // $showModal = true;
        }
    }

    $conn->close();

  // collect value of input field
 
}
?>