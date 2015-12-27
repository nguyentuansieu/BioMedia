<?php
/* @var $this yii\web\View */
$this->title = $title;
?>
<?=\common\onecms\AdsTopCenterWidget::widget(); ?>
<?=\common\onecms\ReviewCategoryWidget::widget(['root' => $root]); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="review-lists">
                <div class="new_title center full">
                    <h2><?=$title;?></h2>
                </div>
                <?php foreach($nodes as $node): ?>

                    <div class="media">
                        <div class="media-left media-middle">
                            <?=\yii\helpers\Html::a(Yii::$app->imageCache->thumb($node->image, '280x150',
                                ['class'=>'media-object']),
                                ['review/view', 'slug' => $node->slug], ['class' => 'thumb flip']); ?>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading"><?=\yii\helpers\Html::a($node->title, ['review/view', 'slug' => $node->slug]);?></h5>
                            <p><?= \yii\helpers\BaseStringHelper::truncateWords(strip_tags($node->content), 50); ?></p>
                        </div>
                    </div>
                <?php endforeach;?>
                <div class="pagi">
                    <?php echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                        'options' => ['class' => 'pagination small']
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <?= \common\onecms\AdsRightTopWidget::widget(); ?>
            <?= \common\onecms\EventRightWidget::widget(); ?>
            <?= \common\onecms\VideoRightWidget::widget(); ?>
        </div>
    </div>
</div>
<?= \common\onecms\AdsMiddleCenterWidget::widget(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <?= \common\onecms\ProductBottomTopWidget::widget(); ?>
        </div>
        <div class="col-lg-4">
            <?= \common\onecms\CatalogueBottomTopWidget::widget(); ?>
        </div>
        <div class="col-lg-4">
            <?= \common\onecms\PostBottomTopWidget::widget(); ?>
        </div>
    </div>
</div>


