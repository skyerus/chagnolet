<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name= "description" content="Welcome to our beautifully restored old mill house"
    <meta name="keywords" content="chagnolet, mill house, holiday, south of france">
    <meta name="author" content="Andrew Gill">
    <title>Chagnolet | Prices </title>
    <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <header class="whitebg">
        <div class="container">
            <div id="branding">
                <img src="./img/logo.jpg" alt="Chagnolet" id="logo">
                <h1>Moulin de Chagnolet</h1>
                <a href="pricef.php"><img src="./img/frenchflag.png" alt="Site in French" class = "flags" id="french"></a>
                <a href="price.php"><img src="./img/ukflag.png" alt="Site in English" class="flags"></a>
            </div>
        </div>
        </header>

        <section>
            <div class="graycontainer">
            <nav>
                <ul>
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="about.php">About the Property</a></li>
                    <li><a href="cresse.php">Cressé and the Area</a></li>
                    <li><a href="price.php" class="active">Price and Availability</a></li>
                    <li class="extend"><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
            </div>
        <div class="textcontainer">
            <h2>Prices and availability</h2>
            <p style=text-align:center>We take bookings most of the year round, if the dates you would like are not shown below then please contact us.</p>
        </div>
        <div class="container">
        <div class="container">
            <?php 
                include 'table1.htm'; 
            ?>
        </div>
        <div id = "margincontainer">
            <?php    include 'table2.htm'; ?>
        </div>
        </div>
        <div class="textcontainer">
        <p style = "text-align:center">2 week lets only in peak period.</p>
        <p style = "text-align:center">Linen and towel hire is available, please contact us for details.</p>
        </div>
        </section>
    </body>

</html>