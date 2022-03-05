<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "property".
 *
 * @property int $property_id
 * @property int $user_id
 * @property int $agent_id
 * @property int $property_type_id
 * @property int $location_id
 * @property int $bedroom
 * @property int $bathroom
 * @property string $ac
 * @property string $furnishing
 * @property int $price
 * @property string $description
 * @property int $is_pool
 * @property int $is_gym
 * @property string $parking
 * @property int $is_compound
 * @property string $google_lat
 * @property string $google_lng
 * @property string $created_at
 * @property string $updated_at
 * @property int $status_id
 *
 * @property PropertyType $propertyType
 * @property Location $location
 * @property User $user
 * @property Agent $agent
 * @property PropertyImg[] $propertyImgs
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'property';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'agent_id', 'property_type_id', 'location_id', 'bedroom', 'bathroom', 'price', 'is_pool', 'is_gym', 'is_compound', 'status_id'], 'integer'],
            [['property_type_id', 'location_id', 'bedroom', 'bathroom', 'ac', 'furnishing', 'price', 'google_lat', 'google_lng', 'created_at', 'updated_at', 'status_id'], 'required'],
            [['ac', 'furnishing', 'parking', 'description'], 'string'],
            [['google_lat', 'google_lng'], 'number'],
            [['created_at', 'updated_at', 'description'], 'safe'],
            [['property_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyType::className(), 'targetAttribute' => ['property_type_id' => 'property_type_id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['agent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agent::className(), 'targetAttribute' => ['agent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'property_id' => 'Property ID',
            'user_id' => 'User ID',
            'agent_id' => 'Agent ID',
            'property_type_id' => 'Property Type',
            'location_id' => 'Location',
            'bedroom' => 'Bedroom',
            'bathroom' => 'Bathroom',
            'ac' => 'Ac',
            'furnishing' => 'Furnishing',
            'price' => 'Price QR / Month',
            'description' => 'Description',
            'is_pool' => 'Pool',
            'is_gym' => 'Gym',
            'parking' => 'Parking',
            'is_compound' => 'Compound',
            'google_lat' => 'Google Lat',
            'google_lng' => 'Google Lng',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyType()
    {
        return $this->hasOne(PropertyType::className(), ['property_type_id' => 'property_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['location_id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgent()
    {
        return $this->hasOne(Agent::className(), ['id' => 'agent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyImgs()
    {
        return $this->hasMany(PropertyImg::className(), ['property_id' => 'property_id']);
    }
}
