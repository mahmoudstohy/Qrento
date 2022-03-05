<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "property_type".
 *
 * @property int $property_type_id
 * @property string $property_type_name
 * @property string $description
 * @property string $created_at
 *
 * @property Property[] $properties
 */
class PropertyType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_type_name', 'created_at'], 'required'],
            [['created_at'], 'safe'],
            [['property_type_name'], 'string', 'max' => 11],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'property_type_id' => 'Property Type ID',
            'property_type_name' => 'Property Type Name',
            'description' => 'Description',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperties()
    {
        return $this->hasMany(Property::className(), ['property_type_id' => 'property_type_id']);
    }
}
