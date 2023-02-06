<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use common\models\User;
use yii\web\Controller;
use yii\web\ErrorAction;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use backend\models\TbIndustri;
use yii\captcha\CaptchaAction;
use yii\filters\AccessControl;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\SignupForm2;
use frontend\models\SignupFormPt;
use frontend\models\SignupFormNgo;
use frontend\models\SignupFormDinas;
use frontend\models\VerifyEmailForm;
use yii\web\BadRequestHttpException;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupFormSekolah;
use yii\base\InvalidArgumentException;
use frontend\models\SignupFormIndustri;
use frontend\models\SignupFormOrganisasi;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResendVerificationEmailForm;
use backend\models\Faq;
use backend\models\About;

/**
 * Site controller
 */
class EnglishController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = About::find()->all();
        $modelFaq = Faq::find()->all();

        return $this->render('index', [
            'model' => $model,
            'modelFaq' => $modelFaq,
            // 'modelAbout' => $modelAbout,
        ]);
    }
    // public function actionIndexeng()
    // {
    //     $modelIndexeng = About::find()->all();

    //     return $this->render('indexeng', [
    //         'modelIndexeng' => $modelIndexeng,

    //     ]);
    // }
    public function actionViews1()
    {
        $modelIndexeng = About::find()->all();

        return $this->render('indexeng', [
            'modelIndexeng' => $modelIndexeng,

        ]);
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Url::toRoute(['/profile/index']));
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $modelAbout = About::find()->all();

        return $this->render('about', [
            'modelAbout' => $modelAbout
        ]);
    }

    public function actionColaboration()
    {
        return $this->render('colaboration');
    }

    public function actionFaq()
    {
        $modelFaq = Faq::find()->all();

        return $this->render('faq', [
            'modelFaq' => $modelFaq
        ]);
    }

    public function actionTbIndustri()
    {
        $model = TbIndustri::find()->all();
        return $this->render('TbIndustri', [
            'model' => $model,
        ]);
    }

    public function actionTbSekolah()
    {
        return $this->render('TbSekolah');
    }

    public function actionTbPerguruanTinggi()
    {
        return $this->render('TbPerguruanTinggi');
    }

    public function actionTbDinas()
    {
        return $this->render('TbDinas');
    }

    public function actionTbOrganisasi()
    {
        return $this->render('TbOrganisasi');
    }

    public function actionTbNpo()
    {
        return $this->render('TbNpo');
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        $modelIndustri = new SignupFormIndustri();
        if ($modelIndustri->load(Yii::$app->request->post()) && $modelIndustri->signup_industri()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/login']));
        }

        $modelSekolah = new SignupFormSekolah();
        if ($modelSekolah->load(Yii::$app->request->post()) && $modelSekolah->signup_sekolah()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/login']));
        }

        $modelPt = new SignupFormPt();
        if ($modelPt->load(Yii::$app->request->post()) && $modelPt->signup_pt()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/login']));
        }

        $modelDinas = new SignupFormDinas();
        if ($modelDinas->load(Yii::$app->request->post()) && $modelDinas->signup_dinas()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/login']));
        }

        $modelOrganisasi = new SignupFormOrganisasi();
        if ($modelOrganisasi->load(Yii::$app->request->post()) && $modelOrganisasi->signup_organisasi()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/login']));
        }

        $modelNgo = new SignupFormNgo();
        if ($modelNgo->load(Yii::$app->request->post()) && $modelNgo->signup_ngo()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/login']));
        }

        return $this->render('signup', [
            'model' => $model,
            'modelIndustri' => $modelIndustri,
            'modelSekolah' => $modelSekolah,
            'modelPt' => $modelPt,
            'modelDinas' => $modelDinas,
            'modelOrganisasi' => $modelOrganisasi,
            'modelNgo' => $modelNgo,
        ]);
    }

    public function actionSignupIndustri1()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup_industri()) {
            $cariDataindustri = User::find()
                ->where(['username' => $model->username])
                ->one();
            // print_r($model->username);
            // print_r($cariDataDpl);
            // die();
            $dataindustri = new TbIndustri();
            $dataindustri->id = $cariDataindustri->id;
            $dataindustri->role = 1;
            $dataindustri->id = $model->username;
            $dataindustri->save(false);

            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            // return $this->goHome();
            return $this->redirect(['index']);
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionView($id)
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('view', [
                'model' => $this->findModel($id),
            ]);
        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }
}
