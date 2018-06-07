<?php
    $msg = '';
    $msgClass = '';

    if (filter_has_var(INPUT_POST,'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if (!empty($name) && !empty($email) && !empty($message)){
            $toEmail = 'info@chagnolet.com';
            $subject = 'Contact request from' . $name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>' . $name .'</p>
                <h4>Email</h4><p>' . $email . '</p>
                <h4>Message</h4><p>' . $message . '</p>';

            $headers = "MIME-Version:1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n" ;
            $headers .= "From: " .$name. "<".$email.">"."\r\n";

            if (mail($toEmail, $subject, $body, $headers)){
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your email was not sent';
                $msgClass = 'alert-red';
            }
        } else {
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-red';
        }
    }
?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name= "description" content="Welcome to our beautifully restored old mill house"
    <meta name="keywords" content="chagnolet, mill house, holiday, south of france">
    <meta name="author" content="Andrew Gill">
    <title>Chagnolet | Contact Us </title>
    <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <header class="whitebg">
        <div class="container">
            <div id="branding">
                <img src="./img/logo.jpg" alt="Chagnolet" id="logo">
                <h1>Moulin de Chagnolet</h1>
                <a href="contactf.php"><img src="./img/frenchflag.png" alt="Site in French" class = "flags" id="french"></a>
                <a href="contact.php"><img src="./img/ukflag.png" alt="Site in English" class="flags"></a>
            </div>
        </div>
        </header>

        <section>
            <div class="graycontainer">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About the Property</a></li>
                    <li><a href="cresse.php">Cressé and the Area</a></li>
                    <li><a href="price.php">Price and Availability</a></li>
                    <li><a href="contact.php" class="active">Contact Us</a></li>
                </ul>
            </nav>
            </div>
        <div class="textcontainer">
            <h2>Contact Details </h2>
            <p>We live on-site in a separate part of the main house (with our own gardens). We always make sure we are available to help you find your feet and to answer any questions although you needn't see us unless you want to!</p>
            <p>If you would like us to send you an order form or if you have any questions then please contact us by filling in the form or calling the number provided below.</p>
            <p>Andrew and Wendy Gill: <br> Tel: +33-5-46-59-28-10 (if you hear a French lady speak, just wait for the beep and leave a message)</p>
        </div>

        <div class="formcontainer">
            <?php if ($msg != ''): ?>
                <div class="<?php echo $msgClass ?>"><?php echo $msg ?></div>
            <?php endif; ?>
            <form action="contact.php" method="post">
                <label>Name:</label><br>
                <input placeholder="Full name" name="name" value = "<?php echo isset($_POST['name']) ? $name : '' ?>"> <br>
                <label>Email:</label><br>
                <input placeholder= "Email" name ="email" type = "email" value="<?php echo isset($_POST['email']) ? $email : ''?>"><br>
                <label>Message:</label><br>
                <textarea name="message"><?php echo isset($_POST['message']) ? $message : '' ?></textarea><br>
                <button type="submit" name = "submit">Send</button>
            </form>
        </div>
        </section>
    </body>

</html>