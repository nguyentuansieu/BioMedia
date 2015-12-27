<?php

namespace backend\controllers;

use common\models\Advertising;
use common\models\Catalogue;
use common\models\Event;
use common\models\Post;
use Yii;
use yii\web\Controller;
use common\onecms\SimpleHtmlDom;

class FakeController extends Controller {
    public function actionCreate($url)
    {
        $html = SimpleHtmlDom::file_get_html($url);
        foreach($html->find('ul[id="news_home"] li') as $item) {
            $model = new Post();
            $image = str_replace('_240x144', null, $item->find('img', 0)->src);
            $model['category_id'] = 1;
            $model['title'] = trim($item->find('a[class="title_tin"]', 0)->plaintext);

            $detail = $item->find('a[class="title_tin"]', 0)->href;
            $html_detail = SimpleHtmlDom::file_get_html($detail);
            if($html_detail->find('p[class="lead"]', 0)):
                $model['image'] = $this->saveImage($image);
                $summary = $html_detail->find('p[class="lead"]', 0)->plaintext;
                $content = strip_tags($html_detail->find('div[class="fck_detail width_common"]',0)->innertext, '<img><strong><br /><br><p>');
                $model['content'] = $summary . $content;
                $model->save();
            endif;
        }
    }

    function saveImage($urlImage) {
        $tmpImage = file_get_contents($urlImage);
        $pathUpload = '/vagrant/biomedia/frontend/web/uploads/demo/post/';
        $nameImage = uniqid().'.jpg';
        $pathImage = '/uploads/demo/post/'.$nameImage;
        $thumbImage = $pathUpload . $nameImage;
        file_put_contents($thumbImage, $tmpImage);
        return $pathImage;
    }

    public function actionBanner() {
        $model = new Advertising();
        $model['title'] = 'Bio Media t4';
        $model['advertiser_id'] = 1;
        $model['image'] = '/uploads/demo/ads/t4.png';
        $model['url'] = '#';
        $model['position'] = 'top_center';
        $model['position_detail'] = json_encode([
            'controller' => 'site',
            'action' => 'index',
            'id' => null,
        ]);
        if($model->save()) {
            echo 'Ok';
        }
    }

    public function actionEvent() {
        $model = new Event();
        $model['title'] = 'Hội thảo Khoa học bệnh Melioidosis tại Việt Nam lần I';
        $model['category_id'] = 1;
        $model['image'] = '/uploads/demo/event/Poster-Hoi-nghi-Vien-VSV2.jpg';
        $model['content'] = 'Melioidosis (hay còn gọi là bệnh Whitmore) là bệnh truyền nhiễm cấp tính nguy hiểm do loài vi khuẩn Burkholderia pseudomallei sống ở trong đất gây nên. Melioidosis có bệnh cảnh lâm sàng đa dạng, tiến triển nhanh và có nguy cơ dẫn đến tử vong cao, với tỷ lệ tử vong trên 50% nếu bệnh nhân không được chẩn đoán sớm và điều trị kháng sinh kịp thời. Từ lâu, Việt Nam được coi là một nước nằm trong vùng có nguy cơ nhiễm bệnh melioidosis cao nhưng thông tin dịch tễ học về tỷ lệ người mắc bệnh gần như không có. Nhiều bác sỹ và cán bộ xét nghiệm vi sinh lâm sàng tại các bệnh viện tuyến vẫn còn chưa để ý và chưa có nhiều kinh nghiệm phản xạ với các ca nhiễm bệnh. Nhằm nâng cao tinh thần cảnh giác trong xét nghiệm, chẩn đoán và điều trị bệnh melioidosis, cũng như cung cấp các kiến thức mới nhất về tình hình dịch bệnh trong nước và trên Thế giới, Viện Vi sinh vật và Công nghệ Sinh học – Đại học Quốc gia Hà Nội tiến hành tổ chức "Hội thảo Khoa học bệnh Melioidosis tại Việt Nam lần thứ 1" với chủ đề "Nâng cao cảnh giác trong xét nghiệm, chẩn đoán và điều trị bệnh melioidosis". Hội thảo có sự tham gia báo cáo của 05 chuyên gia Quốc tế nghiên cứu chuyên sâu về bệnh melioidosis tại các vùng dịch bệnh trên Thế giới và 05 báo cáo viên trong nước.';
        $model['start_date'] = date('Y-m-d H:i:s', time());
        $model['end_date'] = date('Y-m-d H:i:s', time());
        $model['location'] = 'Phòng Hội thảo tầng 1, Tòa nhà ULIS – SUNWAH, Đại học Quốc gia Hà Nội - 144 – Xuân Thủy, Cầu Giấy, Hà Nội';
        $model['status'] = 10;
        if($model->save()) {
            echo 'Ok';
        }
    }

    /**
     * Finds the Page model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Page the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Advertising::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}