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
    <script src="./src/main.js" defer></script>
    <title><?php echo $project['naam']; ?> Project Detail</title> <!-- Use the project name in the title -->
</head>

<body>
<header class="header">
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li header__li--home"><a class="header__link" href="./index.php">Home</a></li>
                <li class="header__li"><a class="header__link" href="./projecten.php">Projecten</a></li>
                <li class="header__li"><a class="header__link" href="./index.php#AboutMe">About me</a></li>
                <li class="header__li header__li"><a class="header__link header__link--contact" href="./index.php#contact">contact</a></li>
           
            </ul>
            
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
     
    </header>

    <main class="ProjectMain">
        <article class="ProjectMain__artcLeft">
            <h3 class="ProjectMain__title"><?php echo $project['naam']; ?></h3>
            <div class="ProjectMain__details">
                <img class="ProjectMain__img" src="<?php echo $project['img']; ?>" alt="<?php echo $project['naam']; ?>">
                <!-- Display other project details as needed -->
            </div>
        </article>

        <article class="ProjectMain__artcRight">
            <h4 class="ProjectMain__omschrijving">omschrijving</h4>
            <p class="ProjectMain__text"> <?php echo $project['omschrijving']; ?> </p>
            <div class="ProjectMain__Buttons">
                <button class="ProjectMain__Button projectMain__Button--github"> <a target="_blank"  href="<?php echo $project['github']; ?>">Github</a></button>
                <button class="ProjectMain__Button projectMain__Button--live">Live </button>
            </div>
        </article>
    </main>
</body>

</html>