<?php

namespace common\onecms;

use common\models\Event;
use yii\base\Widget;

class EventRightWidget extends Widget
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        $nodes = Event::find()->where(['status' => 10])->limit(2)->all();
        return $this->render('EventRightWidget', [
            'nodes' => $nodes,
        ]);
    }
}