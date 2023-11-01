<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVVN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/704f604c3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="nav">
        <a href="index.php"><img src="img/logo.webp" alt=""></a> 
    </nav>

    <section class="onzesdgs">
        <div class="sdgtekst">SDG's</div>
        <div id="results">
        <?php
include '../source/config.php';

$connection = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);

if ($connection->connect_error) {
    die("Erro na conexão com o banco de dados: " . $connection->connect_error);
}

$query = "SELECT * FROM sdg1 ORDER BY RAND() LIMIT 3";
$result = $connection->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $single = [
            "image" => $row["image"],
            "title" => $row["title"],
        ];

        echo '<a href="detail.php?id=' . $row["id"] . '">';
        include '../views/card.php';
        echo '</a>';
    }
} else {
    echo "Erro na consulta: " . $connection->error;
}

$connection->close();
?>


        </div>
        <div class="curve"></div>
    </section>

    <section class="game">
        <div class="gametekst">
            <h1 class="gameh1">Welkom bij SDG Game!</h1>
            <h2 class="gameh2">De SDG-game is een boeiend online spel dat draait om de 17 duurzame ontwikkelingsdoelen (SDG's). Dit interactieve spel stimuleert studenten om dieper in de SDG's te duiken en uitdagende missies aan te gaan. Hierdoor verwerven ze uitgebreide kennis over elk van de SDG's, geheel in lijn met de Nederlandse normen en waarden voor duurzaamheid.</h2>
            <a href="http://sdggame.nl/"><button class="grotebutton">Speel nu!</button></a>
        </div>
        <div class="loader"></div>
        <div class="curvegame"></div>
    </section>

    <section class="information">
        <img class="image2" src="img/logosdg.webp" alt="">
        <div class="informationtekst">
            <h1 class="informationh1">Wat is een SDG?</h1>
            <h2 class="informationh2">Een SDG, of Duurzame Ontwikkelingsdoel, is een van de 17 wereldwijde doelen die zijn vastgesteld door de Verenigde Naties als onderdeel van de Agenda 2030 voor Duurzame Ontwikkeling. Deze doelen zijn ontworpen om enkele van 's werelds meest urgente problemen aan te pakken, waaronder armoede, ongelijkheid, klimaatverandering en milieuvervuiling. Elk SDG richt zich op specifieke kwesties en heeft tot doel de wereld tot 2030 aanzienlijk te verbeteren. De SDG's fungeren als een kompas voor overheden, organisaties en individuen om actie te ondernemen en bij te dragen aan een betere toekomst voor onze planeet en haar bewoners. Ze vertegenwoordigen een universele oproep tot actie en samenwerking om een duurzamere en rechtvaardigere wereld te bereiken.</h2>
        </div>
    </section>

</body>
<footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <section class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Affiliate program</a></li>
                    </ul>
                </section>
                <section class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Order status</a></li>
                        <li><a href="#">Payment options</a></li>
                    </ul>
                </section>
                <section class="footer-col">
                    <h4>Luniro</h4>
                    <p>Uw webontwikkelingspartner voor op maat gemaakte websites. Ons team van experts brengt uw online visie tot leven met kwaliteit, innovatie en klantgerichtheid. Klaar om uw online aanwezigheid te verbeteren.</p>
                </section>
                <section class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </section>
            </div>
        </div>
    </footer>
</html>