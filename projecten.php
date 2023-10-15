<?php
require 'config.php';
require 'function.php';
$connection = dbConnect();

$sql = "SELECT id, naam, img FROM projecten"; // Use the correct table name 'projecten'
$stmt = $connection->prepare($sql);
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="./src/main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>projecten</title>
</head>

<body>
<header class="header">
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li header__li--home"><a class="header__link" href="./index.php">Home</a></li>
                <li class="header__li"><a class="header__link" href="./projecten.php">Projecten</a></li>
                <li class="header__li"><a class="header__link" href="./index.php#AboutMe">About me</a></li>
                <li class="header__li header__li"><a class="header__link header__link--contact" href="./index.php#contact">Contact</a></li>
           
            </ul>
            
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
     
    </header>

    <main class="main">
    <article class="Projecten animate__animated animate__fadeInUp" id="projecten">

            <h3 class="Projecten__title">Projecten</h3>

            <ul class="Projecten__ul ">
    <?php foreach ($projects as $project): ?>
        <li class="Projecten__li  reveal">
            <a class="Projecten__Link" href="project.php?id=<?php echo $project['id']; ?>"> <!-- Add a link to the project detail page -->
                <img class="Projecten__img" src="<?php echo $project['img']; ?>" alt="hallo">
                <?php echo $project['naam']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
        </article>
    </main>


    <footer class="footer">


<div class="footer__div">
    <h3 class="footer__title">navigatie</h3>

    <ul class="footer__list">

        <li class="footer__listItem"><a class="footer__link" href="./index.php">Home</a></li>
        <li class="footer__listItem"><a class="footer__link" href="./projecten.php">Projecten</a></li>
        <li class="footer__listItem"><a class="footer__link" href="#AboutMe">About me</a></li>
        <li class="footer__listItem"><a class="footer__link header__link--contact" href="">Contact</a></li>
    </ul>
</div>


<div class="footer__div">
    <h3 class="footer__title">find me</h3>

    <ul class="footer__list">

        <li class="footer__listItem"><a class="footer__link" href="https://www.linkedin.com/in/dani%C3%ABl-d-17093a23b/">linkedin</a></li>
        <li class="footer__listItem"><a class="footer__link" href="https://github.com/DDammers-MA">github</a></li>

    </ul>
</div>

<div class="footer__div">
    <h3 id="contact" class="footer__title">contact</h3>

    <ul class="footer__list">

        <li class="footer__listItem"> <a href="tel:0610039069">0610039060</a></li>
        <li class="footer__listItem"> <a href="mailto:Dammersdaniel@gmail.com">Dammersdaniel@gmail.com</a> </li>
        <li class="footer__listItem"> <a href="mailto:daniel@dammienet.nl">daniel@dammienet.nl</a></li>
    </ul>
</div>
</footer>
</body>

</html>