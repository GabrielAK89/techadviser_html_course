<?php ob_start();

if(isset($_POST['submit'])) {
    echo $_POST['subject'];
    $to = "gabrielak89@gmail.com";
    $subject = "My subject";
    // $email = $_POST['email'];
    $txt = "Hello_world";
    $headers = "From: webmaster@example.com" . "/r/n";
    "CC: gabrielacatrinei89@gmail.com";

    mail($to, $subject, $txt, $headers);

    header("Location: contact.html");
}
?>
