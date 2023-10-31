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
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/detail2.css">
</head>
<body>
    <nav class="nav">
        <a href="index.php"><img src="img/logo.webp" alt=""></a>
    </nav>

    <?php
include "data.php";
if (isset($_GET['id'])) {
    $sdgIndex = $_GET['id'];

    if (is_numeric($sdgIndex) && $sdgIndex >= 0 && $sdgIndex < count($sdgs)) {
        $single = $sdgs[$sdgIndex];
        if ($sdgIndex >= 0 && $sdgIndex <= 10) {
            include "../views/information.php";
        } else {
            include "../views/information2.php";
        }
    } else {
        echo "ID of SDG is not valid.";
    }
} else {
    echo "ID of SDG not found in URL.";
}
?>
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

