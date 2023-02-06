<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_dinas".
 *
 * @property int $id
 * @property string $nama_dinas
 * @property string|null $bidang_kerjasama
 * @property string|null $judul_kerjasama
 * @property string|null $jenis_kerjasama
 * @property string|null $no_thn_kerjasama
 * @property string|null $tgl_mulai
 * @property string|null $tgl_akhir
 * @property string|null $dok_mou
 * @property string|null $dok_moa
 * @property string|null $dok_imp
 * @property string|null $inisiator
 * @property string|null $keterangan
 * @property string $email_utama
 * @property string|null $no_telp
 * @property string|null $no_fax
 * @property string|null $website
 * @property string|null $alamat
 * @property string|null $kelurahan
 * @property string|null $kecamatan
 * @property string|null $kota
 * @property string|null $kode_pos
 * @property string|null $rt_rw
 * @property string|null $kontak_person
 * @property string|null $link_maps
 * @property string|null $link_
 * @property string|null $link_instagram
 * @property string|null $link_twitter
 * @property string|null $link_youtube
 * @property int $id_user
 *
 * @property User $user
 */
class TbDinas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_dinas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dinas', 'email_utama', 'id_user'], 'required'],
            [['tgl_mulai', 'tgl_akhir'], 'safe'],
            [['alamat', 'link_maps', 'link_facebook', 'link_instagram', 'link_twitter', 'link_youtube'], 'string'],
            [['id_user'], 'integer'],
            [['nama_dinas', 'bidang_kerjasama', 'judul_kerjasama', 'jenis_kerjasama', 'no_thn_kerjasama', 'dok_mou', 'dok_moa', 'dok_imp', 'inisiator', 'keterangan', 'email_utama', 'website', 'kelurahan', 'kecamatan', 'kota'], 'string', 'max' => 255],
            [['no_telp'], 'string', 'max' => 16],
            [['no_fax', 'kontak_person'], 'string', 'max' => 25],
            [['kode_pos'], 'string', 'max' => 15],
            [['rt_rw'], 'string', 'max' => 10],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_dinas' => 'Nama Dinas',
            'bidang_kerjasama' => 'Bidang Kerjasama',
            'judul_kerjasama' => 'Judul Kerjasama',
            'jenis_kerjasama' => 'Jenis Kerjasama',
            'no_thn_kerjasama' => 'No Thn Kerjasama',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_akhir' => 'Tgl Akhir',
            'dok_mou' => 'Dok Mou',
            'dok_moa' => 'Dok Moa',
            'dok_imp' => 'Dok Imp',
            'inisiator' => 'Inisiator',
            'keterangan' => 'Keterangan',
            'email_utama' => 'Email Utama',
            'no_telp' => 'No Telp',
            'no_fax' => 'No Fax',
            'website' => 'Website',
            'alamat' => 'Alamat',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kota' => 'Kota',
            'kode_pos' => 'Kode Pos',
            'rt_rw' => 'Rt Rw',
            'kontak_person' => 'Kontak Person',
            'link_maps' => 'Link Maps',
            'link_facebook' => 'Link Facebook',
            'link_instagram' => 'Link Instagram',
            'link_twitter' => 'Link Twitter',
            'link_youtube' => 'Link Youtube',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
