
<?php
require 'config.php';
require 'function.php';
$connection = dbConnect();

$sql = "SELECT id, naam, img FROM projecten LIMIT 6";
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
    <title>Daniël Dammers</title>
</head>

<body>

<div class="background">

<header class="header">
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li header__li--home"><a class="header__link" href="./index.php">Home</a></li>
                <li class="header__li"><a class="header__link" href="./projecten.php">Projecten</a></li>
                <li class="header__li"><a class="header__link" href="#AboutMe">About me</a></li>
                <li class="header__li header__li"><a class="header__link header__link--contact" href="./index.php#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

    </header>

    <main class="main ">

        <article class="main__article">

        

            <img class="main__img animate__animated animate__fadeInUp" src="img/foto Daniel9.webp" alt="">


            <div class="main__text animate__animated animate__fadeInUp">
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

        
        </div>

       <article class="Projecten Projecten--main">
       <div class="Projecten__div">
  
    
            <h3 class="Projecten__title">uitgelichte projecten</h3>

            <ul class="Projecten__ul  ">
                <?php foreach ($projects as $project) : ?>
                    <li class="Projecten__li reveal">
                        <a class="Projecten__Link" href="project.php?id=<?php echo $project['id']; ?>">

                        <div class="Projecten__container">
                       
                            <img class="Projecten__img" src="<?php echo $project['img']; ?>" alt="hallo">
                            <p class="Projecten__name"><?php echo $project['naam']; ?></p>
                            <div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            </div>
    </article >


        <article id="AboutMe" class="aboutMe reveal ">
       
            <h2 class="aboutMe__title "> about me</h1>
                <section class="aboutMe__left reveal">

                    <p class="aboutMe__text">
                    Hallo, mijn naam is Daniel Dammers, en ik ben een student aan het Mediacollege Amsterdam voor de afgelopen 2,5 jaar. Ik heb gekozen voor de opleiding softwareontwikkelaar en specialiseer me vooral in front-end, omdat ik het leuker vind om websites op nieuwe en andere manieren te stylen/maken en elke keer een andere manier te vinden om iets leuks te maken. <br>  Wat zou ik nog meer willen leren? <br> Wat ik graag nog meer wil leren is back-end. Ik heb gezien wat je er allemaal mee kunt doen, en ik denk dat als ik mijn front-end en back-end zou kunnen combineren, ik hele gave websites kan maken.</p>
                  
                </section>
                <section class="aboutMe__right reveal">
                    <img class="main__img main__img--2" src="img/foto Daniel (2).webp" alt="">
                </section>
              
       </article>
    <article class="skills">

    <div class="skills__div">
            <h2 class="skills__title">skills</h2>

            <ul class="skills__list reveal">

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
            </div>
        </article>
    </main>

    <footer class="footer">


        <div class="footer__div">
            <h3 class="footer__title ">Navigatie</h3>

            <ul class="footer__list">

                <li class="footer__listItem"><a class="footer__link" href="./index.php">Home</a></li>
                <li class="footer__listItem"><a class="footer__link" href="./projecten.php">Projecten</a></li>
                <li class="footer__listItem"><a class="footer__link" href="#AboutMe">About me</a></li>
                <li class="footer__listItem"><a class="footer__link header__link--contact" href="#contact">Contact</a></li>
            </ul>
        </div>


        <div class="footer__div">
            <h3 class="footer__title">Find me</h3>

            <ul class="footer__list">

                <li class="footer__listItem"><a class="footer__link"  target="_blank" href="https://www.linkedin.com/in/dani%C3%ABl-d-17093a23b/"><i class="fa-brands fa-linkedin"></i>Linkedin</a></li>
                <li class="footer__listItem"><a class="footer__link "  target="_blank" href="https://github.com/DDammers-MA"><i class="fa-brands fa-github"></i>Github</a></li>

            </ul>
        </div>

        <div class="footer__div">
            <h3 id="contact" class="footer__title">Contact</h3>

            <ul class="footer__list">
                <li class="footer__listItem"><a class="footer__link " href="tel:0610039069"> <i class="fa-solid fa-phone"></i>+31 6 10039060</a></li>
                <li class="footer__listItem"><a class="footer__link " href="mailto:Dammersdaniel@gmail.com"><i class="fa-solid fa-at"></i>Dammersdaniel@gmail.com</a> </li>
            </ul>
        </div>
    </footer>
</body>

</html>