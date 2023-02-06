<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\UploadForm;
use backend\models\TbIndustri;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;
//use \frontend\base\Controller;


/**
 * Class ProfileController
 *
 * @author
 * @package frontend\controllers
 */

class ProfileController extends \frontend\base\Controller
{
    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                //'only' => ['index', 'updated-alamat', 'update-akun'],
                'rules' => [
                    [
                        'actions' => [
                            'index', 'indexeng', 'akun', 'akuneng', 'update-alamat', 'update-alamatsekolah', 'update-alamatpt',
                            'update-alamatdinas',
                            'update-alamatorganisasi', 'profil',
                            'update-alamatnpo', 'update-dok',
                            'update-doksekolah', 'update-dokpt', 'update-dokdinas', 'update-dokorganisasi',
                            'update-doknpo',
                            'update-akun',
                            'update-akunsekolah', 'update-akunpt', 'update-akundinas', 'update-akunorganisasi', 'update-akunnpo',

                            'update-alamateng', 'update-alamatsekolaheng', 'update-alamatpteng',
                            'update-alamatdinaseng',
                            'update-alamatorganisasieng',
                            'update-alamatstudenteng',
                            'update-alamatnpoeng', 'update-doceng',
                            'update-docsekolaheng', 'update-docpteng', 'update-docdinaseng', 'update-docorganisasieng',
                            'update-docnpoeng', 'update-docstudenteng',
                            'update-akuneng',
                            'update-akunsekolahengeng', 'update-akunpteng', 'update-akundinaseng', 'update-akunorganisasieng', 'update-akunnpoeng', 'update-akunstudenteng',
                        ],
                        'allow' => true,
                        'roles' => ['@'],
                    ]

                ],

            ],

        ];
    }

    public function actionIndex()
    {
        /** @var \common\models\User $user */
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'indonesia');
        } else {
            $session->set('bahasa', 'indonesia');
        }
        $user = Yii::$app->user->identity;
        //$tbIndustris = $user->alamats;
        $tbIndustri = $user->getAlamat();
        $tbSekolah = $user->getAlamatsekolah();
        $tbPerguruanTinggi = $user->getAlamatpt();
        $tbDinas = $user->getAlamatdinas();
        $tbOrganisasi = $user->getAlamatorganisasi();
        $tbNpo = $user->getAlamatnpo();
        //$tbIndustri->user_id = $user->id;
        return $this->render('index', [
            'user' => $user,
            'tbIndustri' => $tbIndustri,
            'tbSekolah' => $tbSekolah,
            'tbPerguruanTinggi' => $tbPerguruanTinggi,
            'tbDinas' => $tbDinas,
            'tbOrganisasi' => $tbOrganisasi,
            'tbNpo' => $tbNpo,

        ]);
    }

    public function actionIndexeng()
    {
        /** @var \common\models\User $user */
        $session = Yii::$app->session;
        if ($session->has('bahasa')) {
            $session->remove('bahasa');
            $session->set('bahasa', 'english');
        } else {
            $session->set('bahasa', 'english');
        }

        $user = Yii::$app->user->identity;
        //$tbIndustris = $user->alamats;
        $tbIndustriEng = $user->getAlamateng();
        $tbSekolahEng = $user->getAlamatsekolaheng();
        $tbPerguruanTinggiEng = $user->getAlamatpteng();
        $tbDinasEng = $user->getAlamatdinaseng();
        $tbOrganisasiEng = $user->getAlamatorganisasieng();
        $tbNpoEng = $user->getAlamatnpoeng();
        $tbStudentEng = $user->getAlamatstudenteng();
        //$tbIndustri->user_id = $user->id;
        return $this->render('index', [
            'user' => $user,
            'tbIndustriEng' => $tbIndustriEng,
            'tbSekolahEng' => $tbSekolahEng,
            'tbPerguruanTinggiEng' => $tbPerguruanTinggiEng,
            'tbDinasEng' => $tbDinasEng,
            'tbOrganisasiEng' => $tbOrganisasiEng,
            'tbNpoEng' => $tbNpoEng,
            'tbStudentEng' => $tbStudentEng,

        ]);
    }

    public function actionAkun()
    {
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        //$tbIndustris = $user->alamats;
        //$user = $user->getAlamat();
        //$tbIndustri->user_id = $user->id;
        return $this->render('akun', [
            'user' => $user,
            //'tbIndustri' => $tbIndustri
        ]);
    }
    public function actionAkuneng()
    {
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        //$tbIndustris = $user->alamats;
        //$user = $user->getAlamat();
        //$tbIndustri->user_id = $user->id;
        return $this->render('akun', [
            'user' => $user,
            //'tbIndustri' => $tbIndustri
        ]);
    }
    public function actionProfil()
    {
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        //$tbIndustris = $user->alamats;
        //$user = $user->getAlamat();
        //$tbIndustri->user_id = $user->id;
        return $this->render('profil', [
            'user' => $user,
            //'tbIndustri' => $tbIndustri
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
    public  function actionUpdateAlamat()
    {

        /** @var \backend\models\TbIndustri $tbIndustri */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbIndustri = $user->getAlamat();
        $success = false;
        if ($tbIndustri->load(Yii::$app->request->post()) && $tbIndustri->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbIndustri' => $tbIndustri,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatsekolah()
    {

        /** @var \backend\models\TbSekolah $tbSekolah */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbSekolah = $user->getAlamatsekolah();
        $success = false;
        if ($tbSekolah->load(Yii::$app->request->post()) && $tbSekolah->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbSekolah' => $tbSekolah,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatpt()
    {

        /** @var \backend\models\TbPerguruanTinggi $tbPerguruanTinggi */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbPerguruanTinggi = $user->getAlamatpt();
        $success = false;
        if ($tbPerguruanTinggi->load(Yii::$app->request->post()) && $tbPerguruanTinggi->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbPerguruanTinggi' => $tbPerguruanTinggi,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatdinas()
    {

        /** @var \backend\models\TbDinas $tbDinas */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbDinas = $user->getAlamatdinas();
        $success = false;
        if ($tbDinas->load(Yii::$app->request->post()) && $tbDinas->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbDinas' => $tbDinas,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatorganisasi()
    {

        /** @var \backend\models\TbOrganisasi $tbSekolah */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbOrganisasi = $user->getAlamatorganisasi();
        $success = false;
        if ($tbOrganisasi->load(Yii::$app->request->post()) && $tbOrganisasi->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbOrgani$tbOrganisasi' => $tbOrganisasi,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatnpo()
    {

        /** @var \backend\models\TbNpo $tbNpo */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbNpo = $user->getAlamatnpo();
        $success = false;
        if ($tbNpo->load(Yii::$app->request->post()) && $tbNpo->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbNpo' => $tbNpo,
            'success' => $success
        ]);
    }



    public  function actionUpdateDok()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbIndustri $tbIndustri */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbIndustri = $user->getAlamat();
        $success = false;
        if ($tbIndustri->load(Yii::$app->request->post())) {
            $success = true;
            $tbIndustri->save(false);

            $tbIndustri->dok_mou = UploadedFile::getInstance($tbIndustri, 'dok_mou');
            $tbIndustri->dok_moa = UploadedFile::getInstance($tbIndustri, 'dok_moa');
            $tbIndustri->dok_imp = UploadedFile::getInstance($tbIndustri, 'dok_imp');
            if ($tbIndustri->dok_mou) {
                $tbIndustri->dok_mou->saveAs('../../backend/web/uploads_industri/mou/' . $tbIndustri->dok_mou->baseName . '.' . $tbIndustri->dok_mou->extension);
                $tbIndustri->dok_mou = $tbIndustri->dok_mou->baseName . '.' . $tbIndustri->dok_mou->extension;
                $tbIndustri->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbIndustri->dok_moa) {
                $tbIndustri->dok_moa->saveAs('../../backend/web/uploads_industri/moa/' . $tbIndustri->dok_moa->baseName . '.' . $tbIndustri->dok_moa->extension);
                $tbIndustri->dok_moa = $tbIndustri->dok_moa->baseName . '.' . $tbIndustri->dok_moa->extension;
                $tbIndustri->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbIndustri->dok_imp) {
                $tbIndustri->dok_imp->saveAs('../../backend/web/uploads_industri/imp/' . $tbIndustri->dok_imp->baseName . '.' . $tbIndustri->dok_imp->extension);
                $tbIndustri->dok_imp = $tbIndustri->dok_imp->baseName . '.' . $tbIndustri->dok_imp->extension;
                $tbIndustri->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbIndustri' => $tbIndustri,
            'success' => $success
        ]);
    }
    public  function actionUpdateDoksekolah()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbSekolah $tbSekolah */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbSekolah = $user->getAlamatsekolah();
        $success = false;
        if ($tbSekolah->load(Yii::$app->request->post())) {
            $success = true;
            $tbSekolah->save(false);

            $tbSekolah->dok_mou = UploadedFile::getInstance($tbSekolah, 'dok_mou');
            $tbSekolah->dok_moa = UploadedFile::getInstance($tbSekolah, 'dok_moa');
            $tbSekolah->dok_imp = UploadedFile::getInstance($tbSekolah, 'dok_imp');
            if ($tbSekolah->dok_mou) {
                $tbSekolah->dok_mou->saveAs('../../backend/web/uploads_sekolah/mou/' . $tbSekolah->dok_mou->baseName . '.' . $tbSekolah->dok_mou->extension);
                $tbSekolah->dok_mou = $tbSekolah->dok_mou->baseName . '.' . $tbSekolah->dok_mou->extension;
                $tbSekolah->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbSekolah->dok_moa) {
                $tbSekolah->dok_moa->saveAs('../../backend/web/uploads_sekolah/moa/' . $tbSekolah->dok_moa->baseName . '.' . $tbSekolah->dok_moa->extension);
                $tbSekolah->dok_moa = $tbSekolah->dok_moa->baseName . '.' . $tbSekolah->dok_moa->extension;
                $tbSekolah->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbSekolah->dok_imp) {
                $tbSekolah->dok_imp->saveAs('../../backend/web/uploads_sekolah/imp/' . $tbSekolah->dok_imp->baseName . '.' . $tbSekolah->dok_imp->extension);
                $tbSekolah->dok_imp = $tbSekolah->dok_imp->baseName . '.' . $tbSekolah->dok_imp->extension;
                $tbSekolah->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbSekolah' => $tbSekolah,
            'success' => $success
        ]);
    }
    public  function actionUpdateDokpt()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbPerguruanTinggi $tbPerguruanTinggi */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbPerguruanTinggi = $user->getAlamatpt();
        $success = false;
        if ($tbPerguruanTinggi->load(Yii::$app->request->post())) {
            $success = true;
            $tbPerguruanTinggi->save(false);

            $tbPerguruanTinggi->dok_mou = UploadedFile::getInstance($tbPerguruanTinggi, 'dok_mou');
            $tbPerguruanTinggi->dok_moa = UploadedFile::getInstance($tbPerguruanTinggi, 'dok_moa');
            $tbPerguruanTinggi->dok_imp = UploadedFile::getInstance($tbPerguruanTinggi, 'dok_imp');
            if ($tbPerguruanTinggi->dok_mou) {
                $tbPerguruanTinggi->dok_mou->saveAs('../../backend/web/uploads_perguruan_tinggi/mou/' . $tbPerguruanTinggi->dok_mou->baseName . '.' . $tbPerguruanTinggi->dok_mou->extension);
                $tbPerguruanTinggi->dok_mou = $tbPerguruanTinggi->dok_mou->baseName . '.' . $tbPerguruanTinggi->dok_mou->extension;
                $tbPerguruanTinggi->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbPerguruanTinggi->dok_moa) {
                $tbPerguruanTinggi->dok_moa->saveAs('../../backend/web/uploads_perguruan_tinggi/moa/' . $tbPerguruanTinggi->dok_moa->baseName . '.' . $tbPerguruanTinggi->dok_moa->extension);
                $tbPerguruanTinggi->dok_moa = $tbPerguruanTinggi->dok_moa->baseName . '.' . $tbPerguruanTinggi->dok_moa->extension;
                $tbPerguruanTinggi->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbPerguruanTinggi->dok_imp) {
                $tbPerguruanTinggi->dok_imp->saveAs('../../backend/web/uploads_perguruan_tinggi/imp/' . $tbPerguruanTinggi->dok_imp->baseName . '.' . $tbPerguruanTinggi->dok_imp->extension);
                $tbPerguruanTinggi->dok_imp = $tbPerguruanTinggi->dok_imp->baseName . '.' . $tbPerguruanTinggi->dok_imp->extension;
                $tbPerguruanTinggi->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbPerguruanTinggi' => $tbPerguruanTinggi,
            'success' => $success
        ]);
    }
    public  function actionUpdateDokdinas()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbDinas $tbDinas */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbDinas = $user->getAlamatdinas();
        $success = false;
        if ($tbDinas->load(Yii::$app->request->post())) {
            $success = true;
            $tbDinas->save(false);

            $tbDinas->dok_mou = UploadedFile::getInstance($tbDinas, 'dok_mou');
            $tbDinas->dok_moa = UploadedFile::getInstance($tbDinas, 'dok_moa');
            $tbDinas->dok_imp = UploadedFile::getInstance($tbDinas, 'dok_imp');
            if ($tbDinas->dok_mou) {
                $tbDinas->dok_mou->saveAs('../../backend/web/uploads_dinas/mou/' . $tbDinas->dok_mou->baseName . '.' . $tbDinas->dok_mou->extension);
                $tbDinas->dok_mou = $tbDinas->dok_mou->baseName . '.' . $tbDinas->dok_mou->extension;
                $tbDinas->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbDinas->dok_moa) {
                $tbDinas->dok_moa->saveAs('../../backend/web/uploads_dinas/moa/' . $tbDinas->dok_moa->baseName . '.' . $tbDinas->dok_moa->extension);
                $tbDinas->dok_moa = $tbDinas->dok_moa->baseName . '.' . $tbDinas->dok_moa->extension;
                $tbDinas->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbDinas->dok_imp) {
                $tbDinas->dok_imp->saveAs('../../backend/web/uploads_dinas/imp/' . $tbDinas->dok_imp->baseName . '.' . $tbDinas->dok_imp->extension);
                $tbDinas->dok_imp = $tbDinas->dok_imp->baseName . '.' . $tbDinas->dok_imp->extension;
                $tbDinas->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbDinas' => $tbDinas,
            'success' => $success
        ]);
    }
    public  function actionUpdateDokorganisasi()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbOrganisasi $tbOrganisasi */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbOrganisasi = $user->getAlamatorganisasi();
        $success = false;
        if ($tbOrganisasi->load(Yii::$app->request->post())) {
            $success = true;
            $tbOrganisasi->save(false);

            $tbOrganisasi->dok_mou = UploadedFile::getInstance($tbOrganisasi, 'dok_mou');
            $tbOrganisasi->dok_moa = UploadedFile::getInstance($tbOrganisasi, 'dok_moa');
            $tbOrganisasi->dok_imp = UploadedFile::getInstance($tbOrganisasi, 'dok_imp');
            if ($tbOrganisasi->dok_mou) {
                $tbOrganisasi->dok_mou->saveAs('../../backend/web/uploads_organisasi/mou/' . $tbOrganisasi->dok_mou->baseName . '.' . $tbOrganisasi->dok_mou->extension);
                $tbOrganisasi->dok_mou = $tbOrganisasi->dok_mou->baseName . '.' . $tbOrganisasi->dok_mou->extension;
                $tbOrganisasi->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbOrganisasi->dok_moa) {
                $tbOrganisasi->dok_moa->saveAs('../../backend/web/uploads_organisasi/moa/' . $tbOrganisasi->dok_moa->baseName . '.' . $tbOrganisasi->dok_moa->extension);
                $tbOrganisasi->dok_moa = $tbOrganisasi->dok_moa->baseName . '.' . $tbOrganisasi->dok_moa->extension;
                $tbOrganisasi->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbOrganisasi->dok_imp) {
                $tbOrganisasi->dok_imp->saveAs('../../backend/web/uploads_organisasi/imp/' . $tbOrganisasi->dok_imp->baseName . '.' . $tbOrganisasi->dok_imp->extension);
                $tbOrganisasi->dok_imp = $tbOrganisasi->dok_imp->baseName . '.' . $tbOrganisasi->dok_imp->extension;
                $tbOrganisasi->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbOrganisasi' => $tbOrganisasi,
            'success' => $success
        ]);
    }
    public  function actionUpdateDoknpo()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbNpo $tbNpo */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbNpo = $user->getAlamatnpo();
        $success = false;
        if ($tbNpo->load(Yii::$app->request->post())) {
            $success = true;
            $tbNpo->save(false);

            $tbNpo->dok_mou = UploadedFile::getInstance($tbNpo, 'dok_mou');
            $tbNpo->dok_moa = UploadedFile::getInstance($tbNpo, 'dok_moa');
            $tbNpo->dok_imp = UploadedFile::getInstance($tbNpo, 'dok_imp');
            if ($tbNpo->dok_mou) {
                $tbNpo->dok_mou->saveAs('../../backend/web/uploads_npo/mou/' . $tbNpo->dok_mou->baseName . '.' . $tbNpo->dok_mou->extension);
                $tbNpo->dok_mou = $tbNpo->dok_mou->baseName . '.' . $tbNpo->dok_mou->extension;
                $tbNpo->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbNpo->dok_moa) {
                $tbNpo->dok_moa->saveAs('../../backend/web/uploads_npo/moa/' . $tbNpo->dok_moa->baseName . '.' . $tbNpo->dok_moa->extension);
                $tbNpo->dok_moa = $tbNpo->dok_moa->baseName . '.' . $tbNpo->dok_moa->extension;
                $tbNpo->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbNpo->dok_imp) {
                $tbNpo->dok_imp->saveAs('../../backend/web/uploads_npo/imp/' . $tbNpo->dok_imp->baseName . '.' . $tbNpo->dok_imp->extension);
                $tbNpo->dok_imp = $tbNpo->dok_imp->baseName . '.' . $tbNpo->dok_imp->extension;
                $tbNpo->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbNpo' => $tbNpo,
            'success' => $success
        ]);
    }
    public  function actionUpdateAkun()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_industri/foto_profil/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }

        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }


    public  function actionUpdateAkunsekolah()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_sekolah/foto_profil/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkunpt()
    {

        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_pt/foto_profil/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkundinas()
    {

        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_dinas/foto_profil/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkunorganisasi()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_organisasi/foto_profil/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkunnpo()
    {

        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_npo/foto_profil/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }


    public  function actionUpdateAkunn()
    {

        //     if (!Yii::$app->request->isAjax) {
        //         throw new ForbiddenHttpException("You are only allowed to make ajax request");
        //     }
        //     $user = Yii::$app->user->identity;

        //     $success = false;
        //     if ($user->load(Yii::$app->request->post()) && $user->save()) {
        //         $success = true;
        //         // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

        //     }
        //     return $this->renderAjax('user_akun', [
        //         'user' => $user,
        //         'success' => $success
        //     ]);
    }


    public  function actionUpdateAlamateng()
    {

        /** @var \backend\models\TbIndustri $tbIndustri */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbIndustriEng = $user->getAlamateng();
        $success = false;
        if ($tbIndustriEng->load(Yii::$app->request->post()) && $tbIndustriEng->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbIndustriEng' => $tbIndustriEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatsekolaheng()
    {

        /** @var \backend\models\TbSekolah $tbSekolah */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbSekolahEng = $user->getAlamatsekolaheng();
        $success = false;
        if ($tbSekolahEng->load(Yii::$app->request->post()) && $tbSekolahEng->save()) {
            $success = true;
            // Yii::$app session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbSekolahEng' => $tbSekolahEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatpteng()
    {

        /** @var \backend\models\TbPerguruanTinggi $tbPerguruanTinggi */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbPerguruanTinggiEng = $user->getAlamatpteng();
        $success = false;
        if ($tbPerguruanTinggiEng->load(Yii::$app->request->post()) && $tbPerguruanTinggiEng->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbPerguruanTinggiEng' => $tbPerguruanTinggiEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatdinaseng()
    {

        /** @var \backend\models\TbDinas $tbDinas */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbDinasEng = $user->getAlamatdinaseng();
        $success = false;
        if ($tbDinasEng->load(Yii::$app->request->post()) && $tbDinasEng->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbDinasEng' => $tbDinasEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatorganisasieng()
    {

        /** @var \backend\models\TbOrganisasi $tbSekolah */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbOrganisasiEng = $user->getAlamatorganisasieng();
        $success = false;
        if ($tbOrganisasiEng->load(Yii::$app->request->post()) && $tbOrganisasiEng->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbOrganisasiEng' => $tbOrganisasiEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateAlamatnpoeng()
    {

        /** @var \backend\models\TbNpo $tbNpo */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbNpoEng = $user->getAlamatnpoeng();
        $success = false;
        if ($tbNpoEng->load(Yii::$app->request->post()) && $tbNpoEng->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbNpoEng' => $tbNpoEng,
            'success' => $success
        ]);
    }

    public  function actionUpdateAlamatstudenteng()
    {

        /** @var \backend\models\TbNpo $tbNpo */
        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = Yii::$app->user->identity;
        $tbStudentEng = $user->getAlamatstudenteng();
        $success = false;
        if ($tbStudentEng->load(Yii::$app->request->post()) && $tbStudentEng->save()) {
            $success = true;
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');

            //return $this->redirect(['profile']);
        }
        return $this->render('index', [
            'tbStudentEng' => $tbStudentEng,
            'success' => $success
        ]);
    }


    public  function actionUpdateDoceng()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbIndustri $tbIndustri */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbIndustriEng = $user->getAlamateng();
        $success = false;
        if ($tbIndustriEng->load(Yii::$app->request->post())) {
            $success = true;
            $tbIndustriEng->save(false);

            $tbIndustriEng->doc_mou = UploadedFile::getInstance($tbIndustriEng, 'doc_mou');
            $tbIndustriEng->doc_moa = UploadedFile::getInstance($tbIndustriEng, 'doc_moa');
            $tbIndustriEng->doc_imp = UploadedFile::getInstance($tbIndustriEng, 'doc_imp');
            if ($tbIndustriEng->doc_mou) {
                $tbIndustriEng->doc_mou->saveAs('../../backend/web/uploads_industri_eng/mou/' . $tbIndustriEng->doc_mou->baseName . '.' . $tbIndustriEng->doc_mou->extension);
                $tbIndustriEng->doc_mou = $tbIndustriEng->doc_mou->baseName . '.' . $tbIndustriEng->doc_mou->extension;
                $tbIndustriEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbIndustriEng->doc_moa) {
                $tbIndustriEng->doc_moa->saveAs('../../backend/web/uploads_industri_eng/moa/' . $tbIndustriEng->doc_moa->baseName . '.' . $tbIndustriEng->doc_moa->extension);
                $tbIndustriEng->doc_moa = $tbIndustriEng->doc_moa->baseName . '.' . $tbIndustriEng->doc_moa->extension;
                $tbIndustriEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbIndustriEng->doc_imp) {
                $tbIndustriEng->doc_imp->saveAs('../../backend/web/uploads_industri_eng/imp/' . $tbIndustriEng->doc_imp->baseName . '.' . $tbIndustriEng->doc_imp->extension);
                $tbIndustriEng->doc_imp = $tbIndustriEng->doc_imp->baseName . '.' . $tbIndustriEng->doc_imp->extension;
                $tbIndustriEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbIndustriEng' => $tbIndustriEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateDocsekolaheng()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbSekolah $tbSekolah */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbSekolahEng = $user->getAlamatsekolaheng();
        $success = false;
        if ($tbSekolahEng->load(Yii::$app->request->post())) {
            $success = true;
            $tbSekolahEng->save(false);

            $tbSekolahEng->doc_mou = UploadedFile::getInstance($tbSekolahEng, 'doc_mou');
            $tbSekolahEng->doc_moa = UploadedFile::getInstance($tbSekolahEng, 'doc_moa');
            $tbSekolahEng->doc_imp = UploadedFile::getInstance($tbSekolahEng, 'doc_imp');
            if ($tbSekolahEng->doc_mou) {
                $tbSekolahEng->doc_mou->saveAs('../../backend/web/uploads_sekolah_eng/mou/' . $tbSekolahEng->doc_mou->baseName . '.' . $tbSekolahEng->doc_mou->extension);
                $tbSekolahEng->doc_mou = $tbSekolahEng->doc_mou->baseName . '.' . $tbSekolahEng->doc_mou->extension;
                $tbSekolahEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbSekolahEng->doc_moa) {
                $tbSekolahEng->doc_moa->saveAs('../../backend/web/uploads_sekolah_eng/moa/' . $tbSekolahEng->doc_moa->baseName . '.' . $tbSekolahEng->doc_moa->extension);
                $tbSekolahEng->doc_moa = $tbSekolahEng->doc_moa->baseName . '.' . $tbSekolahEng->doc_moa->extension;
                $tbSekolahEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbSekolahEng->doc_imp) {
                $tbSekolahEng->doc_imp->saveAs('../../backend/web/uploads_sekolah_eng/imp/' . $tbSekolahEng->doc_imp->baseName . '.' . $tbSekolahEng->doc_imp->extension);
                $tbSekolahEng->doc_imp = $tbSekolahEng->doc_imp->baseName . '.' . $tbSekolahEng->doc_imp->extension;
                $tbSekolahEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbSekolahEng' => $tbSekolahEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateDocpteng()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbPerguruanTinggi $tbPerguruanTinggi */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbPerguruanTinggiEng = $user->getAlamatpteng();
        $success = false;
        if ($tbPerguruanTinggiEng->load(Yii::$app->request->post())) {
            $success = true;
            $tbPerguruanTinggiEng->save(false);

            $tbPerguruanTinggiEng->doc_mou = UploadedFile::getInstance($tbPerguruanTinggiEng, 'doc_mou');
            $tbPerguruanTinggiEng->doc_moa = UploadedFile::getInstance($tbPerguruanTinggiEng, 'doc_moa');
            $tbPerguruanTinggiEng->doc_imp = UploadedFile::getInstance($tbPerguruanTinggiEng, 'doc_imp');
            if ($tbPerguruanTinggiEng->doc_mou) {
                $tbPerguruanTinggiEng->doc_mou->saveAs('../../backend/web/uploads_perguruan_tinggi/mou/' . $tbPerguruanTinggiEng->doc_mou->baseName . '.' . $tbPerguruanTinggiEng->doc_mou->extension);
                $tbPerguruanTinggiEng->doc_mou = $tbPerguruanTinggiEng->doc_mou->baseName . '.' . $tbPerguruanTinggiEng->doc_mou->extension;
                $tbPerguruanTinggiEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbPerguruanTinggiEng->doc_moa) {
                $tbPerguruanTinggiEng->doc_moa->saveAs('../../backend/web/uploads_perguruan_tinggi/moa/' . $tbPerguruanTinggiEng->doc_moa->baseName . '.' . $tbPerguruanTinggiEng->doc_moa->extension);
                $tbPerguruanTinggiEng->doc_moa = $tbPerguruanTinggiEng->doc_moa->baseName . '.' . $tbPerguruanTinggiEng->doc_moa->extension;
                $tbPerguruanTinggiEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbPerguruanTinggiEng->doc_imp) {
                $tbPerguruanTinggiEng->doc_imp->saveAs('../../backend/web/uploads_perguruan_tinggi/imp/' . $tbPerguruanTinggiEng->doc_imp->baseName . '.' . $tbPerguruanTinggiEng->doc_imp->extension);
                $tbPerguruanTinggiEng->doc_imp = $tbPerguruanTinggiEng->doc_imp->baseName . '.' . $tbPerguruanTinggiEng->doc_imp->extension;
                $tbPerguruanTinggiEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbPerguruanTinggiEng' => $tbPerguruanTinggiEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateDocdinaseng()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbDinas $tbDinas */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbDinasEng = $user->getAlamatdinaseng();
        $success = false;
        if ($tbDinasEng->load(Yii::$app->request->post())) {
            $success = true;
            $tbDinasEng->save(false);

            $tbDinasEng->doc_mou = UploadedFile::getInstance($tbDinasEng, 'doc_mou');
            $tbDinasEng->doc_moa = UploadedFile::getInstance($tbDinasEng, 'doc_moa');
            $tbDinasEng->doc_imp = UploadedFile::getInstance($tbDinasEng, 'doc_imp');
            if ($tbDinasEng->doc_mou) {
                $tbDinasEng->doc_mou->saveAs('../../backend/web/uploads_dinas/mou/' . $tbDinasEng->doc_mou->baseName . '.' . $tbDinasEng->doc_mou->extension);
                $tbDinasEng->doc_mou = $tbDinasEng->doc_mou->baseName . '.' . $tbDinasEng->doc_mou->extension;
                $tbDinasEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbDinasEng->doc_moa) {
                $tbDinasEng->doc_moa->saveAs('../../backend/web/uploads_dinas/moa/' . $tbDinasEng->doc_moa->baseName . '.' . $tbDinasEng->doc_moa->extension);
                $tbDinasEng->doc_moa = $tbDinasEng->doc_moa->baseName . '.' . $tbDinasEng->doc_moa->extension;
                $tbDinasEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbDinasEng->doc_imp) {
                $tbDinasEng->doc_imp->saveAs('../../backend/web/uploads_dinas/imp/' . $tbDinasEng->doc_imp->baseName . '.' . $tbDinasEng->doc_imp->extension);
                $tbDinasEng->doc_imp = $tbDinasEng->doc_imp->baseName . '.' . $tbDinasEng->doc_imp->extension;
                $tbDinasEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbDinasEng' => $tbDinasEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateDocorganisasieng()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbOrganisasi $tbOrganisasi */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbOrganisasiEng = $user->getAlamatorganisasieng();
        $success = false;
        if ($tbOrganisasiEng->load(Yii::$app->request->post())) {
            $success = true;
            $tbOrganisasiEng->save(false);

            $tbOrganisasiEng->doc_mou = UploadedFile::getInstance($tbOrganisasiEng, 'doc_mou');
            $tbOrganisasiEng->doc_moa = UploadedFile::getInstance($tbOrganisasiEng, 'doc_moa');
            $tbOrganisasiEng->doc_imp = UploadedFile::getInstance($tbOrganisasiEng, 'doc_imp');
            if ($tbOrganisasiEng->doc_mou) {
                $tbOrganisasiEng->doc_mou->saveAs('../../backend/web/uploads_organisasi/mou/' . $tbOrganisasiEng->doc_mou->baseName . '.' . $tbOrganisasiEng->doc_mou->extension);
                $tbOrganisasiEng->doc_mou = $tbOrganisasiEng->doc_mou->baseName . '.' . $tbOrganisasiEng->doc_mou->extension;
                $tbOrganisasiEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbOrganisasiEng->doc_moa) {
                $tbOrganisasiEng->doc_moa->saveAs('../../backend/web/uploads_organisasi/moa/' . $tbOrganisasiEng->doc_moa->baseName . '.' . $tbOrganisasiEng->doc_moa->extension);
                $tbOrganisasiEng->doc_moa = $tbOrganisasiEng->doc_moa->baseName . '.' . $tbOrganisasiEng->doc_moa->extension;
                $tbOrganisasiEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbOrganisasiEng->doc_imp) {
                $tbOrganisasiEng->doc_imp->saveAs('../../backend/web/uploads_organisasi/imp/' . $tbOrganisasiEng->doc_imp->baseName . '.' . $tbOrganisasiEng->doc_imp->extension);
                $tbOrganisasiEng->doc_imp = $tbOrganisasiEng->doc_imp->baseName . '.' . $tbOrganisasiEng->doc_imp->extension;
                $tbOrganisasiEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbOrganisasiEng' => $tbOrganisasiEng,
            'success' => $success
        ]);
    }
    public  function actionUpdateDocnpoeng()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbNpo $tbNpo */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbNpoEng = $user->getAlamatnpoeng();
        $success = false;
        if ($tbNpoEng->load(Yii::$app->request->post())) {
            $success = true;
            $tbNpoEng->save(false);

            $tbNpoEng->doc_mou = UploadedFile::getInstance($tbNpoEng, 'doc_mou');
            $tbNpoEng->doc_moa = UploadedFile::getInstance($tbNpoEng, 'doc_moa');
            $tbNpoEng->doc_imp = UploadedFile::getInstance($tbNpoEng, 'doc_imp');
            if ($tbNpoEng->doc_mou) {
                $tbNpoEng->doc_mou->saveAs('../../backend/web/uploads_npo/mou/' . $tbNpoEng->doc_mou->baseName . '.' . $tbNpoEng->doc_mou->extension);
                $tbNpoEng->doc_mou = $tbNpoEng->doc_mou->baseName . '.' . $tbNpoEng->doc_mou->extension;
                $tbNpoEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbNpoEng->doc_moa) {
                $tbNpoEng->doc_moa->saveAs('../../backend/web/uploads_npo/moa/' . $tbNpoEng->doc_moa->baseName . '.' . $tbNpoEng->doc_moa->extension);
                $tbNpoEng->doc_moa = $tbNpoEng->doc_moa->baseName . '.' . $tbNpoEng->doc_moa->extension;
                $tbNpoEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbNpoEng->doc_imp) {
                $tbNpoEng->doc_imp->saveAs('../../backend/web/uploads_npo/imp/' . $tbNpoEng->doc_imp->baseName . '.' . $tbNpoEng->doc_imp->extension);
                $tbNpoEng->doc_imp = $tbNpoEng->doc_imp->baseName . '.' . $tbNpoEng->doc_imp->extension;
                $tbNpoEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbNpoEng' => $tbNpoEng,
            'success' => $success
        ]);
    }

    public  function actionUpdateDocstudenteng()
    {
        //$model = new UploadForm();
        /** @var \backend\models\TbNpo $tbNpo */
        /** @var \common\models\User $user */

        $user = Yii::$app->user->identity;
        $tbStudentEng = $user->getAlamatstudenteng();
        $success = false;
        if ($tbStudentEng->load(Yii::$app->request->post())) {
            $success = true;
            $tbStudentEng->save(false);

            $tbStudentEng->application_letter = UploadedFile::getInstance($tbStudentEng, 'application_letter');
            $tbStudentEng->biodata = UploadedFile::getInstance($tbStudentEng, 'biodata');
            $tbStudentEng->photo = UploadedFile::getInstance($tbStudentEng, 'photo');
            $tbStudentEng->certificate = UploadedFile::getInstance($tbStudentEng, 'certificate');
            $tbStudentEng->passport = UploadedFile::getInstance($tbStudentEng, 'passport');
            $tbStudentEng->financial_guarantee_letter = UploadedFile::getInstance($tbStudentEng, 'financial_guarantee_letter');
            $tbStudentEng->health_certificate = UploadedFile::getInstance($tbStudentEng, 'health_certificate');
            $tbStudentEng->statement_letter = UploadedFile::getInstance($tbStudentEng, 'statement_letter');
            $tbStudentEng->campus_recommendation_letter = UploadedFile::getInstance($tbStudentEng, 'campus_recommendation_letter');
            $tbStudentEng->achievement = UploadedFile::getInstance($tbStudentEng, 'achievement');
            if ($tbStudentEng->application_letter) {
                $tbStudentEng->application_letter->saveAs('../../backend/web/uploads_student_eng/application_letter/' . $tbStudentEng->application_letter->baseName . '.' . $tbStudentEng->application_letter->extension);
                $tbStudentEng->application_letter = $tbStudentEng->application_letter->baseName . '.' . $tbStudentEng->application_letter->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->biodata) {
                $tbStudentEng->biodata->saveAs('../../backend/web/uploads_student_eng/biodata/' . $tbStudentEng->biodata->baseName . '.' . $tbStudentEng->biodata->extension);
                $tbStudentEng->biodata = $tbStudentEng->biodata->baseName . '.' . $tbStudentEng->biodata->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->photo) {
                $tbStudentEng->photo->saveAs('../../backend/web/uploads_student_eng/photo/' . $tbStudentEng->photo->baseName . '.' . $tbStudentEng->photo->extension);
                $tbStudentEng->photo = $tbStudentEng->photo->baseName . '.' . $tbStudentEng->photo->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->certificate) {
                $tbStudentEng->certificate->saveAs('../../backend/web/uploads_student_eng/certificate/' . $tbStudentEng->certificate->baseName . '.' . $tbStudentEng->certificate->extension);
                $tbStudentEng->certificate = $tbStudentEng->certificate->baseName . '.' . $tbStudentEng->certificate->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->passport) {
                $tbStudentEng->passport->saveAs('../../backend/web/uploads_student_eng/passport/' . $tbStudentEng->passport->baseName . '.' . $tbStudentEng->passport->extension);
                $tbStudentEng->passport = $tbStudentEng->passport->baseName . '.' . $tbStudentEng->passport->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->financial_guarantee_letter) {
                $tbStudentEng->financial_guarantee_letter->saveAs('../../backend/web/uploads_student_eng/financial_guarantee_letter/' . $tbStudentEng->financial_guarantee_letter->baseName . '.' . $tbStudentEng->financial_guarantee_letter->extension);
                $tbStudentEng->financial_guarantee_letter = $tbStudentEng->financial_guarantee_letter->baseName . '.' . $tbStudentEng->financial_guarantee_letter->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->health_certificate) {
                $tbStudentEng->health_certificate->saveAs('../../backend/web/uploads_student_eng/health_certificate/' . $tbStudentEng->health_certificate->baseName . '.' . $tbStudentEng->health_certificate->extension);
                $tbStudentEng->health_certificate = $tbStudentEng->health_certificate->baseName . '.' . $tbStudentEng->health_certificate->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->statement_letter) {
                $tbStudentEng->statement_letter->saveAs('../../backend/web/uploads_student_eng/statement_letter/' . $tbStudentEng->statement_letter->baseName . '.' . $tbStudentEng->statement_letter->extension);
                $tbStudentEng->statement_letter = $tbStudentEng->statement_letter->baseName . '.' . $tbStudentEng->statement_letter->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->campus_recommendation_letter) {
                $tbStudentEng->campus_recommendation_letter->saveAs('../../backend/web/uploads_student_eng/campus_recommendation_letter/' . $tbStudentEng->campus_recommendation_letter->baseName . '.' . $tbStudentEng->campus_recommendation_letter->extension);
                $tbStudentEng->campus_recommendation_letter = $tbStudentEng->campus_recommendation_letter->baseName . '.' . $tbStudentEng->campus_recommendation_letter->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
            if ($tbStudentEng->achievement) {
                $tbStudentEng->achievement->saveAs('../../backend/web/uploads_student_eng/achievement/' . $tbStudentEng->achievement->baseName . '.' . $tbStudentEng->achievement->extension);
                $tbStudentEng->achievement = $tbStudentEng->achievement->baseName . '.' . $tbStudentEng->achievement->extension;
                $tbStudentEng->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }


            //return $this->redirect(['view', 'id' => $model->id]);
            // Yii::$app->session->setFlash('success', 'Alamat kamu berhasil di ubah');
            //return $this->redirect(['profile']);
        }


        return $this->render('index', [
            'tbStudentEng' => $tbStudentEng,
            'success' => $success
        ]);
    }



    public  function actionUpdateAkunsekolaheng()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_sekolah_eng/profil_picture/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkunpteng()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_pt_eng/profil_picture/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkundinaseng()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_dinas_eng/profil_picture/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkunorganisasieng()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_organisasi_eng/profil_picture/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkunnpoeng()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_npo_eng/profil_picture/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }

    public  function actionUpdateAkunstudenteng()
    {


        /** @var \common\models\User $user */
        // if (!Yii::$app->request->isAjax) {
        //     throw new ForbiddenHttpException("You are only allowed to make ajax request");
        // }
        $user = \frontend\models\User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        //$user = $user->getAkun();
        $success = false;
        if ($user->load(Yii::$app->request->post())) {
            $success = true;
            $user->save(false);

            $user->foto_profil = UploadedFile::getInstance($user, 'foto_profil');
            if ($user->foto_profil) {
                $user->foto_profil->saveAs('uploads_student_eng/profile_picture/' . $user->foto_profil->baseName . '.' . $user->foto_profil->extension);
                $user->foto_profil = $user->foto_profil->baseName . '.' . $user->foto_profil->extension;
                $user->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
            }
        }
        return $this->render('akun', [
            'user' => $user,
            'success' => $success
        ]);
    }
}
