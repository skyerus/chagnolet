<?php
    $msg = '';
    $msgClass = '';

    if (filter_has_var(INPUT_POST,'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if (!empty($name) && !empty($email) && !empty($message)){
            $toEmail = 'skye.gill@skye-project.co.uk';
            $subject = 'Contact request from ' . $name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>' . $name .'</p>
                <h4>Email</h4><p>' . $email . '</p>
                <h4>Message</h4><p>' . $message . '</p>';

            $headers = "MIME-Version:1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n" ;
            $headers .= "From: " .$name. "<".$email.">"."\r\n";

            if (mail($toEmail, $subject, $body, $headers)){
                $msg = 'Votre email a été envoyé';
                $msgClass = 'alert-success';
            } else {
                $msg = "Your email n'a pas été envoyé";
                $msgClass = 'alert-red';
            }
        } else {
            $msg = 'Veuillez remplir tout';
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
    <title>Chagnolet | Contact</title>
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
                    <li><a href="indexf.php">Home</a></li>
                    <li><a href="aboutf.php">Renseignements sur le Moulin</a></li>
                    <li><a href="cressef.php">Cressé et ses environs</a></li>
                    <li><a href="pricef.php">Prix et disponibilité</a></li>
                    <li><a href="contactf.php" class="active">Contact</a></li>
                </ul>
            </nav>
            </div>
        <div class="textcontainer">
            <h2>Les détails pour contact</h2>
            <p>Nous habitons le moulin dans une partie séparée de la maison avec notre propre jardin pour vous garantir votre intimité. Cependant nous sommes à votre disposition pour toute aide ou renseignements durant votre séjour.</p>
            <p>Pour toute réservation ou informations supplémentaires voici nos coordonnées.</p>
            <p>Andrew et Wendy Gill: <br> Tel: +33-5-46-59-28-10</p>
        </div>

        <div class="formcontainer">
            <?php if ($msg != ''): ?>
                <div class="<?php echo $msgClass ?>"><?php echo $msg ?></div>
            <?php endif; ?>
            <form action="contactf.php" method="post">
                <label>Nom:</label><br>
                <input placeholder="Nom" name="name" value = "<?php echo isset($_POST['name']) ? $name : '' ?>"> <br>
                <label>Email:</label><br>
                <input placeholder= "Email" name ="email" type = "email" value="<?php echo isset($_POST['email']) ? $email : ''?>"><br>
                <label>Message:</label><br>
                <textarea name="message"><?php echo isset($_POST['message']) ? $message : '' ?></textarea><br>
                <button type="submit" name = "submit">Envoyer</button>
            </form>
        </div>
        </section>
    </body>

</html>