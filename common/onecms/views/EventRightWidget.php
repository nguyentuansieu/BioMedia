<div class="panel panel-warning">
    <div class="panel-heading"><i class="fa fa-calendar"></i> <strong>Sự kiện sắp diễn ra</strong></div>
    <div class="panel-body">
        <div class="list-events">
            <?php foreach($nodes as $node): ?>
            <div class="media">
                <h5 class="media-heading"><?=\yii\helpers\Html::a($node->title, ['event/view', 'slug' => $node->slug]);?></h5>
                <div class="media-left">
                    <?=\yii\helpers\Html::a(Yii::$app->imageCache->thumb($node->image, '120x80', ['class'=>'img-responsive']), ['event/view', 'slug' => $node->slug]);?>
                </div>
                <div class="media-body">
                    <p><strong>Thời gian</strong><br />Từ: <?=date('H:i d-m-Y', strtotime($node->start_date));?><br />Đến: <?=date('H:i d-m-Y', strtotime($node->end_date)); ?></p>
                    <p><strong>Địa điểm: </strong> <?=$node->location; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
