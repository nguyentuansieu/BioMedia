<div class="panel panel-warning">
    <div class="panel-heading"><i class="fa fa-shopping-cart"></i> <strong>Sản phẩm - Công nghệ mới</strong></div>
    <div class="panel-body">
        <div class="list-events">
            <?php foreach($nodes as $node): ?>
            <div class="media">
                <div class="media-left">
                    <?=\yii\helpers\Html::a(Yii::$app->imageCache->thumb($node->image, '120x80', ['class'=>'img-responsive']), ['product/view', 'slug' => $node->slug]);?>
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><?=\yii\helpers\Html::a($node->title, ['product/view', 'slug' => $node->slug]);?></h5>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
