<div class="bag-product-slider small-pr-slider  wow bounceInLeft animated">
    <div class="slider-items-products">
        <div class="new_title center">
            <h2>Tin tức Công nghệ</h2>
        </div>
        <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col3">
                <?php foreach($nodes as $node): ?>
                    <div class="item">
                        <div class="col-item">
                            <div class="item-inner">
                                <div class="product-wrapper">
                                    <div class="thumb-wrapper">
                                        <?=\yii\helpers\Html::a('<span class="face">'
                                            . Yii::$app->imageCache->thumb($node->image, '165x120', ['class'=>'img-responsive']) .
                                            '</span><span class="face back">'
                                            . Yii::$app->imageCache->thumb($node->image, '165x120', ['class'=>'img-responsive']) .'</span>'
                                            , ['post/view', 'slug' => $node->slug], ['class' => 'thumb flip']); ?>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><?=\yii\helpers\Html::a($node->title, ['post/view', 'slug' => $node->slug]);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>