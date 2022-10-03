<?php
    require "../class/Pokemon.php";
    $pokemons = [
        "evoli" => new Pokemon(['normal'], "Evoli", "https://www.pokepedia.fr/images/8/8b/%C3%89voli-RFVF.png"),
        "salameche" => new Pokemon(['fire'], "Salamèche", "https://www.waouo.com/wp-content/uploads/2011/09/salamechepokemon.png")
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP basics</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <main>
        <h1>Gotta catch'em all!</h1>
        <ul class="pokemonContainer">
            <?php foreach($pokemons as $pokemon => $object) : ?>
                <li id="<?= $pokemon ?>" class="pokemonCard">
                    <h2>French name : <?= $object->getName() ?></h2>
                    <span>Current level : <?= $object->getCurrentLevel() ?></span>
                    <img src="<?= $object->getPicture() ?>" alt="This is <?= $object->getName() ?>">
                    <span>type : <?php foreach($object->getType() as $type) : ?>
                        <?= $type . " " ?>
                        <?php endforeach ?>
                    </span>
                    </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>
</html>