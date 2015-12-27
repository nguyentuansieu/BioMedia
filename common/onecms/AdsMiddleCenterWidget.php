<?php

namespace common\onecms;

use common\models\Advertising;
use yii\base\Widget;

class AdsMiddleCenterWidget extends Widget
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        $nodes = Advertising::find()->where(['position' => 'middle_center'])->limit(4)->all();
        return $this->render('AdsMiddleCenterWidget', [
            'nodes' => $nodes,
        ]);
    }
}