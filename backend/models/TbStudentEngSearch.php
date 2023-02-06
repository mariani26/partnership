<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbStudentEng;

/**
 * TbStudentEngSearch represents the model behind the search form of `backend\models\TbStudentEng`.
 */
class TbStudentEngSearch extends TbStudentEng
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['name', 'date_of_birth', 'gender', 'address', 'city', 'state', 'country', 'zipcode', 'major', 'original_college', 'email', 'phone_number', 'application_letter', 'biodata', 'photo', 'certificate', 'passport', 'financial_guarantee_letter', 'health_certificate', 'statement_letter', 'campus_recommendation_letter', 'achievement'], 'safe'],
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
        $query = TbStudentEng::find();

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
            'id' => $this->id,
            'date_of_birth' => $this->date_of_birth,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'major', $this->major])
            ->andFilterWhere(['like', 'original_college', $this->original_college])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'application_letter', $this->application_letter])
            ->andFilterWhere(['like', 'biodata', $this->biodata])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'certificate', $this->certificate])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'financial_guarantee_letter', $this->financial_guarantee_letter])
            ->andFilterWhere(['like', 'health_certificate', $this->health_certificate])
            ->andFilterWhere(['like', 'statement_letter', $this->statement_letter])
            ->andFilterWhere(['like', 'campus_recommendation_letter', $this->campus_recommendation_letter])
            ->andFilterWhere(['like', 'achievement', $this->achievement]);

        return $dataProvider;
    }
}
