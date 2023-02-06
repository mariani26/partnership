<?php

namespace backend\controllers;

use backend\models\User;
use backend\models\TbSekolah;
use backend\models\TbSekolahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use PhpOffice\PhpSpreadsheet\IOFactory;
use yii\web\UploadedFile;
use backend\models\SignupFormSekolah;
use backend\models\SignupForm;
use yii\helpers\Url;

/**
 * TbSekolahController implements the CRUD actions for TbSekolah model.
 */
class TbSekolahController extends Controller
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
     * Lists all TbSekolah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbSekolahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $tb_sekolah = TbSekolah::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tb_sekolah' => $tb_sekolah,
        ]);
    }

    /**
     * Displays a single TbSekolah model.
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

        $modelSekolah = new SignupFormSekolah();
        if ($modelSekolah->load(Yii::$app->request->post()) && $modelSekolah->signup_sekolah()) {
            $user = User::find()->where(['username' =>  $modelSekolah->username])->one();
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['create', 'id' => $user->id]));
        }

        return $this->render('signup', [
            'model' => $model,
            'modelSekolah' => $modelSekolah,

        ]);
    }

    /**
     * Creates a new TbSekolah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $model = new TbSekolah();
        $model->id_user = $id;
        // $model = $user->getAlamat();
        $success = false;
        if ($model->load(Yii::$app->request->post())) {
            $success = true;

            $model->dok_mou = UploadedFile::getInstance($model, 'dok_mou');
            $model->dok_moa = UploadedFile::getInstance($model, 'dok_moa');
            $model->dok_imp = UploadedFile::getInstance($model, 'dok_imp');
            if ($model->dok_mou) {
                $model->dok_mou->saveAs('uploads_sekolah/mou/' . $model->dok_mou->baseName . '.' . $model->dok_mou->extension);
                $model->dok_mou = $model->dok_mou->baseName . '.' . $model->dok_mou->extension;
            }
            if ($model->dok_moa) {
                $model->dok_moa->saveAs('uploads_sekolah/moa/' . $model->dok_moa->baseName . '.' . $model->dok_moa->extension);
                $model->dok_moa = $model->dok_moa->baseName . '.' . $model->dok_moa->extension;
            }
            if ($model->dok_imp) {
                $model->dok_imp->saveAs('uploads_sekolah/imp/' . $model->dok_imp->baseName . '.' . $model->dok_imp->extension);
                $model->dok_imp = $model->dok_imp->baseName . '.' . $model->dok_imp->extension;
            }
            $model->save(false);
            Yii::$app->session->setFlash('success', 'File berhasil diupload');
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
            'success' => $success
        ]);
    }

    /**
     * Updates an existing TbSekolah model.
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
     * Deletes an existing TbSekolah model.
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
     * Finds the TbSekolah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TbSekolah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbSekolah::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionImport()
    {
        $modelImport = new \yii\base\DynamicModel([
            'fileImport' => 'File Import',
        ]);
        $modelImport->addRule(['fileImport'], 'required');
        $modelImport->addRule(['fileImport'], 'file', ['extensions' => 'ods,xls,xlsx'], ['maxSize' => 1024 * 1024]);

        if (Yii::$app->request->post()) {
            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport && $modelImport->validate()) {
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName);
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $baseRow = 3;
                while (!empty($sheetData[$baseRow]['B'])) {
                    $model = new TbSekolah();
                    $model->nama_sekolah = (string)$sheetData[$baseRow]['B'];
                    $model->bidang_kerjasama = (string)$sheetData[$baseRow]['C'];
                    $model->judul_kerjasama = (string)$sheetData[$baseRow]['D'];
                    $model->jenis_kerjasama = (string)$sheetData[$baseRow]['E'];
                    $model->no_thn_kerjasama = (string)$sheetData[$baseRow]['F'];
                    $model->tgl_mulai = (string)$sheetData[$baseRow]['G'];
                    $model->tgl_akhir = (string)$sheetData[$baseRow]['H'];
                    $model->dok_mou = (string)$sheetData[$baseRow]['I'];
                    $model->dok_moa = (string)$sheetData[$baseRow]['J'];
                    $model->dok_imp = (string)$sheetData[$baseRow]['K'];
                    $model->inisiator = (string)$sheetData[$baseRow]['L'];
                    $model->keterangan = (string)$sheetData[$baseRow]['M'];
                    $model->email_utama = (string)$sheetData[$baseRow]['N'];
                    $model->no_telp = (string)$sheetData[$baseRow]['O'];
                    $model->no_fax = (string)$sheetData[$baseRow]['P'];
                    $model->website = (string)$sheetData[$baseRow]['Q'];
                    $model->alamat = (string)$sheetData[$baseRow]['R'];
                    $model->kelurahan = (string)$sheetData[$baseRow]['S'];
                    $model->kecamatan = (string)$sheetData[$baseRow]['T'];
                    $model->kota = (string)$sheetData[$baseRow]['U'];
                    $model->kode_pos = (string)$sheetData[$baseRow]['V'];
                    $model->id_user = (string)$sheetData[$baseRow]['W'];
                    $model->save();
                    // die(print_r($model->errors));
                    $baseRow++;
                }
                Yii::$app->getSession()->setFlash('success', 'Success');
            } else {
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
            return $this->redirect(['index']);
        }

        return $this->render('import', [
            'modelImport' => $modelImport,
        ]);
    }


    // Export Excel
    public function actionExportExcel2()
    {
        $searchModel = new TbSekolahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export') . '/templates/opentbs/data-sekolah.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no = 1;
        foreach ($dataProvider->getModels() as $sekolah) {
            $data[] = [
                'no' => $no++,
                'nama_sekolah' => $sekolah->nama_sekolah,
                'bidang_kerjasama' => $sekolah->bidang_kerjasama,
                'judul_kerjasama' => $sekolah->judul_kerjasama,
                'jenis_kerjasama' => $sekolah->jenis_kerjasama,
                'no_thn_kerjasama' => $sekolah->no_thn_kerjasama,
                'tgl_mulai' => $sekolah->tgl_mulai,
                'tgl_akhir' => $sekolah->tgl_akhir,
                'dok_mou' => $sekolah->dok_mou,
                'dok_moa' => $sekolah->dok_moa,
                'dok_imp' => $sekolah->dok_imp,
                'inisiator' => $sekolah->inisiator,
                'keterangan' => $sekolah->keterangan,
                'email_utama' => $sekolah->email_utama,
                'no_telp' => $sekolah->no_telp,
                'no_fax' => $sekolah->no_fax,
                'website' => $sekolah->website,
                'alamat' => $sekolah->alamat,
                'kelurahan' => $sekolah->kelurahan,
                'kecamatan' => $sekolah->kecamatan,
                'kota' => $sekolah->kota,
                'kode_pos' => $sekolah->kode_pos,
                'rt_rw' => $sekolah->rt_rw,
                'kontak_person' => $sekolah->kontak_person,
                'link_maps' => $sekolah->link_maps,
                'link_facebook' => $sekolah->link_facebook,
                'link_instagram' => $sekolah->link_instagram,
                'link_twitter' => $sekolah->link_twitter,
                'link_youtube' => $sekolah->link_youtube
            ];
        }

        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'data-sekolah.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    }
}
