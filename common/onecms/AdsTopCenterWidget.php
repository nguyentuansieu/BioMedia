<?php

namespace common\onecms;

use common\models\Advertising;
use yii\base\Widget;

class AdsTopCenterWidget extends Widget
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        $nodes = Advertising::find()->where(['position' => 'top_center', 'status' => 10])->all();
        return $this->render('AdsTopCenterWidget', [
            'nodes' => $nodes,
        ]);
    }
}