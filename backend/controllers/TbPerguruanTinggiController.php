<?php

namespace backend\controllers;

use backend\models\User;

use backend\models\TbPerguruanTinggi;
use backend\models\TbPerguruanTinggiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\web\UploadedFile;
use backend\models\SignupFormPt;
use backend\models\SignupForm;
use yii\helpers\Url;

/**
 * TbPerguruanTinggiController implements the CRUD actions for TbPerguruanTinggi model.
 */
class TbPerguruanTinggiController extends Controller
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
     * Lists all TbPerguruanTinggi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbPerguruanTinggiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $tb_perguruan_tinggi = TbPerguruanTinggi::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tb_perguruan_tinggi' => $tb_perguruan_tinggi,
        ]);
    }

    /**
     * Displays a single TbPerguruanTinggi model.
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

        $modelPt = new SignupFormPt();
        if ($modelPt->load(Yii::$app->request->post()) && $modelPt->signup_pt()) {
            $user = User::find()->where(['username' =>  $modelPt->username])->one();
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['create', 'id' => $user->id]));
        }

        return $this->render('signup', [
            'model' => $model,
            'modelPt' => $modelPt,

        ]);
    }

    /**
     * Creates a new TbPerguruanTinggi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $model = new TbPerguruanTinggi();
        $model->id_user = $id;
        // $model = $user->getAlamat();
        $success = false;
        if ($model->load(Yii::$app->request->post())) {
            $success = true;

            $model->dok_mou = UploadedFile::getInstance($model, 'dok_mou');
            $model->dok_moa = UploadedFile::getInstance($model, 'dok_moa');
            $model->dok_imp = UploadedFile::getInstance($model, 'dok_imp');
            if ($model->dok_mou) {
                $model->dok_mou->saveAs('uploads_perguruantinggi/mou/' . $model->dok_mou->baseName . '.' . $model->dok_mou->extension);
                $model->dok_mou = $model->dok_mou->baseName . '.' . $model->dok_mou->extension;
            }
            if ($model->dok_moa) {
                $model->dok_moa->saveAs('uploads_perguruantinggi/moa/' . $model->dok_moa->baseName . '.' . $model->dok_moa->extension);
                $model->dok_moa = $model->dok_moa->baseName . '.' . $model->dok_moa->extension;
            }
            if ($model->dok_imp) {
                $model->dok_imp->saveAs('uploads_perguruantinggi/imp/' . $model->dok_imp->baseName . '.' . $model->dok_imp->extension);
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
     * Updates an existing TbPerguruanTinggi model.
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
     * Deletes an existing TbPerguruanTinggi model.
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
     * Finds the TbPerguruanTinggi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TbPerguruanTinggi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbPerguruanTinggi::findOne(['id' => $id])) !== null) {
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
                    $model = new TbPerguruanTinggi();
                    $model->nama_peguruan_tinggi = (string)$sheetData[$baseRow]['B'];
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
        $searchModel = new TbPerguruanTinggiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export') . '/templates/opentbs/data-perguruan-tinggi.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no = 1;
        foreach ($dataProvider->getModels() as $per) {
            $data[] = [
                'no' => $no++,
                'nama_perguruan_tinggi' => $per->nama_peguruan_tinggi,
                'bidang_kerjasama' => $per->bidang_kerjasama,
                'judul_kerjasama' => $per->judul_kerjasama,
                'jenis_kerjasama' => $per->jenis_kerjasama,
                'no_thn_kerjasama' => $per->no_thn_kerjasama,
                'tgl_mulai' => $per->tgl_mulai,
                'tgl_akhir' => $per->tgl_akhir,
                'dok_mou' => $per->dok_mou,
                'dok_moa' => $per->dok_moa,
                'dok_imp' => $per->dok_imp,
                'inisiator' => $per->inisiator,
                'keterangan' => $per->keterangan,
                'email_utama' => $per->email_utama,
                'no_telp' => $per->no_telp,
                'no_fax' => $per->no_fax,
                'website' => $per->website,
                'alamat' => $per->alamat,
                'kelurahan' => $per->kelurahan,
                'kecamatan' => $per->kecamatan,
                'kota' => $per->kota,
                'kode_pos' => $per->kode_pos,
                'rt_rw' => $per->rt_rw,
                'kontak_person' => $per->kontak_person,
                'link_maps' => $per->link_maps,
                'link_facebook' => $per->link_facebook,
                'link_instagram' => $per->link_instagram,
                'link_twitter' => $per->link_twitter,
                'link_youtube' => $per->link_youtube
            ];
        }

        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'data-perguruan-tinggi.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    }
}
