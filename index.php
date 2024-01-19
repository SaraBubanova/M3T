<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <title>Kommaardoor computers</title>
</head>

<body>

    <div id="container">
        <header>
            <div id="logo">
                <img src="img/logo.png">
                <h1>Kommaardoor</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div id="heroBanner">
            <div id="heroText" class="blueBackground">
                <h1>500 series</h1>
                <h2>Efficiently spaced</h2>
                <h3>Key components</h3>
                <a class="infoBtn" href="#">Find out more</a>
            </div>
        </div>

        <div id="centerBanner">
            <div>
                <h1>Welcome to Kommaardoor</h1>
                <p>We innovate by looking at the quality products of yesterday.</p>
            </div>
            <img src="img/Harold.png">
        </div>
        <div id="cardBanner">
            <h1>Our products</h1>
            <div id="cardContainer">
			<?php
                // Database configuratiegegevens
                $host = 'mysql';
                $dbname = 'kommaardoor';
                $user = 'root';
                $password = 'qwerty';

                // PDO-verbinding
                try {
                    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
                } catch (PDOException $e) {
                    die("Error: " . $e->getMessage());
                }

                // Query to get products
                $query = "SELECT * FROM producten";
                $stmt = $pdo->prepare($query);
                $stmt->execute();

                // loop through results
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="card">';
                    echo '<h2>' . $row['productnaam'] . '</h2>';
                    echo '<img src="' . $row['afbeelding_url'] . '">';
                    echo '<a class="infoBtn" href="#">Find out more</a>';
                    echo '</div>';
                }

                // Sluit de PDO-verbinding
                $pdo = null;
                ?>			
			
			
                <div class="card">
                    <h2>9000 series</h2>
                    <img src="img/Product2.png">
                    <a class="infoBtn" href="#">Find out more</a>
                </div>
                <div class="card">
                    <h2>Amiga M</h2>
                    <img src="img/Product1.png">
                    <a class="infoBtn" href="#">Find out more</a>
                </div>
                <div class="card">
                    <h2>Amiga T</h2>
                    <img src="img/Product3.png">
                    <a class="infoBtn" href="#">Find out more</a>
                </div>
			
				
			
            </div>
        </div>
        <footer class="blueBackground">
            <div>
                <div class="footerSection">
                    <h3>Contact</h3>
                    <ul>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
                <div class="footerSection">
                    <h3>About us</h3>
                    <ul>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
                <div class="footerSection">
                    <h3>Legal</h3>
                    <ul>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
            </div>
        </footer>


    </div>


</body>

</html>