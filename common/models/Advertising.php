<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advertising".
 *
 * @property integer $id
 * @property integer $advertiser_id
 * @property string $title
 * @property string $image
 * @property string $url
 * @property string $start_date
 * @property string $end_date
 * @property string $position
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 */
class Advertising extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advertising';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['advertiser_id', 'title', 'image', 'position'], 'required'],
            [['advertiser_id', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['position'], 'string'],
            [['title', 'image', 'url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'advertiser_id' => Yii::t('backend', 'Advertiser ID'),
            'title' => Yii::t('backend', 'Title'),
            'image' => Yii::t('backend', 'Image'),
            'url' => Yii::t('backend', 'Url'),
            'start_date' => Yii::t('backend', 'Start Date'),
            'end_date' => Yii::t('backend', 'End Date'),
            'position' => Yii::t('backend', 'Position'),
            'created_by' => Yii::t('backend', 'Created By'),
            'updated_by' => Yii::t('backend', 'Updated By'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return AdvertisingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdvertisingQuery(get_called_class());
    }
}
