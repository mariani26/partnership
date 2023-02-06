<?php

namespace backend\controllers;

use backend\models\User;
use backend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\helpers\Url;
use backend\models\TbIndustri;
use backend\models\SignupForm;
use backend\models\SignupFormPt;
use backend\models\SignupFormDinasEng;
use backend\models\SignupFormDinas;
use backend\models\SignupFormIndustri;
use backend\models\SignupFormIndustriEng;
use backend\models\SignupFormPtEng;
use backend\models\SignupFormOrganisasi;
use backend\models\SignupFormOrganisasiEng;
use backend\models\SignupFormSekolah;
use backend\models\SignupFormSekolahEng;
use backend\models\SignupFormNgo;
use backend\models\SignupFormNgoEng;
use backend\models\SignupFormStudentEng;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        // 'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $user = User::find()->all();


        // $sort = new yii\data\Sort([
        //     'atributes' => [
        //         'username',
        //         'role',
        //     ]
        // ])
        // $models = User::find()
        //     ->where(['role'=> 'admin'])
        //     ->orderBy($sort->orders)
        //     ->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'user' => $user,
            // 'models' => $models,
            // 'sort' => $sort,
        ]);
    }

    public function actionIndustri()
    {
        $modelindustri = new User();
        $searchIndustri = $modelindustri->find()->where(['role' => 'admin'])->all();

        return $this->render('industri', [
            'modelindustri' => $modelindustri,
            'searchIndustri' => $searchIndustri,
        ]);
    }

    /**
     * Displays a single User model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionSignupAdmin()
    {
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup_admin()) {
            Yii::$app->session->setFlash('success', 'Thank you for regisration. Please check your inbox for verifycation.');
            // return $this->goHome();
            return $this->redirect('index');
        }

        $modeleng = new SignupForm();
        if ($modeleng->load(Yii::$app->request->post()) && $modeleng->signup_admineng()) {
            Yii::$app->session->setFlash('success', 'Thank you for regisration. Please check your inbox for verifycation.');
            // return $this->goHome();
            return $this->redirect('index');
        }



        return $this->render('signup-admin', [
            // 'modeleng' => $this->findModel($id),
            'model' => $model,
            'modeleng' => $modeleng,
        ]);
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
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelSekolah = new SignupFormSekolah();
        if ($modelSekolah->load(Yii::$app->request->post()) && $modelSekolah->signup_sekolah()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelPt = new SignupFormPt();
        if ($modelPt->load(Yii::$app->request->post()) && $modelPt->signup_pt()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelDinas = new SignupFormDinas();
        if ($modelDinas->load(Yii::$app->request->post()) && $modelDinas->signup_dinas()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelOrganisasi = new SignupFormOrganisasi();
        if ($modelOrganisasi->load(Yii::$app->request->post()) && $modelOrganisasi->signup_organisasi()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelNgo = new SignupFormNgo();
        if ($modelNgo->load(Yii::$app->request->post()) && $modelNgo->signup_ngo()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
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
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelSekolahEng = new SignupFormSekolahEng();
        if ($modelSekolahEng->load(Yii::$app->request->post()) && $modelSekolahEng->signup_sekolaheng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelPtEng = new SignupFormPtEng();
        if ($modelPtEng->load(Yii::$app->request->post()) && $modelPtEng->signup_pteng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelDinasEng = new SignupFormDinasEng();
        if ($modelDinasEng->load(Yii::$app->request->post()) && $modelDinasEng->signup_dinaseng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelOrganisasiEng = new SignupFormOrganisasiEng();
        if ($modelOrganisasiEng->load(Yii::$app->request->post()) && $modelOrganisasiEng->signup_organisasieng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelNgoEng = new SignupFormNgoEng();
        if ($modelNgoEng->load(Yii::$app->request->post()) && $modelNgoEng->signup_ngoeng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
        }

        $modelStudentEng = new SignupFormStudentEng();
        if ($modelStudentEng->load(Yii::$app->request->post()) && $modelStudentEng->signup_studenteng()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['user/index']));
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(\Yii::$app->request->post())) {
            $model->image = \yii\web\UploadedFile::getInstance($model, 'foto_profil');
            if ($model->validate()) {
                $saveTo = 'uploads_user/' . $model->image->baseName . '.' . $model->image->extension;
                if ($model->image->saveAs($saveTo)) {
                    $model->foto_profil = $model->image->baseName . '.' . $model->image->extension;
                    $model->save(false);
                    Yii::$app->session->setFlash('success', 'Foto Profil berhasil diupload');

                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
