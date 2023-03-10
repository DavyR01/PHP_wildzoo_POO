<!-- ⛔ DO NOT MODIFY THIS FILE ⛔-->

<?php

use App\Area\Area;

$areaType = $_GET['area'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/area.css">
    <title>Welcome to the Wild Zoo</title>
</head>

<body>
    <header>
        <h1>Welcome to the Wild Zoo</h1>
    </header>
    <main>
        <?php include 'map.php'; ?>

        <?php if (!empty($errors)) : ?>
            <ul class="errors">
                <?php foreach ($errors as $error) : ?>
                    <li>
                        <img src="assets/images/skull.png" alt="skull">
                        <?= $error ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if (!empty($smallErrors)) : ?>
            <ul class="small-errors">
                <?php foreach ($smallErrors as $smallError) : ?>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                        </svg>
                        <?= $smallError ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            </div>
        <?php endif; ?>

        <h2>
            <?= $areaType ?>
            <?php if ($areaType) : ?>
                <a class="back" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                    Back
                </a>
            <?php endif; ?>
        </h2>
        <?php if (interface_exists(Swimmable::class)) : ?>
            <input id="swimmable" type="checkbox">
            <label class="btn swim-label" for="swimmable">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-water" viewBox="0 0 16 16">
                    <path d="M.036 3.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 3.964a.5.5 0 0 1-.278-.65zm0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 6.964a.5.5 0 0 1-.278-.65zm0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 9.964a.5.5 0 0 1-.278-.65zm0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65z" />
                </svg>
                Try to swim
            </label>
        <?php endif ?>

        <div class="animals">
            <!-- <?php if (isset(${$areaType}) && ${$areaType} instanceof Area && method_exists(${$areaType}, 'getAnimals')) : ?>
                <?php if (method_exists(${$areaType}, 'isValid')) : ?>
                    <div class="selectionnable">
                        <?php foreach ($animals as $animal) : ?>
                            <div class="<?= ${$areaType}->isValid($animal) ? 'is-selectionnable' : '' ?>">
                                <?= $animal->getName() ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif; ?>
                <?php $animals = ${$areaType}->getAnimals(); ?>
            <?php endif; ?> -->
            <?php foreach ($animals ?? [] as $key => $animal) : ?>

                <article>
                    <aside>
                        <div class="parents">
                            <?php $reflection = new ReflectionClass($animal); ?>
                            <div>
                                <?= $reflection->isFinal() ? '🚫' : '' ?>
                                <?= preg_replace('/.+\\\(.+)$/', '\1', get_class($animal)) ?>
                            </div>
                            <?php foreach (class_parents($animal) ?? [] as $parent) : ?>
                                <div>↓</div>
                                <div>
                                    <?php $parentReflection = new ReflectionClass($parent); ?>
                                    <?= $parentReflection->isAbstract() ? '🎨' : '' ?>
                                    <?= preg_replace('/.+\\\(.+)$/', '\1', $parent) ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </aside>
                    <?php if (method_exists($animal, 'speak')) : ?>
                        <div class="hello">
                            <?= $animal->speak() ?>
                        </div>
                    <?php endif; ?>
                    <div></div>
                    <img class="animal-img <?= $animal instanceof Swimmable ? 'swim' : 'no-swim' ?>" width="<?= $animal->getSize() ?? 100 ?>%" src="assets/images/animals/<?= $animal->name ?? $animal->getName() ?? 'undefined' . $key % 3 ?>.png" alt="">
                    <div class="notice">
                        <div class="title">
                            <h1>
                                <?= $animal->name ?? $animal->getName() ?? 'Undefined animal #' . ($key + 1) ?>
                            </h1>
                        </div>
                        <hr />
                        <ul class="infos">
                            <li class="paw"><?= $animal->pawNumber ?? $animal->getPawNumber() ?? 'undefined' ?></li>
                            <li class="size">
                                <?= method_exists($animal, 'getSizeWithUnit') ? $animal->getSizeWithUnit() : $animal->getSize()  ?>
                            </li>
                            <?php if (isset($animal->carnivorous)) : ?>
                                <li class="<?= $animal->carnivorous ? 'carnivorous' : 'vegetarian' ?>">
                                    <?= $animal->carnivorous ? 'carnivorous' : 'vegetarian' ?>
                                </li>
                            <?php elseif (method_exists($animal, 'isCarnivorous')) : ?>
                                <li class="<?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?>">
                                    <?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?>
                                </li>
                            <?php else : ?>
                                <li class="vegetarian"> undefined </li>
                            <?php endif; ?>
                            <li class="iucn"><?= $animal->threatenedLevel ?? $animal->getThreatenedLevel() ?></li>
                            <?php if (method_exists($animal, 'isDangerous')) : ?>
                                <li class="<?= $animal->isDangerous() ? 'dangerous' : 'not-dangerous' ?>">
                                    <?= $animal->isDangerous() ? 'Dangerous' : 'Not dangerous' ?>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

</body>

</html>