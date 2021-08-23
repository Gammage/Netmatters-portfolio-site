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
    $username = "root";
    $password = "";
    $dbname = "netmatters";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
    $firstname =  mysqli_real_escape_string($conn, $_POST['fname']);

    if(strlen($firstname) > 0 && preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $firstnameError = false;

    } else {
        $firstnameError = true;
    }

    $lastname =  mysqli_real_escape_string($conn, $_POST['fname']);

    if(strlen($lastname) > 0 && preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $lastnameError = false;

    } else {
        $lastnameError = true;
    }

    $email =  mysqli_real_escape_string($conn, $_POST['femail']);
    // $emailregex = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

    // Filter_validate_email or regex?
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailvalid = false;
    } else {
        $emailvalid = true;
    }

    $subject =  mysqli_real_escape_string($conn, $_POST['fsubject']);

    if(strlen($subject) > 0) {
        $subjectvalid = false;
    } else {
        $subjectvalid = true;
    }

    $message =  mysqli_real_escape_string($conn, $_POST['fmessage']);

    if(strlen($message) > 0) {
        $messagevalid = false;
    } else {
        $messagevalid = true;
    }

    if(!$firstnameError && !$lastnameError && !$emailvalid && !$subjectvalid && !$messagevalid) {
        $sql = "INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
        
        if(mysqli_query($conn, $sql)){

            // $successMessage = true;
            // $showModal = true;
            
            $name = '';
            $email = '';
            $telephone = '';
            $subject = '';
            $message = '';
            $marketing = '';

        } else {
            // $failureMessage = true;
            // $showModal = true;
        }
    }

    $conn->close();

  // collect value of input field
 
}
?>