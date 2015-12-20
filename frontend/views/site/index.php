<?php

/* @var $this yii\web\View */

$this->title = 'Bio Media';

use yii\helpers\Html;
?>
<div class="container">
<div class="row rslides_container">
    <ul class="rslides" id="slideshow">
        <li><?=Html::img('/uploads/slideshow/1.png'); ?></li>
        <li><?=Html::img('/uploads/slideshow/2.png'); ?></li>
        <li><?=Html::img('/uploads/slideshow/3.png'); ?></li>
    </ul>
</div>
</div>

<?php
$js = '
$("#slideshow").responsiveSlides({
    auto: true,
    pager: false,
    nav: true,
    speed: 500,
    namespace: "centered-btns"
});
';
$this->registerJs($js, 3);
?>