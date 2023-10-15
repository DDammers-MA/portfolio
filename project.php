<?php

require 'function.php';
$connection = dbConnect();

$id = $_GET['id'];

// Use prepared statements to avoid SQL injection
$stmt = $connection->prepare('SELECT * FROM `projecten` WHERE `id` = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$project = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e0075003b5.js" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src="./src/main.js" defer></script>
    <title>project</title> <!-- Use the project name in the title -->
</head>

<body>
<header class="header animate__animated animate__fadeInUp">
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

    <main class="ProjectMain animate__animated animate__fadeInUp">
        <article class="ProjectMain__artcLeft ">
            <h3 class="ProjectMain__title"><?php echo $project['naam']; ?></h3>
            <div class="ProjectMain__details">
                <img class="ProjectMain__img" src="<?php echo $project['img']; ?>" alt="<?php echo $project['naam']; ?>">
                <!-- Display other project details as needed -->
            </div>
        </article>

        <article class="ProjectMain__artcRight">
            <h4 class="ProjectMain__omschrijving">omschrijving</h4>
            <p class="ProjectMain__text"> <?php echo $project['omschrijving']; ?> </p>

         <h4 class="ProjectMain__omschrijving">Skills used</h4>
            <ul  class="ProjectMain__skills" >
                <li class="ProjectMain__skill"><i class="<?php echo $project['html']; ?> " style="color: #ff0000;"></i></li>
                <li class="ProjectMain__skill"><i class="<?php echo $project['css']; ?>" style="color: #005eff;"></i></li>
                <li class="ProjectMain__skill"><i class="<?php echo $project['sass']; ?>"  style="color: #ff00ea;"></i></li>
                <li class="ProjectMain__skill"><i class="<?php echo $project['javascript']; ?>"  style="color: #ffff02;"></i></li>
                <li class="ProjectMain__skill"><i class="<?php echo $project['php']; ?>"  style="color: #00328a;"></i></li>
            </ul>

            <div class="ProjectMain__Buttons">
                <a target="_blank" href="<?php echo $project['github']; ?>"><button class="ProjectMain__Button projectMain__Button--github">Github</button></a>
                <a target="_blank" href="<?php echo $project['live']; ?>"><button class="ProjectMain__Button projectMain__Button--github">live</button></a>
            </div>
        </article>
    </main>
</body>

</html>