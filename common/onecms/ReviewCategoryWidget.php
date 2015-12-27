<?php

namespace common\onecms;

use common\models\ReviewCategory;
use yii\base\Widget;

class ReviewCategoryWidget extends Widget
{
    public $root;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        $categoryRoot = ReviewCategory::findOne(['tree' => $this->root, 'parent_id' => null]);
        $categoryRootTitle = $categoryRoot->title;
        $categories = ReviewCategory::find()->where(['tree' => $this->root, 'status' => 10])->andWhere(['<>', 'parent_id', ''])->addOrderBy(['tree' => SORT_ASC])->addOrderBy(['lft' => SORT_ASC])->all();
        return $this->render('ReviewCategoryWidget', [
            'title' => $categoryRootTitle,
            'categories' => $categories,
        ]);
    }

}