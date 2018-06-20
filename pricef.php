<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name= "description" content="Welcome to our beautifully restored old mill house"
    <meta name="keywords" content="chagnolet, mill house, holiday, south of france">
    <meta name="author" content="Andrew Gill">
    <title>Chagnolet | Prix </title>
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
                    <li><a href="indexf.php">Home</a></li>
                    <li><a href="aboutf.php">Renseignements sur le Moulin</a></li>
                    <li><a href="cressef.php">Cressé et ses environs</a></li>
                    <li><a href="pricef.php" class="active">Prix et disponibilité</a></li>
                    <li><a href="contactf.php">Contact</a></li>
                </ul>
            </nav>
            </div>
        <div class="textcontainer">
            <h2>Prix et disponibilités</h2>
            <p style=text-align:center>Nous prenons les réservations toute l'année. Si les dates mentionnées ne vous conviennent pas, contactez-nous.</p>
        </div>
        <div class="container">
        <div class="container">
            <?php 
                include 'table1fr.htm'; 
            ?>
        </div>
        <div id = "margincontainer">
            <?php    include 'table2fr.htm'; ?>
        </div>
        </div>
        <div class="textcontainer">
        <p style = "text-align:center">Bail pour 2 semaines seulement en haute saison.</p>
        <p style = "text-align:center">Linge de maison et serviettes est disponibles, SVP contactez-nous pour les détails.</p>
        </div>
        </section>
    </body>

</html>