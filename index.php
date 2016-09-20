<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>

<body>
    <div id="container">
        <form id="contact-form" action="" method="post">
            <input type="text" id="name" name="name" class="input" placeholder="Full Name*" required>
            <input type="email" id="email" name="email" class="input" placeholder="Your E-Mail*" required>
            <input type="text" id="subject" name="subject" class="input" placeholder="Subject">
            <textarea id="message" name="message" placeholder="Your Message"></textarea>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
<?php
if (isset($_POST["submit"])) {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $from="From: $name<$email>\r\nReturn-path: $email";
		mail("youremail@gmail.com", $subject, $message, $from);
    echo '<script language="javascript">';
    echo 'alert("Thank you for your message, it has been sent.")';
    echo '</script>';
}
?>
</body>
</html>
