<?php

use yii\helpers\Html;
use yii\widgets\linkpager;
?>
<?= $this->registerCssFile('css/res.css', ['depends' => ['frontend\assets\AppAsset']]) ?>
<h1>Друзья</h1>
<ul>
    <?php foreach ($friends as $Friend) : ?>
        <li>
            <?= Html::encode("Пользователь $Friend->user - Друг $Friend->friend (Статус \"{$Friend->status}\")") ?>
            <br>
            <br>
            <!-- <br>
            <?= Html::encode("{$Friend->status} ") ?>
            <br>
            <br> -->
        </li>
    <?php endforeach; ?>
</ul>
<?= linkpager::widget(['pagination' => $pagination]) ?>