<?php
/* @var $this yii\web\View */
$this->title = $title;
?>
<?=\common\onecms\AdsTopCenterWidget::widget(); ?>
<?//=\common\onecms\ReviewCategoryWidget::widget(['root' => $root]); ?>
<br />
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="review-lists">
                <h2><?=$title;?></h2>
<!--                <div class="post-date"><i class="fa fa-calendar"></i> --><?//=date('d-m-Y', $node->updated_at); ?><!--</div>-->
                <div class="node-detail">
                    <?=$node->content;?>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <?= \common\onecms\AdsRightTopWidget::widget(); ?>
            <?= \common\onecms\EventRightWidget::widget(); ?>
            <?= \common\onecms\VideoRightWidget::widget(); ?>
            <?= \common\onecms\ProductBottomTopWidget::widget(); ?>
            <?= \common\onecms\CatalogueBottomTopWidget::widget(); ?>
            <?= \common\onecms\PostBottomTopWidget::widget(); ?>
        </div>
    </div>
</div>
<?= \common\onecms\AdsMiddleCenterWidget::widget(); ?>
<?= \common\onecms\RelatedReviewWidget::widget(['category_id' => $node->category_id, 'node_id' => $node->id]); ?>