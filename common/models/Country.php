<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $country_id
 * @property string $country_name
 * @property string $alpha2
 * @property string $alpha3
 *
 * @property City[] $cities
 * @property Location[] $locations
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_name', 'alpha2', 'alpha3'], 'required'],
            [['country_name'], 'string', 'max' => 50],
            [['alpha2'], 'string', 'max' => 2],
            [['alpha3'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country ID',
            'country_name' => 'Country Name',
            'alpha2' => 'Alpha2',
            'alpha3' => 'Alpha3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['country_id' => 'country_id']);
    }
}
