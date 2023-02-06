<?php

namespace backend\controllers;

use backend\models\User;
use backend\models\TbOrganisasiEng;
use backend\models\TbOrganisasiEngSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Yii;
use PhpOffice\PhpSpreadsheet\IOFactory;
use backend\models\SignupFormOrganisasiEng;
use backend\models\SignupForm;
use yii\helpers\Url;

/**
 * TbOrganisasiEngController implements the CRUD actions for TbOrganisasiEng model.
 */
class TbOrganisasiEngController extends Controller
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
     * Lists all TbOrganisasiEng models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbOrganisasiEngSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $tb_organisasi_eng = TbOrganisasiEng::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tb_organisasi_eng' => $tb_organisasi_eng,
        ]);
    }

    /**
     * Displays a single TbOrganisasiEng model.
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

    public function actionSignupeng()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        $modelOrganisasiEng = new SignupFormOrganisasiEng();
        if ($modelOrganisasiEng->load(Yii::$app->request->post()) && $modelOrganisasiEng->signup_organisasieng()) {
            $user = User::find()->where(['username' =>  $modelOrganisasiEng->username])->one();
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['create', 'id' => $user->id]));
        }


        return $this->render('signupeng', [
            'model' => $model,
            'modelOrganisasiEng' => $modelOrganisasiEng,

        ]);
    }

    /**
     * Creates a new TbOrganisasiEng model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $model = new TbOrganisasiEng();
        $model->user_id = $id;
        // $model = $user->getAlamat();
        $success = false;
        if ($model->load(Yii::$app->request->post())) {
            $success = true;

            $model->doc_mou = UploadedFile::getInstance($model, 'doc_mou');
            $model->doc_moa = UploadedFile::getInstance($model, 'doc_moa');
            $model->doc_imp = UploadedFile::getInstance($model, 'doc_imp');
            if ($model->doc_mou) {
                $model->doc_mou->saveAs('uploads_organisasi_eng/mou/' . $model->doc_mou->baseName . '.' . $model->doc_mou->extension);
                $model->doc_mou = $model->doc_mou->baseName . '.' . $model->doc_mou->extension;
            }
            if ($model->doc_moa) {
                $model->doc_moa->saveAs('uploads_organisasi_eng/moa/' . $model->doc_moa->baseName . '.' . $model->doc_moa->extension);
                $model->doc_moa = $model->doc_moa->baseName . '.' . $model->doc_moa->extension;
            }
            if ($model->doc_imp) {
                $model->doc_imp->saveAs('uploads_organisasi_eng/imp/' . $model->doc_imp->baseName . '.' . $model->doc_imp->extension);
                $model->doc_imp = $model->doc_imp->baseName . '.' . $model->doc_imp->extension;
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
     * Updates an existing TbOrganisasiEng model.
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
     * Deletes an existing TbOrganisasiEng model.
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
     * Finds the TbOrganisasiEng model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TbOrganisasiEng the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbOrganisasiEng::findOne(['id' => $id])) !== null) {
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
                    $model = new TbOrganisasiEng();
                    $model->organization_name = (string)$sheetData[$baseRow]['B'];
                    $model->organizational_field = (string)$sheetData[$baseRow]['C'];
                    $model->collaboration_title = (string)$sheetData[$baseRow]['D'];
                    $model->type_of_cooperation = (string)$sheetData[$baseRow]['E'];
                    $model->collaboration_year_number = (string)$sheetData[$baseRow]['F'];
                    $model->start_date = (string)$sheetData[$baseRow]['G'];
                    $model->end_date = (string)$sheetData[$baseRow]['H'];
                    $model->doc_mou = (string)$sheetData[$baseRow]['I'];
                    $model->doc_moa = (string)$sheetData[$baseRow]['J'];
                    $model->doc_imp = (string)$sheetData[$baseRow]['K'];
                    $model->initiator = (string)$sheetData[$baseRow]['L'];
                    $model->description = (string)$sheetData[$baseRow]['M'];
                    $model->main_email = (string)$sheetData[$baseRow]['N'];
                    $model->phone_number = (string)$sheetData[$baseRow]['O'];
                    $model->fax_number = (string)$sheetData[$baseRow]['P'];
                    $model->website = (string)$sheetData[$baseRow]['Q'];
                    $model->address = (string)$sheetData[$baseRow]['R'];
                    $model->city = (string)$sheetData[$baseRow]['S'];
                    $model->state = (string)$sheetData[$baseRow]['T'];
                    $model->country = (string)$sheetData[$baseRow]['U'];
                    $model->zipcode = (string)$sheetData[$baseRow]['V'];
                    $model->contact_person = (string)$sheetData[$baseRow]['W'];
                    $model->map_link = (string)$sheetData[$baseRow]['X'];
                    $model->facebook_link = (string)$sheetData[$baseRow]['Y'];
                    $model->instagram_link = (string)$sheetData[$baseRow]['Z'];
                    $model->twitter_link = (string)$sheetData[$baseRow]['AA'];
                    $model->youtube_link = (string)$sheetData[$baseRow]['AB'];
                    $model->user_id = (string)$sheetData[$baseRow]['AC'];
                    $model->save();
                    //die(print_r($model->errors));
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
        $searchModel = new TbOrganisasiEngSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export') . '/templates/opentbs/organization-data.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no = 1;
        foreach ($dataProvider->getModels() as $industri) {
            $data[] = [
                'no' => $no++,
                'organization_name'         => $industri->organization_name,
                'organizational_field'      => $industri->organizational_field,
                'collaboration_title'       => $industri->collaboration_title,
                'type_of_cooperation'       => $industri->type_of_cooperation,
                'collaboration_year_number' => $industri->collaboration_year_number,
                'start_date'                => $industri->start_date,
                'end_date'                  => $industri->end_date,
                'doc_mou'                   => $industri->doc_mou,
                'doc_moa'                   => $industri->doc_moa,
                'doc_imp'                   => $industri->doc_imp,
                'initiator'                 => $industri->initiator,
                'description'               => $industri->description,
                'main_email'                => $industri->main_email,
                'phone_number'              => $industri->phone_number,
                'fax_number'                => $industri->fax_number,
                'website'                   => $industri->website,
                'address'                   => $industri->address,
                'city'                      => $industri->city,
                'state'                     => $industri->state,
                'country'                   => $industri->country,
                'zipcode'                   => $industri->zipcode,
                'contact_person'            => $industri->contact_person,
                'map_link'       => $industri->map_link,
                'facebook_link'  => $industri->facebook_link,
                'instagram_link' => $industri->instagram_link,
                'twitter_link'   => $industri->twitter_link,
                'youtube_link'   => $industri->youtube_link
            ];
        }

        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'organization-data.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    }
}
