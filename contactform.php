<?php
$conn = mysqli_connect("localhost", "root", "", "mahs_codephobia");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = " INSERT INTO `contactform`(`person_id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message')";


    $to = "cobaltbleu27.4@gmail.com";
    $headers = "From: ". $email;
    $txt = "You have received an email from ".$name." \n\n".$message;

    mail($to, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");

    if (mysqli_query($conn, $sql)) {
        echo "Form entered correctly.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
mysqli_close($conn);

?>