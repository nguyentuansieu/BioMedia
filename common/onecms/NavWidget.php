<?php

namespace common\onecms;

use common\models\ReviewCategory;

class NavWidget {
    public static function build($parent_id = null, $depth = 0)
    {
        $categoriesModel = new ReviewCategory();
        $categoriesData = $categoriesModel->find()->where(['parent_id' => $parent_id])->andWhere(['depth' => $depth])->addOrderBy('tree')->addOrderBy('lft')->all();
        return $categoriesData;
    }
}