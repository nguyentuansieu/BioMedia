<?php
use yii\helpers\Html;
?>
<div class="container">
    <div class="row rslides_container">
        <ul class="rslides" id="AdsTopCenter">
            <?php foreach($nodes as $node): ?>
                <li><?= Html::img($node->image); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php
$js = '
$("#AdsTopCenter").responsiveSlides({
    auto: true,
    pager: false,
    nav: false,
    speed: 500,
    namespace: "centered-btns"
});
';
$this->registerJs($js, 3);
?>