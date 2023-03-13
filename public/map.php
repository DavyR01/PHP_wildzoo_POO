<?php

use App\Area\Area;

if (!empty($areas) && class_exists(Area::class)) : ?>
    <input hidden type="checkbox" id="folded-map">
    <label class="folded-map" for="folded-map">
        <img src="assets/images/folded_map.png" alt="map">
    </label>

    <div class="map" id="map">
        <?php $bottomImages = ['plan', 'gate', 'guider']; ?>
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="zone">
                <img class="additional-image" src="assets/images/<?= $bottomImages[$i] ?>.png" alt="">
                <?php foreach ($areas as $key => $area) : ?>
                    <?php if (method_exists($area, 'getName')) : ?>
                        <?php if ($key % 3 === $i) : ?>
                            <div class="plan-area">
                                <img src="assets/images/areas/<?= $area->getName() ?>.png" alt="">
                                <?php if (method_exists($area, 'getAnimals') && !empty($area->getAnimals())) : ?>
                                    <a id="area$i" data-name="<?= $area->getName() ?>" class="area-name" href="?area=<?= $area->getName() ?>"><?= $area->getName() ?></a>
                                <?php else : ?>
                                    <?= $area->getName() ?>
                                <?php endif; ?>
                            </div s>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endfor; ?>
    </div>
<?php endif; ?>