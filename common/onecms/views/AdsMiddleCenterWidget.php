<div class="promo-banner-section wow bounceInUp animated">
    <div class="container">
        <div class="row">
            <?php foreach($nodes as $node): ?>
                <div class="col-lg-3"><p><?=\yii\helpers\Html::a(Yii::$app->imageCache->thumb($node->image, '350x120', ['class'=>'img-responsive']), $node->url);?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</div>