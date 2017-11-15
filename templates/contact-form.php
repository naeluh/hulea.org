<?php
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data
// validate the variables ======================================================
    if (empty($_POST['email']))
        $errors['email'] = 'email is required.';
    if (empty($_POST['first_name']))
        $errors['first_name'] = 'First Name is required.';
    if (empty($_POST['last_name']))
        $errors['last_name'] = 'Last Name is required.';
    if (empty($_POST['message']))
        $errors['message'] = 'Message is required.';
// return a response ===========================================================
    // response if there are errors
    if ( ! empty($errors)) {
        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        // if there are no errors, return a message
        $data['success'] = true;
        $data['message'] = 'Success!';
       
 $to = $_POST['email'];
 $subject = 'Contact Form';
 $message = $_POST['message'];
 $headers = 'From:' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
 mail($to, $subject, $message, $headers);
 
    }
    // return all our data to an AJAX call
    echo json_encode($data);