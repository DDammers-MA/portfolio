
<?php
require 'config.php';
require 'function.php';
$connection = dbConnect();

$sql = "SELECT id, naam, img FROM projecten LIMIT 6"; // Use the correct table name 'projecten'
$stmt = $connection->prepare($sql);
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e0075003b5.js" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="css/style.css">
    <script src="./src/main.js" defer></script>
    <title>Document</title>
</head>

<body>

<header class="header">
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li header__li--home"><a class="header__link" href="./index.php">Home</a></li>
                <li class="header__li"><a class="header__link" href="./projecten.php">Projecten</a></li>
                <li class="header__li"><a class="header__link" href="#AboutMe">About me</a></li>
                <li class="header__li header__li"><a class="header__link header__link--contact" href="./index.php#contact">contact</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

    </header>

    <main class="main ">
        <article class="main__article animate__animated animate__fadeInUp">

            <img class="main__img" src="img/foto Daniel9.webp" alt="">


            <div class="main__text">
                <p>Hello! i'm Daniël Dammers</p>
                <ul class="container">
                  
                    <span class="text second__text">I'm a Front-end Developer </span>
                </ul>

                <ul class="main__socials">
                    <li class="main__social"><a class="main__social" target="_blank" href="https://github.com/DDammers-MA"><i class="fa-brands fa-github fa-2xl"></i></a></li>
                    <li class="main__social"><a  class="main__social" target="_blank" href="https://www.linkedin.com/in/dani%C3%ABl-d-17093a23b/"><i class="fa-brands fa-linkedin fa-2xl"></i></a></li>
                </ul>

            </div>
        </article>


        <article class="Projecten Projecten--main  animate__animated animate__fadeInUp">
            <h3 class="Projecten__title">uitgelichte projecten</h3>

            <ul class="Projecten__ul">
                <?php foreach ($projects as $project) : ?>
                    <li class="Projecten__li">
                        <a class="Projecten__Link" href="project.php?id=<?php echo $project['id']; ?>"> 
                            <img class="Projecten__img" src="<?php echo $project['img']; ?>" alt="hallo">
                            <?php echo $project['naam']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </article>

        <article id="AboutMe" class="aboutMe animate__animated animate__fadeInUp">
            <h2 class="aboutMe__title"> about me</h1>
                <section class="aboutMe__left">

                    <p class="aboutMe__text">
                        Hallo mijn naam is Daniel Dammers en ik ben een student op het mediacollege Amsterdam voor de afgelopen 2.5 jaar. Ik heb voor de opleiding software-devloper gekozen en specialiseer vooral in Front-end,<br>
                        omdat ik het leuker vind om website's in nieuwe en andere manier te style/maken en elke keer en andere manier vinden om iets te leuks te maken. <br>
                        wat ik nog meer weer leren?<br>
                        wat ik graag ik nog wat meer wil leren is back-end ik heb gezien wat je er allemaal me kan doen ik denk dat als ik mijn front-end en back-end zou kunnen combineren dat ik hele gave website kan maken
                    </p>
                  
                </section>
                <section class="aboutMe__right">
                    <img class="main__img main__img--2" src="img/foto Daniel (2).webp" alt="">
                </section>
        </article>

        <article class="skills animate__animated animate__fadeInUp">
            <h2 class="skills__title">skills</h2>

            <ul class="skills__list">

                <li class="skills__listItem">
                    <i class="fa-brands fa-html5" style="color: #ff0000;"></i>
                    html
                </li>

                <li class="skills__listItem">
                    <i class="fa-brands fa-css3-alt" style="color: #005eff;"></i>
                    css
                </li>

                <li class="skills__listItem">
                    <i class="fa-brands fa-js" style="color: #ffff02;"></i>
                    javascript
                </li>

                <li class="skills__listItem">
                    <i class="fa-brands fa-sass" style="color: #ff00ea;"></i>
                    sass
                </li>


                <li class="skills__listItem">
                    <i class="fa-brands fa-php" style="color: #00328a;"></i>
                    php
                </li>

                <li class="skills__listItem">
                    <i class="fa-solid fa-database"></i>
                    mysql
                </li>



            </ul>
        </article>
    </main>

    <footer class="footer animate__animated animate__fadeInUp">


        <div class="footer__div">
            <h3 class="footer__title">navigatie</h3>

            <ul class="footer__list">

                <li class="footer__listItem"><a class="footer__link" href="./index.php">Home</a></li>
                <li class="footer__listItem"><a class="footer__link" href="./projecten.php">Projecten</a></li>
                <li class="footer__listItem"><a class="footer__link" href="#AboutMe">About me</a></li>
                <li class="footer__listItem"><a class="footer__link header__link--contact" href="">contact</a></li>
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