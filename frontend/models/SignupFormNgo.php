<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupFormNgo extends Model
{
    public $nama;
    public $username;
    public $email;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            ['nama', 'trim'],
            ['nama', 'required'],
            //['nama', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This nama has already been taken.'],
            ['nama', 'string', 'min' => 2, 'max' => 255],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->role = 'superadmin';
        $user->status = 10;

        return $user->save() && $this->sendEmail($user);
    }

    public function signup_industri()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->role = 'industri';
        $user->status = 10;

        return $user->save() && $this->sendEmail($user);
    }
    public function signup_sekolah()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->role = 'sekolah';
        $user->status = 10;

        return $user->save() && $this->sendEmail($user);
    }
    public function signup_pt()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->role = 'PT';
        $user->status = 10;

        return $user->save() && $this->sendEmail($user);
    }
    public function signup_dinas()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->role = 'dinas';
        $user->status = 10;

        return $user->save() && $this->sendEmail($user);
    }
    public function signup_organisasi()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->role = 'organisasi';
        $user->status = 10;

        return $user->save() && $this->sendEmail($user);
    }
    public function signup_NGO()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->role = 'NPO';
        $user->status = 10;

        return $user->save() && $this->sendEmail($user);
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
