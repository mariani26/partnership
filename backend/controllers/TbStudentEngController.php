<?php

namespace backend\controllers;

use backend\models\User;
use backend\models\TbStudentEng;
use backend\models\TbStudentEngSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Yii;
use PhpOffice\PhpSpreadsheet\IOFactory;
use backend\models\SignupFormStudentEng;
use backend\models\SignupForm;
use yii\helpers\Url;

/**
 * TbStudentEngController implements the CRUD actions for TbStudentEng model.
 */
class TbStudentEngController extends Controller
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
     * Lists all TbStudentEng models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbStudentEngSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $tb_student_eng = TbStudentEng::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tb_student_eng' => $tb_student_eng,
        ]);
    }

    /**
     * Displays a single TbStudentEng model.
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

        $modelStudentEng = new SignupFormStudentEng();
        if ($modelStudentEng->load(Yii::$app->request->post()) && $modelStudentEng->signup_studenteng()) {
            $user = User::find()->where(['username' =>  $modelStudentEng->username])->one();
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(Url::toRoute(['create', 'id' => $user->id]));
        }


        return $this->render('signupeng', [
            'model' => $model,
            'modelStudentEng' => $modelStudentEng,

        ]);
    }

    /**
     * Creates a new TbStudentEng model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $model = new TbStudentEng();
        $model->user_id = $id;
        // $model = $user->getAlamat();
        $success = false;
        if ($model->load(Yii::$app->request->post())) {
            $success = true;

            $model->application_letter = UploadedFile::getInstance($model, 'application_letter');
            $model->biodata = UploadedFile::getInstance($model, 'biodata');
            $model->photo = UploadedFile::getInstance($model, 'photo');
            $model->certificate = UploadedFile::getInstance($model, 'certificate');
            $model->passport = UploadedFile::getInstance($model, 'passport');
            $model->financial_guarantee_letter = UploadedFile::getInstance($model, 'financial_guarantee_letter');
            $model->health_certificate = UploadedFile::getInstance($model, 'health_certificate');
            $model->statement_letter = UploadedFile::getInstance($model, 'statement_letter');
            $model->campus_recommendation_letter = UploadedFile::getInstance($model, 'campus_recommendation_letter');
            $model->achievement = UploadedFile::getInstance($model, 'achievement');

            if ($model->application_letter) {
                $model->application_letter->saveAs('uploads_student_eng/application_letter/' . $model->application_letter->baseName . '.' . $model->application_letter->extension);
                $model->application_letter = $model->application_letter->baseName . '.' . $model->application_letter->extension;
            }
            if ($model->biodata) {
                $model->biodata->saveAs('uploads_student_eng/biodata/' . $model->biodata->baseName . '.' . $model->biodata->extension);
                $model->biodata = $model->biodata->baseName . '.' . $model->biodata->extension;
            }
            if ($model->photo) {
                $model->photo->saveAs('uploads_student_eng/photo/' . $model->photo->baseName . '.' . $model->photo->extension);
                $model->photo = $model->photo->baseName . '.' . $model->photo->extension;
            }
            if ($model->certificate) {
                $model->certificate->saveAs('uploads_student_eng/certificate/' . $model->certificate->baseName . '.' . $model->certificate->extension);
                $model->certificate = $model->certificate->baseName . '.' . $model->certificate->extension;
            }
            if ($model->passport) {
                $model->passport->saveAs('uploads_student_eng/passport/' . $model->passport->baseName . '.' . $model->passport->extension);
                $model->passport = $model->passport->baseName . '.' . $model->passport->extension;
            }
            if ($model->financial_guarantee_letter) {
                $model->financial_guarantee_letter->saveAs('uploads_student_eng/financial_guarantee_letter/' . $model->financial_guarantee_letter->baseName . '.' . $model->financial_guarantee_letter->extension);
                $model->financial_guarantee_letter = $model->financial_guarantee_letter->baseName . '.' . $model->financial_guarantee_letter->extension;
            }
            if ($model->health_certificate) {
                $model->health_certificate->saveAs('uploads_student_eng/health_certificate/' . $model->health_certificate->baseName . '.' . $model->health_certificate->extension);
                $model->health_certificate = $model->health_certificate->baseName . '.' . $model->health_certificate->extension;
            }
            if ($model->statement_letter) {
                $model->statement_letter->saveAs('uploads_student_eng/statement_letter/' . $model->statement_letter->baseName . '.' . $model->statement_letter->extension);
                $model->statement_letter = $model->statement_letter->baseName . '.' . $model->statement_letter->extension;
            }
            if ($model->campus_recommendation_letter) {
                $model->campus_recommendation_letter->saveAs('uploads_student_eng/campus_recommendation_letter/' . $model->campus_recommendation_letter->baseName . '.' . $model->campus_recommendation_letter->extension);
                $model->campus_recommendation_letter = $model->campus_recommendation_letter->baseName . '.' . $model->campus_recommendation_letter->extension;
            }
            if ($model->achievement) {
                $model->achievement->saveAs('uploads_student_eng/achievement/' . $model->achievement->baseName . '.' . $model->achievement->extension);
                $model->achievement = $model->achievement->baseName . '.' . $model->achievement->extension;
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
     * Updates an existing TbStudentEng model.
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
     * Deletes an existing TbStudentEng model.
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
     * Finds the TbStudentEng model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TbStudentEng the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbStudentEng::findOne(['id' => $id])) !== null) {
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
                    $model = new TbStudentEng();
                    $model->name = (string)$sheetData[$baseRow]['B'];
                    $model->date_of_birth = (string)$sheetData[$baseRow]['C'];
                    $model->gender = (string)$sheetData[$baseRow]['D'];
                    $model->address = (string)$sheetData[$baseRow]['E'];
                    $model->city = (string)$sheetData[$baseRow]['F'];
                    $model->state = (string)$sheetData[$baseRow]['G'];
                    $model->country = (string)$sheetData[$baseRow]['H'];
                    $model->zipcode = (string)$sheetData[$baseRow]['I'];
                    $model->major = (string)$sheetData[$baseRow]['J'];
                    $model->original_college = (string)$sheetData[$baseRow]['K'];
                    $model->email = (string)$sheetData[$baseRow]['L'];
                    $model->phone_number = (string)$sheetData[$baseRow]['M'];
                    $model->application_letter = (string)$sheetData[$baseRow]['N'];
                    $model->biodata = (string)$sheetData[$baseRow]['O'];
                    $model->photo = (string)$sheetData[$baseRow]['P'];
                    $model->certificate = (string)$sheetData[$baseRow]['Q'];
                    $model->passport = (string)$sheetData[$baseRow]['R'];
                    $model->financial_guarantee_letter = (string)$sheetData[$baseRow]['S'];
                    $model->health_certificate = (string)$sheetData[$baseRow]['T'];
                    $model->statement_letter = (string)$sheetData[$baseRow]['U'];
                    $model->campus_recommendation_letter = (string)$sheetData[$baseRow]['V'];
                    $model->achievement = (string)$sheetData[$baseRow]['W'];
                    $model->user_id = (string)$sheetData[$baseRow]['X'];
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
        $searchModel = new TbStudentEngSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export') . '/templates/opentbs/student-data.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no = 1;
        foreach ($dataProvider->getModels() as $student) {
            $data[] = [
                'no' => $no++,
                'name' => $student->name,
                'date_of_birth' => $student->date_of_birth,
                'gender' => $student->gender,
                'address' => $student->address,
                'city' => $student->city,
                'state' => $student->state,
                'country' => $student->country,
                'zipcode' => $student->zipcode,
                'major' => $student->major,
                'original_college' => $student->original_college,
                'email' => $student->email,
                'phone_number' => $student->phone_number,
                'application_letter' => $student->application_letter,
                'biodata' => $student->biodata,
                'photo' => $student->photo,
                'certificate' => $student->certificate,
                'passport' => $student->passport,
                'financial_guarantee_letter' => $student->financial_guarantee_letter,
                'health_certificate' => $student->health_certificate,
                'statement_letter' => $student->statement_letter,
                'campus_recommendation_letter' => $student->campus_recommendation_letter,
                'achievement' => $student->achievement
            ];
        }

        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'student-data.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    }
}
