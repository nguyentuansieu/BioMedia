<?php

namespace frontend\controllers;

use common\models\Event;

class EventController extends \yii\web\Controller
{
    public function actionView($slug)
    {
        $model = $this->findModel($slug);
        return $this->render('view', [
            'title' => $model->title,
            'node' => $model,
        ]);
    }
    /**
     * Finds the ReviewCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $slug
     * @return ReviewCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($slug)
    {
        if (($model = Event::findOne(['slug' => $slug])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
