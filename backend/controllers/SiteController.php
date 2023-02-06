<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use backend\models\TbIndustri;
use backend\models\TbSekolah;
use backend\models\TbDinas;
use backend\models\TbPerguruanTinggi;
use backend\models\TbNpo;
use backend\models\TbOrganisasi;
use backend\models\TbIndustriEng;
use backend\models\TbSekolahEng;
use backend\models\TbDinasEng;
use backend\models\TbPerguruanTinggiEng;
use backend\models\TbNpoEng;
use backend\models\TbOrganisasiENg;
use backend\models\TbStudentENg;
use backend\models\User;
use backend\models\Faq;
use backend\models\About;
use backend\models\FaqEng;
use backend\models\AboutEng;

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
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,

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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $DB = Yii::$app->db;
        $role = User::find()->groupBy("role")->all();
        $usr = $DB->createCommand("SELECT *, COUNT(role) AS total FROM `user` GROUP BY role")->queryall();

        $countabout = About::find()->count();
        $countabouteng = AboutEng::find()->count();
        $counttbindustri = TbIndustri::find()->count();
        $counttbsekolah = TbSekolah::find()->count();
        $counttbdinas = TbDinas::find()->count();
        $counttbperguruantinggi = TbPerguruanTinggi::find()->count();
        $counttbnpo = TbNpo::find()->count();
        $counttborganisasi = TbOrganisasi::find()->count();
        $counttbindustrieng = TbIndustriEng::find()->count();
        $counttbsekolaheng = TbSekolahEng::find()->count();
        $counttbdinaseng = TbDinasEng::find()->count();
        $counttbperguruantinggieng = TbPerguruanTinggiEng::find()->count();
        $counttbnpoeng = TbNpoEng::find()->count();
        $counttborganisasieng = TbOrganisasiEng::find()->count();
        $counttbstudenteng = TbStudentEng::find()->count();
        $countuser = User::find()->count();
        $countfaq = Faq::find()->count();
        $countfaqeng = FaqEng::find()->count();

        return $this->render('index', [
            'countabout' => $countabout,
            'countabouteng' => $countabouteng,
            'counttbindustri' => $counttbindustri,
            'counttbsekolah' => $counttbsekolah,
            'counttbdinas' => $counttbdinas,
            'counttbperguruantinggi' => $counttbperguruantinggi,
            'counttbnpo' => $counttbnpo,
            'counttborganisasi' => $counttborganisasi,
            'counttbindustrieng' => $counttbindustrieng,
            'counttbsekolaheng' => $counttbsekolaheng,
            'counttbdinaseng' => $counttbdinaseng,
            'counttbperguruantinggieng' => $counttbperguruantinggieng,
            'counttbnpoeng' => $counttbnpoeng,
            'counttborganisasieng' => $counttborganisasieng,
            'counttbstudenteng' => $counttbstudenteng,
            'countuser' => $countuser,
            'countfaq' => $countfaq,
            'countfaqeng' => $countfaqeng,
            'usr' => $usr,
            'role' => $role
        ]);
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
