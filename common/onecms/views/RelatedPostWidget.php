<section class="latest-blog wow bounceInDown animated">
    <div class="container">
        <div class="row">
            <div class="blog-title">
                <h2><span>Các bài viết cùng chủ đề</span></h2>
            </div>
            <?php foreach($nodes as $node): ?>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                    <div class="blog_inner">
                        <div class="blog-img blog-l">
                            <?=\yii\helpers\Html::a(Yii::$app->imageCache->thumb($node->image, '600x400',
                                ['class'=>'img-responsive'])
                                , ['post/view', 'slug' => $node->slug]); ?>
                        </div>
                        <h2><?=\yii\helpers\Html::a($node->title
                                , ['post/view', 'slug' => $node->slug], ['class' => 'info']); ?></h2>

                        <div class="post-date"><i class="fa fa-calendar"></i> <?=date('d-m-Y', $node->updated_at); ?></div>
                        <p><?= \yii\helpers\BaseStringHelper::truncateWords(strip_tags($node->content), 25); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>