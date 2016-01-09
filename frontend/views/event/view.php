<?php
/* @var $this yii\web\View */
$this->title = $title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6 noleft">
            <?=\common\onecms\AdsTopCenterLeftWidget::widget(); ?>
        </div>
        <div class="col-lg-6 noright">
            <?=\common\onecms\AdsTopCenterRightWidget::widget(); ?>
        </div>
    </div>
</div>
<br />
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="review-lists">
                <h2 class="node-title"><?=$title;?></h2>
                <div class="node-share">
                    <div class="fb-like" data-href="<?=Yii::$app->request->absoluteUrl; ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
                    <div class="pull-right">
                        <div class="g-plusone" data-size="medium" data-annotation="none" data-href="<?=Yii::$app->request->absoluteUrl; ?>"></div>
                        <div class="pull-right">
                            &nbsp;
                            <div class="fb-send" data-href="<?=Yii::$app->request->absoluteUrl; ?>"></div>
                        </div>
                    </div>
                </div>
                <div class="node-detail">
                    <span class="biomedia">BioMedia</span><?=$node->content;?>
                </div>
                <div class="node-share">
                    <div class="fb-like" data-href="<?=Yii::$app->request->absoluteUrl; ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
                    <div class="pull-right">
                        <div class="g-plusone" data-size="medium" data-annotation="none" data-href="<?=Yii::$app->request->absoluteUrl; ?>"></div>
                        <div class="pull-right">
                            &nbsp;
                            <div class="fb-send" data-href="<?=Yii::$app->request->absoluteUrl; ?>"></div>
                        </div>
                    </div>
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