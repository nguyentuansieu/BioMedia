
<?php

?>
<br />
<div class="container">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <i class="fa fa-th-list"></i>
                <strong><?=$title; ?></strong>
            </div>
            <div class="panel-body">
                <div id="nav">
                    <ul class="level0">
                        <?php $depth = 1; foreach($categories as $key => $node): ?>
                            <?php
                            if($depth == $node->depth && $key != 0):
                                echo '</li>';
                            elseif($depth < $node->depth):
                                echo '<ul class="level1">';
                            else:
                                for($i = $depth - $node->depth; $i; $i--):
                                    echo '</ul></li>';
                                endfor;
                            endif;
                            ?>
                            <li class="level0 nav-7 level-top parent">
                            <?=\yii\helpers\Html::a('<span>'.$node->title.'</span>', ['review-category/view', 'slug' => $node->slug]);?>
                        <?php $depth = $node->depth; endforeach; ?>
                        <?php
                        for($i = $depth; $i; $i--):
                            echo '</li></ul>';
                        endfor;
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
