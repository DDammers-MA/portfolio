<?php
require 'config.php';
require 'function.php';
$connection = dbConnect();

$sql = "SELECT id, naam, img FROM projecten"; 
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
    <script src="https://kit.fontawesome.com/e0075003b5.js" crossorigin="anonymous"></script>
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
                <li class="header__li header__li"><a class="header__link header__link--contact" href="./projecten.php#contact">Contact</a></li>
           
            </ul>
            
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
   
    </header>

    <main class="main">
    <article class="Projecten " id="projecten">

     
            <ul class="Projecten__ul  ">
                <?php foreach ($projects as $project) : ?>
                    <li class="Projecten__li">
                        <a class="Projecten__Link" href="project.php?id=<?php echo $project['id']; ?>">

                        <div class="Projecten__container">
                       
                            <img class="Projecten__img" src="<?php echo $project['img']; ?>" alt="hallo">
                            <p class="Projecten__name"><?php echo $project['naam']; ?></p>
                            <div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </article>
    </main>

  
    <footer id="contact" class="footer footer--projecten">


    <div class="footer__div">
            <h3 class="footer__title ">Navigatie</h3>

            <ul class="footer__list">

                <li class="footer__listItem"><a class="footer__link footer__link--pro" href="./index.php">Home</a></li>
                <li class="footer__listItem"><a class="footer__link footer__link--pro" href="./projecten.php">Projecten</a></li>
                <li class="footer__listItem"><a class="footer__link footer__link--pro" href="#AboutMe">About me</a></li>
                <li class="footer__listItem"><a class="footer__link footer__link--pro header__link--contact" href="#contact">Contact</a></li>
            </ul>
        </div>


        <div class="footer__div">
            <h3 class="footer__title">Find me</h3>

            <ul class="footer__list">

                <li class="footer__listItem"><a class="footer__link footer__link--pro" target="_blank"href="https://www.linkedin.com/in/dani%C3%ABl-d-17093a23b/"><i class="fa-brands fa-linkedin"></i>Linkedin</a></li>
                <li class="footer__listItem"><a class="footer__link footer__link--pro" target="_blank" href="https://github.com/DDammers-MA"><i class="fa-brands fa-github"></i>Github</a></li>

            </ul>
        </div>

        <div class="footer__div">
            <h3 id="contact" class="footer__title">Contact</h3>

            <ul class="footer__list">
                <li class="footer__listItem"><a class="footer__link footer__link--pro" href="tel:0610039069"> <i class="fa-solid fa-phone"></i>+31 6 10039060</a></li>
                <li class="footer__listItem"><a class="footer__link footer__link--pro" href="mailto:Dammersdaniel@gmail.com"><i class="fa-solid fa-at"></i>Dammersdaniel@gmail.com</a> </li>
            </ul>
        </div>
</footer>
</body>

</html>