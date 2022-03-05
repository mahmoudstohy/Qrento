<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\VwProperties;

/**
 * VwPropertySearch represents the model behind the search form of `common\models\VwProperties`.
 */
class VwPropertySearch extends VwProperties
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'bedroom', 'bathroom', 'price', 'status_id', 'is_pool', 'is_gym', 'is_compound', 'is_cover'], 'integer'],
            [['ac', 'furnishing', 'description', 'parking', 'created_at', 'updated_at', 'property_type_name', 'location_name', 'username', 'name', 'email', 'mobile', 'agent_user', 'agent_name', 'agent_email', 'agent_mobile', 'phone', 'img'], 'safe'],
            [['google_lat', 'google_lng'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = VwProperties::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'property_id' => $this->property_id,
            'bedroom' => $this->bedroom,
            'bathroom' => $this->bathroom,
            'price' => $this->price,
            'google_lat' => $this->google_lat,
            'google_lng' => $this->google_lng,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'status_id' => $this->status_id,
            'is_pool' => $this->is_pool,
            'is_gym' => $this->is_gym,
            'is_compound' => $this->is_compound,
        ]);

        $query->andFilterWhere(['like', 'ac', $this->ac])
            ->andFilterWhere(['like', 'furnishing', $this->furnishing])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'parking', $this->parking])
            ->andFilterWhere(['like', 'property_type_name', $this->property_type_name])
            ->andFilterWhere(['like', 'location_name', $this->location_name])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'agent_user', $this->agent_user])
            ->andFilterWhere(['like', 'agent_name', $this->agent_name])
            ->andFilterWhere(['like', 'agent_email', $this->agent_email])
            ->andFilterWhere(['like', 'agent_mobile', $this->agent_mobile])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
