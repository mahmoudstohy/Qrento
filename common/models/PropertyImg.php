<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "property_img".
 *
 * @property int $property_img_id
 * @property int $property_id
 * @property string $img
 * @property int $is_cover
 *
 * @property Property $property
 */
class PropertyImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id'], 'required'],
            [['property_id', 'is_cover'], 'integer'],
            [['img'], 'string', 'max' => 100],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Property::className(), 'targetAttribute' => ['property_id' => 'property_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'property_img_id' => 'Property Img ID',
            'property_id' => 'Property ID',
            'img' => 'Images',
            'is_cover' => 'Is Cover',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Property::className(), ['property_id' => 'property_id']);
    }
}
