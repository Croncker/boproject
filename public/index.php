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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="nav">
        <a href=""><img src="img/sdglogo.png" alt=""></a> 
            <ul class="list">
                <li class="listitem">Over NVVN</li>
            </ul>
        </a>
        </nav>
    <section class="onzesdgs">
        <div class="sdgtekst">SDG's</div>
        <div id="results">
            <?php
            // Inclusief het singles.php-document om gegevens op te halen
            include 'data.php';
            

            foreach ($musicSingles as $index => $single) {
                echo '<a href="detail.php?id=' . $index . '">';
                include '../views/card.php';
                echo '</a>';
            }
            ?>
        </div>
    </section>
    <section>
            <div class="bg">
            <div class="alletekst">
                <h1 class="heading">  <img src="" class="logo-image" > Welkom bij SDG Game!</h1>
                <h2 class="heading2">De SDG-game is een online spel over de 17 duurzame ontwikkelingsdoelen. Dit online spel daagt studenten uit zich te verdiepen in de SDG’s en om challenges uit te voeren zodat zij kennis maken met alle SDG’s volgens de Nederlandse maatstaven.</h2>
                <a href="http://sdggame.nl/"><button class="grotebutton">Speel nu!</button></a>
            </div>
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