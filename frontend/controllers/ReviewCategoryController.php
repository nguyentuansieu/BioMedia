<?php

namespace frontend\controllers;

use common\models\Review;
use common\models\ReviewCategory;
use yii\data\Pagination;

class ReviewCategoryController extends \yii\web\Controller
{
    public function actionView($slug)
    {
        $model = $this->findModel($slug);
        $categoriesData = $model->leaves()->all();
        $categories = array();
        $categories[] = $model->id;
        if($categoriesData) {
            foreach($categoriesData as $category) {
                $categories[] = $category->id;
            }
        }
        $category_title = $model->title;
        $nodesModel = Review::find()->where(['in', 'category_id', $categories]);
        $count = $nodesModel->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $nodes = $nodesModel->offset($pagination->offset)
            ->limit(5)
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('view', [
            'title' => $category_title,
            'root' => $model->tree,
            'nodes' => $nodes,
            'pagination' => $pagination,
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
        if (($model = ReviewCategory::findOne(['slug' => $slug])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
