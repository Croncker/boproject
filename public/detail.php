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
include '../source/config.php';

if (isset($_GET['id'])) {
    $sdgIndex = $_GET['id'];

    // Crie uma conexão com o banco de dados usando as constantes definidas em config.php
    $connection = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);

    // Verifique se há erros na conexão
    if ($connection->connect_error) {
        die("Erro na conexão com o banco de dados: " . $connection->connect_error);
    }

    if (is_numeric($sdgIndex) && $sdgIndex >= 0) {
        $query = "SELECT * FROM sdg1 WHERE id = $sdgIndex";
        $result = $connection->query($query);

        if ($result) {
            if ($row = $result->fetch_assoc()) {
                $single = [
                    "image" => $row["image"],
                    "image2" => $row["image2"],
                    "title" => $row["title"],
                    "subtitle" => $row["subtitle"],
                    "subtitle2" => $row["subtitle2"],
                    "desc" => $row["desc"],
                    "desc2" => $row["desc2"],
                ];

                if ($sdgIndex >= 0 && $sdgIndex <= 9) {
                    include "../views/information.php";
                } else {
                    include "../views/information2.php";
                }
            } else {
                echo "SDG com o ID especificado não foi encontrado no banco de dados.";
            }
        } else {
            echo "Erro na consulta: " . $connection->error;
        }
    } else {
        echo "ID do SDG não é válido.";
    }
    $connection->close();
} else {
    echo "ID do SDG não encontrado na URL.";
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

