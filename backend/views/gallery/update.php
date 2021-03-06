<?php

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Gallery',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="box gallery-update">
    <?= $this->render('_form', [
        'model' => $model,
        'treeParents' => $treeParents,
    ]) ?>
</div>
