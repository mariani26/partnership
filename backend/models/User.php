<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string|null $nama
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 * @property string|null $role
 * @property string|null $foto_profil
 * @property int|null $lokasi_pti
 * @property int|null $lokasi_dinas
 * @property string|null $gelar_depan
 * @property string|null $gelar_belakang
 *
 * @property TbDinas[] $tbDinas
 * @property TbIndustri[] $tbIndustris
 * @property TbNpo[] $tbNpos
 * @property TbOrganisasi[] $tbOrganisasis
 * @property TbPerguruanTinggi[] $tbPerguruanTinggis
 * @property TbSekolah[] $tbSekolahs
 */
class User extends \yii\db\ActiveRecord
{
    public $image;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'lokasi_pti', 'lokasi_dinas'], 'integer'],
            [['foto_profil'], 'string'],
            ['image', 'file', 'extensions' => ['png','jpg','gif', 'jpeg'], 'maxSize' => 10 * 1024 * 1024],
            [['username', 'nama', 'password_hash', 'password_reset_token', 'email', 'verification_token', 'role', 'gelar_depan', 'gelar_belakang'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nama' => 'Nama',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'role' => 'Role',
            'foto_profil' => 'Foto Profil',
            'lokasi_pti' => 'Lokasi Pti',
            'lokasi_dinas' => 'Lokasi Dinas',
            'gelar_depan' => 'Gelar Depan',
            'gelar_belakang' => 'Gelar Belakang',
        ];
    }

    /**
     * Gets query for [[TbDinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbDinas()
    {
        return $this->hasMany(TbDinas::class, ['id_user' => 'id']);
    }

    /**
     * Gets query for [[TbIndustris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbIndustris()
    {
        return $this->hasMany(TbIndustri::class, ['id_user' => 'id']);
    }

    /**
     * Gets query for [[TbNpos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbNpos()
    {
        return $this->hasMany(TbNpo::class, ['id_user' => 'id']);
    }

    /**
     * Gets query for [[TbOrganisasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbOrganisasis()
    {
        return $this->hasMany(TbOrganisasi::class, ['id_user' => 'id']);
    }

    /**
     * Gets query for [[TbPerguruanTinggis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbPerguruanTinggis()
    {
        return $this->hasMany(TbPerguruanTinggi::class, ['id_user' => 'id']);
    }

    /**
     * Gets query for [[TbSekolahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbSekolahs()
    {
        return $this->hasMany(TbSekolah::class, ['id_user' => 'id']);
    }
}
