<?php

namespace backend\controllers;

use backend\models\User;
use backend\models\TbDinas;
use backend\models\TbDinasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use PhpOffice\PhpSpreadsheet\IOFactory;
use yii\web\UploadedFile;
use backend\models\SignupFormDinas;
use backend\models\SignupForm;
use yii\helpers\Url;

/**
 * TbDinasController implements the CRUD actions for TbDinas model.
 */
class TbDinasController extends Controller
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
     * Lists all TbDinas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbDinasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $tb_dinas = TbDinas::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tb_dinas' => $tb_dinas,
        ]);
    }

    /**
     * Displays a single TbDinas model.
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

        $modelDinas = new SignupFormDinas();
        if ($modelDinas->load(Yii::$app->request->post()) && $modelDinas->signup_dinas()) {
            $user = User::find()->where(['username' =>  $modelDinas->username])->one();
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['create', 'id' => $user->id]));
        }

        return $this->render('signup', [
            'model' => $model,
            'modelDinas' => $modelDinas,

        ]);
    }

    /**
     * Creates a new TbDinas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $model = new TbDinas();
        $model->id_user = $id;
        // $model = $user->getAlamat();
        $success = false;
        if ($model->load(Yii::$app->request->post())) {
            $success = true;

            $model->dok_mou = UploadedFile::getInstance($model, 'dok_mou');
            $model->dok_moa = UploadedFile::getInstance($model, 'dok_moa');
            $model->dok_imp = UploadedFile::getInstance($model, 'dok_imp');
            if ($model->dok_mou) {
                $model->dok_mou->saveAs('uploads_dinas/mou/' . $model->dok_mou->baseName . '.' . $model->dok_mou->extension);
                $model->dok_mou = $model->dok_mou->baseName . '.' . $model->dok_mou->extension;
            }
            if ($model->dok_moa) {
                $model->dok_moa->saveAs('uploads_dinas/moa/' . $model->dok_moa->baseName . '.' . $model->dok_moa->extension);
                $model->dok_moa = $model->dok_moa->baseName . '.' . $model->dok_moa->extension;
            }
            if ($model->dok_imp) {
                $model->dok_imp->saveAs('uploads_dinas/imp/' . $model->dok_imp->baseName . '.' . $model->dok_imp->extension);
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
     * Updates an existing TbDinas model.
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
     * Deletes an existing TbDinas model.
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
     * Finds the TbDinas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TbDinas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbDinas::findOne(['id' => $id])) !== null) {
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
                    $model = new TbDinas();
                    $model->nama_dinas = (string)$sheetData[$baseRow]['B'];
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
        $searchModel = new TbDinasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export') . '/templates/opentbs/data-pemerintahan.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no = 1;
        foreach ($dataProvider->getModels() as $dinas) {
            $data[] = [
                'no' => $no++,
                'nama_dinas' => $dinas->nama_dinas,
                'bidang_kerjasama' => $dinas->bidang_kerjasama,
                'judul_kerjasama' => $dinas->judul_kerjasama,
                'jenis_kerjasama' => $dinas->jenis_kerjasama,
                'no_thn_kerjasama' => $dinas->no_thn_kerjasama,
                'tgl_mulai' => $dinas->tgl_mulai,
                'tgl_akhir' => $dinas->tgl_akhir,
                'dok_mou' => $dinas->dok_mou,
                'dok_moa' => $dinas->dok_moa,
                'dok_imp' => $dinas->dok_imp,
                'inisiator' => $dinas->inisiator,
                'keterangan' => $dinas->keterangan,
                'email_utama' => $dinas->email_utama,
                'no_telp' => $dinas->no_telp,
                'no_fax' => $dinas->no_fax,
                'website' => $dinas->website,
                'alamat' => $dinas->alamat,
                'kelurahan' => $dinas->kelurahan,
                'kecamatan' => $dinas->kecamatan,
                'kota' => $dinas->kota,
                'kode_pos' => $dinas->kode_pos,
                'rt_rw' => $dinas->rt_rw,
                'kontak_person' => $dinas->kontak_person,
                'link_maps' => $dinas->link_maps,
                'link_facebook' => $dinas->link_facebook,
                'link_instagram' => $dinas->link_instagram,
                'link_twitter' => $dinas->link_twitter,
                'link_youtube' => $dinas->link_youtube
            ];
        }

        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'data_pemerintahan.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    }
}
