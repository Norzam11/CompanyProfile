<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

// check input fields
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    echo "Please fill all the fields";
} else {
    mail("norzamyahya95@gmail.com", "Web Message", $message,$phone "Form: $name <$email>");
    echo "<script type='text/javascript'>alert('Your message sent successfully')
        window.history.log(-1);
    </script>";
}
?>