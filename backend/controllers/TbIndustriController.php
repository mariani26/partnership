<?php

namespace backend\controllers;

use backend\models\User;

use backend\models\TbIndustri;
use backend\models\TbIndustriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use PhpOffice\PhpSpreadsheet\IOFactory;
use yii\web\UploadedFile;
use backend\models\SignupFormIndustri;
use backend\models\SignupForm;
use yii\helpers\Url;

/**
 * TbIndustriController implements the CRUD actions for TbIndustri model.
 */
class TbIndustriController extends Controller
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
     * Lists all TbIndustri models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbIndustriSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $tb_industri = TbIndustri::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tb_industri' => $tb_industri,
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

        $modelIndustri = new SignupFormIndustri();
        if ($modelIndustri->load(Yii::$app->request->post()) && $modelIndustri->signup_industri()) {
            $user = User::find()->where(['username' =>  $modelIndustri->username])->one();
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['create', 'id' => $user->id]));
        }

        return $this->render('signup', [
            'model' => $model,
            'modelIndustri' => $modelIndustri,

        ]);
    }



    /**
     * Displays a single TbIndustri model.
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

    /**
     * Creates a new TbIndustri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $model = new TbIndustri();
        $model->id_user = $id;
        // $model = $user->getAlamat();
        $success = false;
        if ($model->load(Yii::$app->request->post())) {
            $success = true;

            $model->dok_mou = UploadedFile::getInstance($model, 'dok_mou');
            $model->dok_moa = UploadedFile::getInstance($model, 'dok_moa');
            $model->dok_imp = UploadedFile::getInstance($model, 'dok_imp');
            if ($model->dok_mou) {
                $model->dok_mou->saveAs('uploads_industri/mou/' . $model->dok_mou->baseName . '.' . $model->dok_mou->extension);
                $model->dok_mou = $model->dok_mou->baseName . '.' . $model->dok_mou->extension;
            }
            if ($model->dok_moa) {
                $model->dok_moa->saveAs('uploads_industri/moa/' . $model->dok_moa->baseName . '.' . $model->dok_moa->extension);
                $model->dok_moa = $model->dok_moa->baseName . '.' . $model->dok_moa->extension;
            }
            if ($model->dok_imp) {
                $model->dok_imp->saveAs('uploads_industri/imp/' . $model->dok_imp->baseName . '.' . $model->dok_imp->extension);
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
     * Updates an existing TbIndustri model.
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
     * Deletes an existing TbIndustri model.
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
     * Finds the TbIndustri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TbIndustri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbIndustri::findOne(['id' => $id])) !== null) {
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
                    $model = new TbIndustri;
                    $model->nama_industri = (string)$sheetData[$baseRow]['B'];
                    $model->no_identitas = (string)$sheetData[$baseRow]['C'];
                    $model->identitas_derektur = (string)$sheetData[$baseRow]['D'];
                    $model->bidang_usaha = (string)$sheetData[$baseRow]['E'];
                    $model->judul_kerjasama = (string)$sheetData[$baseRow]['F'];
                    $model->jenis_kerjasama = (string)$sheetData[$baseRow]['G'];
                    $model->no_thn_kerjasama = (string)$sheetData[$baseRow]['H'];
                    $model->tgl_mulai = (string)$sheetData[$baseRow]['I'];
                    $model->tgl_akhir = (string)$sheetData[$baseRow]['J'];
                    $model->dok_mou = (string)$sheetData[$baseRow]['K'];
                    $model->dok_moa = (string)$sheetData[$baseRow]['L'];
                    $model->dok_imp = (string)$sheetData[$baseRow]['M'];
                    $model->inisiator = (string)$sheetData[$baseRow]['N'];
                    $model->keterangan = (string)$sheetData[$baseRow]['O'];
                    $model->email_utama = (string)$sheetData[$baseRow]['P'];
                    $model->email_cadangan = (string)$sheetData[$baseRow]['Q'];
                    $model->no_telp = (string)$sheetData[$baseRow]['R'];
                    $model->no_fax = (string)$sheetData[$baseRow]['S'];
                    $model->website = (string)$sheetData[$baseRow]['T'];
                    $model->alamat = (string)$sheetData[$baseRow]['U'];
                    $model->kelurahan = (string)$sheetData[$baseRow]['V'];
                    $model->kecamatan = (string)$sheetData[$baseRow]['W'];
                    $model->kota = (string)$sheetData[$baseRow]['X'];
                    $model->kode_pos = (string)$sheetData[$baseRow]['Y'];
                    $model->id_user = (string)$sheetData[$baseRow]['Z'];
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
        $searchModel = new TbIndustriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export') . '/templates/opentbs/data-industri.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no = 1;
        foreach ($dataProvider->getModels() as $industri) {
            $data[] = [
                'no' => $no++,
                'nama_industri' => $industri->nama_industri,
                'no_identitas' => $industri->no_identitas,
                'identitas_derektur' => $industri->identitas_derektur,
                'bidang_usaha' => $industri->bidang_usaha,
                'judul_kerjasama' => $industri->judul_kerjasama,
                'jenis_kerjasama' => $industri->jenis_kerjasama,
                'no_thn_kerjasama' => $industri->no_thn_kerjasama,
                'tgl_mulai' => $industri->tgl_mulai,
                'tgl_akhir' => $industri->tgl_akhir,
                'dok_mou' => $industri->dok_mou,
                'dok_moa' => $industri->dok_moa,
                'dok_imp' => $industri->dok_imp,
                'inisiator' => $industri->inisiator,
                'keterangan' => $industri->keterangan,
                'email_utama' => $industri->email_utama,
                'email_cadangan' => $industri->email_cadangan,
                'no_telp' => $industri->no_telp,
                'no_fax' => $industri->no_fax,
                'website' => $industri->website,
                'alamat' => $industri->alamat,
                'kelurahan' => $industri->kelurahan,
                'kecamatan' => $industri->kecamatan,
                'kota' => $industri->kota,
                'kode_pos' => $industri->kode_pos,
                'rt_rw' => $industri->rt_rw,
                'kontak_person' => $industri->kontak_person,
                'link_maps' => $industri->link_maps,
                'link_facebook' => $industri->link_facebook,
                'link_instagram' => $industri->link_instagram,
                'link_twitter' => $industri->link_twitter,
                'link_youtube' => $industri->link_youtube
            ];
        }

        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'data-industri.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    }
}
