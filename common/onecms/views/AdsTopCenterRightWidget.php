<?php
use yii\helpers\Html;
?>
<div class="rslides_container">
    <ul class="rslides" id="AdsTopCenterRight">
        <?php foreach($nodes as $node): ?>
            <li><?= Html::img($node->image); ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php
$js = '
$("#AdsTopCenterRight").responsiveSlides({
    auto: true,
    pager: false,
    nav: false,
    speed: 500,
    namespace: "centered-btns"
});
';
$this->registerJs($js, 3);
?>