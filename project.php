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
    <title><?php echo $project['naam']; ?> Project Detail</title> <!-- Use the project name in the title -->
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li header__li--home"><a class="header__link" href="./index.html">Home</a></li>
                <li class="header__li"><a class="header__link" href="">Projecten</a></li>
                <li class="header__li"><a class="header__link" href="">cv</a></li>
                <li class="header__li"><a class="header__link" href="">contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <article class="Projecten">
            <h3 class="Projecten__title"><?php echo $project['naam']; ?></h3>
            <div class="Projecten__details">
                <img class="Projecten__img" src="<?php echo $project['img']; ?>" alt="<?php echo $project['naam']; ?>">
                <!-- Display other project details as needed -->
            </div>
        </article>
    </main>
</body>
</html>
