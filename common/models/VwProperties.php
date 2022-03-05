<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vw_properties".
 *
 * @property int $property_id
 * @property int $bedroom
 * @property int $bathroom
 * @property string $ac
 * @property string $furnishing
 * @property int $price
 * @property string $description
 * @property string $parking
 * @property string $google_lat
 * @property string $google_lng
 * @property string $created_at
 * @property string $updated_at
 * @property int $status_id
 * @property int $is_pool
 * @property int $is_gym
 * @property int $is_compound
 * @property int $is_cover
 * @property string $property_type_name
 * @property string $location_name
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $agent_user
 * @property string $agent_name
 * @property string $agent_email
 * @property string $agent_mobile
 * @property string $phone
 * @property string $img
 */
class VwProperties extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vw_properties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'bedroom', 'bathroom', 'price', 'status_id', 'is_pool', 'is_gym', 'is_compound', 'is_cover'], 'integer'],
            [['bedroom', 'bathroom', 'ac', 'furnishing', 'price', 'google_lat', 'google_lng', 'created_at', 'updated_at', 'status_id', 'property_type_name', 'location_name'], 'required'],
            [['ac', 'furnishing', 'parking', 'img', 'description'], 'string'],
            [['google_lat', 'google_lng'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['property_type_name'], 'string', 'max' => 11],
            [['location_name'], 'string', 'max' => 30],
            [['username', 'name', 'agent_user', 'agent_name'], 'string', 'max' => 40],
            [['email', 'agent_email'], 'string', 'max' => 50],
            [['mobile', 'agent_mobile', 'phone'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'property_id' => 'Property ID',
            'bedroom' => 'Bedroom',
            'bathroom' => 'Bathroom',
            'ac' => 'Ac',
            'furnishing' => 'Furnishing',
            'price' => 'Price',
            'description' => 'Description',
            'parking' => 'Parking',
            'google_lat' => 'Google Lat',
            'google_lng' => 'Google Lng',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status_id' => 'Status ID',
            'is_pool' => 'Is Pool',
            'is_gym' => 'Is Gym',
            'is_compound' => 'Is Compound',
            'property_type_name' => 'Property Type Name',
            'location_name' => 'Location Name',
            'username' => 'Username',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'agent_user' => 'Agent User',
            'agent_name' => 'Agent Name',
            'agent_email' => 'Agent Email',
            'agent_mobile' => 'Agent Mobile',
            'phone' => 'Phone',
            'img' => 'Image',
        ];
    }
    
    public static function primaryKey()
    {
        return ["property_id"];
    }
}
