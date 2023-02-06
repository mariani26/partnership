<?php

namespace common\models;

use Yii;

use yii\db\ActiveRecord;

use yii\web\IdentityInterface;

use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;

use backend\models\TbIndustri;
use backend\models\TbIndustriEng;
use backend\models\TbDinas;
use backend\models\TbDinasEng;
use backend\models\TbSekolah;
use backend\models\TbSekolahEng;
use backend\models\TbOrganisasi;
use backend\models\TbOrganisasiEng;
use backend\models\TbNpo;
use backend\models\TbNpoEng;
use backend\models\TbPerguruanTinggi;
use backend\models\TbPerguruanTinggiEng;
use backend\models\TbStudentEng;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $verification_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 * 
 * @property \common\models\User[] $user
 * @property \backend\models\TbIndustri[] $alamats
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;

    public $password;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token)
    {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Generates new token for email verification
     */
    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function getAlamats()
    {
        return $this->hasMany(TbIndustri::class, ['id_user' => 'id']);
    }

    public function getAlamatseng()
    {
        return $this->hasMany(TbIndustriEng::class, ['user_id' => 'id']);
    }

    public function getAlamatsklh()
    {
        return $this->hasMany(TbSekolah::class, ['id_user' => 'id']);
    }

    public function getAlamatsklheng()
    {
        return $this->hasMany(TbSekolahEng::class, ['user_id' => 'id']);
    }

    public function getAlamatpti()
    {
        return $this->hasMany(TbPerguruanTinggi::class, ['id_user' => 'id']);
    }

    public function getAlamatptieng()
    {
        return $this->hasMany(TbPerguruanTinggiEng::class, ['user_id' => 'id']);
    }

    public function getAlamatdinass()
    {
        return $this->hasMany(TbDinas::class, ['id_user' => 'id']);
    }

    public function getAlamatdinasseng()
    {
        return $this->hasMany(TbDinasEng::class, ['user_id' => 'id']);
    }

    public function getAlamatorg()
    {
        return $this->hasMany(TbOrganisasi::class, ['id_user' => 'id']);
    }

    public function getAlamatorgeng()
    {
        return $this->hasMany(TbOrganisasiEng::class, ['user_id' => 'id']);
    }

    public function getAlamatn()
    {
        return $this->hasMany(TbNpo::class, ['id_user' => 'id']);
    }

    public function getAlamatneng()
    {
        return $this->hasMany(TbNpoEng::class, ['user_id' => 'id']);
    }

    public function getAlamatstueng()
    {
        return $this->hasMany(TbStudentEng::class, ['user_id' => 'id']);
    }

    public function getAkunuser()
    {
        return $this->hasMany(User::class, ['id']);
    }

    /**
     * @return \backend\models\TbIndustri|null
     * @return \backend\models\TbIndustriEng|null
     * @return \backend\models\TbSekolah|null
     * @return \backend\models\TbSekolahEng|null
     * @return \backend\models\TbPerguruanTinggi|null
     * @return \backend\models\TbDinas|null
     * @return \backend\models\TbOrganisasi|null
     * @return \backend\models\TbNpo|null
     * @return \backend\models\TbStudent|null
     * @author ZPartnership UNP <partnership@gmail.com>
     */

    public function getAlamat(): ?TbIndustri
    {
        $alamat = $this->alamats[0] ?? new TbIndustri();
        $alamat->id_user = $this->id;
        return $alamat;
    }

    public function getAlamateng(): ?TbIndustriEng
    {
        $alamat = $this->alamatseng[0] ?? new TbIndustriEng();
        $alamat->user_id = $this->id;
        return $alamat;
    }

    public function getAlamatsekolah(): ?TbSekolah
    {
        $alamat = $this->alamatsklh[0] ?? new TbSekolah();
        $alamat->id_user = $this->id;
        return $alamat;
    }

    public function getAlamatsekolaheng(): ?TbSekolahEng
    {
        $alamat = $this->alamatsklheng[0] ?? new TbSekolahEng();
        $alamat->user_id = $this->id;
        return $alamat;
    }

    public function getAlamatpt(): ?TbPerguruanTinggi
    {
        $alamat = $this->alamatpti[0] ?? new TbPerguruanTinggi();
        $alamat->id_user = $this->id;
        return $alamat;
    }

    public function getAlamatpteng(): ?TbPerguruanTinggiEng
    {
        $alamat = $this->alamatptieng[0] ?? new TbPerguruanTinggiEng();
        $alamat->user_id = $this->id;
        return $alamat;
    }

    public function getAlamatdinas(): ?TbDinas
    {
        $alamat = $this->alamatdinass[0] ?? new TbDinas();
        $alamat->id_user = $this->id;
        return $alamat;
    }

    public function getAlamatdinaseng(): ?TbDinasEng
    {
        $alamat = $this->alamatdinasseng[0] ?? new TbDinasEng();
        $alamat->user_id = $this->id;
        return $alamat;
    }

    public function getAlamatorganisasi(): ?TbOrganisasi
    {
        $alamat = $this->alamatorg[0] ?? new TbOrganisasi();
        $alamat->id_user = $this->id;
        return $alamat;
    }

    public function getAlamatorganisasieng(): ?TbOrganisasiEng
    {
        $alamat = $this->alamatorgeng[0] ?? new TbOrganisasiEng();
        $alamat->user_id = $this->id;
        return $alamat;
    }

    public function getAlamatnpo(): ?TbNpo
    {
        $alamat = $this->alamatn[0] ?? new TbNpo();
        $alamat->id_user = $this->id;
        return $alamat;
    }

    public function getAlamatnpoeng(): ?TbNpoEng
    {
        $alamat = $this->alamatneng[0] ?? new TbNpoEng();
        $alamat->user_id = $this->id;
        return $alamat;
    }

    public function getAlamatstudenteng(): ?TbStudentEng
    {
        $alamat = $this->alamatstueng[0] ?? new TbStudentEng();
        $alamat->user_id = $this->id;
        return $alamat;
    }

    public function getAkundinas(): ?User
    {
        $alamat = $this->alamats[0] ?? new User();
        //$alamat->id = $this->id;
        return $alamat;
    }


    public function getAkun(): ?User
    {
        $alamat = $this->akunuser[0] ?? new User();
        // $alamat->id = $this->id;
        return $alamat;
    }

    public function currUserId()
    {
        return Yii::$app->user->id;
    }


    public function getImageUrl()
    {
        return self::formatImageUrl($this->foto_profil);
    }

    public static function formatImageUrl($imagePath)
    {
        if ($imagePath) {
            return Yii::$app->params['frontendUrl'] . '/uploads_industri/foto_profil' . $imagePath;
        }

        return Yii::$app->params['frontendUrl'] . '/img/no_img.jpg';
    }
}
