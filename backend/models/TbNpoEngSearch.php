<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbNpoEng;

/**
 * TbNpoEngSearch represents the model behind the search form of `backend\models\TbNpoEng`.
 */
class TbNpoEngSearch extends TbNpoEng
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['npo_name', 'npo_field', 'collaboration_title', 'type_of_cooperation', 'collaboration_year_number', 'start_date', 'end_date', 'doc_mou', 'doc_moa', 'doc_imp', 'initiator', 'description', 'email', 'phone_number', 'fax_number', 'website', 'address', 'city', 'state', 'country', 'zipcode', 'contact_person', 'map_link', 'facebook_link', 'instagram_link', 'twitter_link', 'youtube_link'], 'safe'],
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
        $query = TbNpoEng::find();

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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'npo_name', $this->npo_name])
            ->andFilterWhere(['like', 'npo_field', $this->npo_field])
            ->andFilterWhere(['like', 'collaboration_title', $this->collaboration_title])
            ->andFilterWhere(['like', 'type_of_cooperation', $this->type_of_cooperation])
            ->andFilterWhere(['like', 'collaboration_year_number', $this->collaboration_year_number])
            ->andFilterWhere(['like', 'doc_mou', $this->doc_mou])
            ->andFilterWhere(['like', 'doc_moa', $this->doc_moa])
            ->andFilterWhere(['like', 'doc_imp', $this->doc_imp])
            ->andFilterWhere(['like', 'initiator', $this->initiator])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'fax_number', $this->fax_number])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'map_link', $this->map_link])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'instagram_link', $this->instagram_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'youtube_link', $this->youtube_link]);

        return $dataProvider;
    }
}
