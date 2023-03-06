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
                    <img class="animal-img" width="<?= method_exists($animal, 'getSize') ? $animal->getSize() : '100' . '%' ?>" src="assets/images/animals/<?= method_exists($animal, 'getName') ? $animal->getName() : 'undefined' . $key % 3 ?>.png" alt="">
                    <div class="notice">
                        <div class="title">
                            <h1>
                                <?= method_exists($animal, 'getName') ? $animal->getName() : 'Undefined animal #' . ($key + 1) ?>
                            </h1>
                            <?php if (method_exists($animal, 'isCarnivorous')) : ?>
                                <div class="<?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?>"></div>
                            <?php endif ?>
                        </div>
                        <hr />
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>