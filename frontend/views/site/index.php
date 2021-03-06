<?php

/* @var $this yii\web\View */

$this->title = 'Bio Media';

use yii\helpers\Html;

?>
<div class="container">
    <div class="row rslides_container">
        <ul class="rslides" id="slideshow">
            <li><?= Html::img('/uploads/slideshow/1.png'); ?></li>
            <li><?= Html::img('/uploads/slideshow/2.png'); ?></li>
            <li><?= Html::img('/uploads/slideshow/3.png'); ?></li>
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
<?= \common\onecms\FrontReviewWidget::widget(); ?>
<section class="featured-pro wow bounceInUp animated">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?= \common\onecms\FrontVideoWidget::widget(); ?>
            </div>
            <div class="col-lg-4">
                <?= \common\onecms\AdsRightTopWidget::widget(); ?>
                <?= \common\onecms\EventRightWidget::widget(); ?>
            </div>
        </div>
    </div>
</section>
<?= \common\onecms\AdsMiddleCenterWidget::widget(); ?>
<section class="small-product-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?= \common\onecms\FrontProductWidget::widget(); ?>
            </div>
            <div class="col-md-6">
                <?= \common\onecms\FrontPostWidget::widget(); ?>
            </div>
        </div>
    </div>
</section>
