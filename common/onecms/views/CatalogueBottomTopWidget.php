<div class="panel panel-warning">
    <div class="panel-heading"><i class="fa fa-book"></i> <strong>Tạp chí / Catalogue</strong></div>
    <div class="panel-body">
        <div class="list-events">
            <?php foreach($nodes as $node): ?>
            <div class="media">
                <div class="media-left">
                    <?=\yii\helpers\Html::a(Yii::$app->imageCache->thumb($node->image, '120x80', ['class'=>'img-responsive']), ['catalogue/view', 'slug' => $node->slug]);?>
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><?=\yii\helpers\Html::a($node->title, ['catalogue/view', 'slug' => $node->slug]);?></h5>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
