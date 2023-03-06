<!-- ⛔ DO NOT MODIFY THIS FILE ⛔-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Welcome to the Wild Zoo</title>
</head>

<body>
    <header>
        <h1>Welcome to the Wild Zoo</h1>
    </header>
    <main>
        <div class="animals">
            <?php foreach ($animals ?? [] as $key => $animal) : ?>
                <article>
                    <?php if (method_exists($animal, 'sayHello')) : ?>
                        <div class="hello">
                            <?= $animal->sayHello() ?>
                        </div>
                    <?php endif; ?>
                    <div></div>
                    <img class="animal-img" width="<?= isset($animal->size) ? $animal->size : 100 ?>%" src="assets/images/animals/<?= isset($animal->name) ? $animal->name : 'undefined' . $key % 3 ?>.png" alt="">
                    <div class="notice">
                        <div class="title">
                            <h1>
                                <?= isset($animal->name) ? $animal->name : 'Undefined animal #' . ($key + 1) ?>
                            </h1>
                        </div>
                        <hr />
                        <ul class="infos">
                            <li class="paw"><?= isset($animal->pawNumber) ? $animal->pawNumber . ' patte(s)' : 'undefined' ?></li>
                            <li class="size"><?= isset($animal->size) ? $animal->size : 'undefined' ?></li>
                            <?php if (isset($animal->carnivorous)) : ?>
                                <li class="<?= $animal->carnivorous ? 'carnivorous' : 'vegetarian' ?>">
                                    <?= $animal->carnivorous ? 'carnivorous' : 'vegetarian' ?>
                                </li>
                            <?php else : ?>
                                <li class="vegetarian"> undefined </li>
                            <?php endif; ?>
                            <?php if (isset($animal->threatenedLevel)) : ?>
                                <li class="iucn"><?= $animal->threatenedLevel ?></li>
                            <?php endif; ?>


                        </ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>