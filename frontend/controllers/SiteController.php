<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use backend\models\Faq;
//use backend\models\User;
use common\models\User;
use yii\web\Controller;
use yii\web\ErrorAction;
use backend\models\About;
use backend\models\AboutEng;
use backend\models\Choose;
use backend\models\ChooseEng;

use backend\models\FaqEng;
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
use frontend\models\TbIndustriEng;
use frontend\models\SignupFormDinas;
use frontend\models\SignupFormPtEng;
use frontend\models\VerifyEmailForm;
use yii\web\BadRequestHttpException;
use frontend\models\SignupFormNgoEng;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupFormSekolah;
use frontend\models\SignupFormStudent;
use yii\base\InvalidArgumentException;
use frontend\models\SignupFormDinasEng;
use frontend\models\SignupFormIndustri;
use frontend\models\SignupFormOrganisasi;
use frontend\models\SignupFormSekolahEng;
use frontend\models\SignupFormStudentEng;
use frontend\models\SignupFormIndustriEng;
use frontend\models\SignupFormOrganisasiEng;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResendVerificationEmailForm;

/**
 * Site controller
 */
class SiteController extends Controller
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
                        'actions' => ['signup', 'signupeng'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'logouteng'],
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
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
        $model = About::find()->all();
        $modelFaq = Faq::find()->all();
        $modelChoose = Choose::find()->all();
        $modelTbIndustri = TbIndustri::find()->all();


        return $this->render('index', [
            'model' => $model,
            'modelFaq' => $modelFaq,
            'modelChoose' => $modelChoose,
            'modelTbIndustri' => $modelTbIndustri,
        ]);
        // return $this->render('index');
    }
    public function actionIndexeng()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'english');
        } else {
            $session->set('bahasa', 'english');
        }
        $modelFaqeng = FaqEng::find()->all();
        $modelAbouteng = AboutEng::find()->all();
        $modelChooseeng = ChooseEng::find()->all();

        return $this->render('indexeng', [
            'modelAbouteng' => $modelAbouteng,
            'modelChooseeng' => $modelChooseeng,
            'modelFaqeng' => $modelFaqeng,
        ]);
        // echo $session->get('bahasa');die;
        //return $this->render('indexeng');
    }

    // public function actionIndex()
    // {
    //     $model = About::find()->all();
    //     $modelFaq = Faq::find()->all();
    //     $modelTbIndustri = TbIndustri::find()->all();

    //     return $this->render('index', [
    //         'model' => $model,
    //         'modelFaq' => $modelFaq,
    //         'modelTbIndustri' => $modelTbIndustri,
    //     ]);
    // }
    // public function actionIndexeng()
    // {
    //     $modelIndexeng = About::find()->all();

    //     return $this->render('indexeng', [
    //         'modelIndexeng' => $modelIndexeng,

    //     ]);
    // }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
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

    public function actionLogineng()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'english');
        } else {
            $session->set('bahasa', 'english');
        }
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Url::toRoute(['/profile/indexeng']));
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
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionLogouteng()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'english');
        } else {
            $session->set('bahasa', 'english');
        }
        Yii::$app->user->logout();

        return $this->redirect(Url::toRoute(['/site/indexeng']));
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
    public function actionContacteng()
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

        return $this->render('contacteng', [
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


    public function actionAbouteng()
    {
        $modelAboutEng = AboutEng::find()->all();

        return $this->render('abouteng', [
            'modelAboutEng' => $modelAboutEng
        ]);
    }
    public function actionFaqeng()
    {
        $modelFaqEng = FaqEng::find()->all();

        return $this->render('faqeng', [
            'modelFaqEng' => $modelFaqEng
        ]);
    }
    public function actionProfil()
    {
        $modelUser = User::find()->all();

        return $this->render('user', [
            'modelUser' => $modelUser
        ]);
    }

    public function actionColaboration()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
        return $this->render('colaboration');
    }

    public function actionColaborationeng()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'english');
        } else {
            $session->set('bahasa', 'english');
        }
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
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
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

    public function actionTbIndustriEng()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'english');
        } else {
            $session->set('bahasa', 'english');
        }
        $model = TbIndustriEng::find()->all();
        return $this->render('TbIndustriEng', [
            'model' => $model,
        ]);
    }

    public function actionTbSekolahEng()
    {
        return $this->render('TbSekolahEng');
    }

    public function actionTbPerguruanTinggiEng()
    {
        return $this->render('TbPerguruanTinggiEng');
    }

    public function actionTbDinasEng()
    {
        return $this->render('TbDinasEng');
    }

    public function actionTbOrganisasiEng()
    {
        return $this->render('TbOrganisasiEng');
    }

    public function actionTbNpoEng()
    {
        return $this->render('TbNpoEng');
    }



    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
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

        // $modelStudent = new SignupFormStudent();
        // if ($modelStudent->load(Yii::$app->request->post()) && $modelStudent->signup_student()) {
        //     Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
        //     return $this->goHome();
        // }



        return $this->render('signup', [
            'model' => $model,
            'modelIndustri' => $modelIndustri,
            'modelSekolah' => $modelSekolah,
            'modelPt' => $modelPt,
            'modelDinas' => $modelDinas,
            'modelOrganisasi' => $modelOrganisasi,
            'modelNgo' => $modelNgo,
            //'modelStudent' => $modelStudent,

        ]);
    }
    public function actionSignupeng()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'english');
        } else {
            $session->set('bahasa', 'english');
        }

        $modelIndustriEng = new SignupFormIndustriEng();
        if ($modelIndustriEng->load(Yii::$app->request->post()) && $modelIndustriEng->signup_industrieng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/logineng']));
        }

        $modelSekolahEng = new SignupFormSekolahEng();
        if ($modelSekolahEng->load(Yii::$app->request->post()) && $modelSekolahEng->signup_sekolaheng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/logineng']));
        }

        $modelPtEng = new SignupFormPtEng();
        if ($modelPtEng->load(Yii::$app->request->post()) && $modelPtEng->signup_pteng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/logineng']));
        }

        $modelDinasEng = new SignupFormDinasEng();
        if ($modelDinasEng->load(Yii::$app->request->post()) && $modelDinasEng->signup_dinaseng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/logineng']));
        }

        $modelOrganisasiEng = new SignupFormOrganisasiEng();
        if ($modelOrganisasiEng->load(Yii::$app->request->post()) && $modelOrganisasiEng->signup_organisasieng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/logineng']));
        }

        $modelNgoEng = new SignupFormNgoEng();
        if ($modelNgoEng->load(Yii::$app->request->post()) && $modelNgoEng->signup_ngoeng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/logineng']));
        }

        $modelStudentEng = new SignupFormStudentEng();
        if ($modelStudentEng->load(Yii::$app->request->post()) && $modelStudentEng->signup_studenteng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['/site/logineng']));
        }

        return $this->render('signupeng', [
            //'modelStudent' => $modelStudent,
            'modelIndustriEng' => $modelIndustriEng,
            'modelSekolahEng' => $modelSekolahEng,
            'modelPtEng' => $modelPtEng,
            'modelDinasEng' => $modelDinasEng,
            'modelOrganisasiEng' => $modelOrganisasiEng,
            'modelNgoEng' => $modelNgoEng,
            'modelStudentEng' => $modelStudentEng,
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
