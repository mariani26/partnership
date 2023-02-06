<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbIndustri;

/**
 * TbIndustriSearch represents the model behind the search form of `backend\models\TbIndustri`.
 */
class TbIndustriSearch extends TbIndustri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user'], 'integer'],
            [['nama_industri', 'no_identitas', 'identitas_derektur', 'bidang_usaha', 'judul_kerjasama', 'jenis_kerjasama', 'no_thn_kerjasama', 'tgl_mulai', 'tgl_akhir', 'dok_mou', 'dok_moa', 'dok_imp', 'inisiator', 'keterangan', 'email_utama', 'email_cadangan', 'no_telp', 'no_fax', 'website', 'alamat', 'kelurahan', 'kecamatan', 'kota', 'kode_pos', 'rt_rw', 'kontak_person', 'link_maps', 'link_facebook', 'link_instagram', 'link_twitter', 'link_youtube'], 'safe'],
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
        $query = TbIndustri::find();

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
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_akhir' => $this->tgl_akhir,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'nama_industri', $this->nama_industri])
            ->andFilterWhere(['like', 'no_identitas', $this->no_identitas])
            ->andFilterWhere(['like', 'identitas_derektur', $this->identitas_derektur])
            ->andFilterWhere(['like', 'bidang_usaha', $this->bidang_usaha])
            ->andFilterWhere(['like', 'judul_kerjasama', $this->judul_kerjasama])
            ->andFilterWhere(['like', 'jenis_kerjasama', $this->jenis_kerjasama])
            ->andFilterWhere(['like', 'no_thn_kerjasama', $this->no_thn_kerjasama])
            ->andFilterWhere(['like', 'dok_mou', $this->dok_mou])
            ->andFilterWhere(['like', 'dok_moa', $this->dok_moa])
            ->andFilterWhere(['like', 'dok_imp', $this->dok_imp])
            ->andFilterWhere(['like', 'inisiator', $this->inisiator])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'email_utama', $this->email_utama])
            ->andFilterWhere(['like', 'email_cadangan', $this->email_cadangan])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'no_fax', $this->no_fax])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kelurahan', $this->kelurahan])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'rt_rw', $this->rt_rw])
            ->andFilterWhere(['like', 'kontak_person', $this->kontak_person])
            ->andFilterWhere(['like', 'link_maps', $this->link_maps])
            ->andFilterWhere(['like', 'link_facebook', $this->link_facebook])
            ->andFilterWhere(['like', 'link_instagram', $this->link_instagram])
            ->andFilterWhere(['like', 'link_twitter', $this->link_twitter])
            ->andFilterWhere(['like', 'link_youtube', $this->link_youtube]);

        return $dataProvider;
    }
}
