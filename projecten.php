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
    <title>Document</title>
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

    <main class="main">
        <article class="Projecten">
            <h3 class="Projecten__title">Projecten</h3>

            <ul class="Projecten__ul">
    <?php foreach ($projects as $project): ?>
        <li class="Projecten__li">
            <a class="Projecten__Link" href="project.php?id=<?php echo $project['id']; ?>"> <!-- Add a link to the project detail page -->
                <img class="Projecten__img" src="<?php echo $project['img']; ?>" alt="hallo">
                <?php echo $project['naam']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
        </article>
    </main>

</body>

</html>