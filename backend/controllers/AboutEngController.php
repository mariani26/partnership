<?php

namespace backend\controllers;

use backend\models\AboutEng;
use backend\models\AboutEngSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\web\UploadedFile;

/**
 * AboutEngController implements the CRUD actions for AboutEng model.
 */
class AboutEngController extends Controller
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
     * Lists all AboutEng models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AboutEngSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $about_eng = AboutEng::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'about_eng' => $about_eng,
        ]);
    }

    /**
     * Displays a single AboutEng model.
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
     * Creates a new AboutEng model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AboutEng();
        //$user = Yii::$app->user->identity;
        // $model = $user->getAlamat();
        $success = false;
        if ($model->load(Yii::$app->request->post())) {
            $success = true;
            $model->save(false);

            $model->gambar1 = UploadedFile::getInstance($model, 'gambar1');
            $model->gambar2 = UploadedFile::getInstance($model, 'gambar2');
            $model->gambar3 = UploadedFile::getInstance($model, 'gambar3');
            if ($model->gambar1) {
                $model->gambar1->saveAs('uploads_about_eng/' . $model->gambar1->baseName . '.' . $model->gambar1->extension);
                $model->gambar1 = $model->gambar1->baseName . '.' . $model->gambar1->extension;
                $model->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
                return $this->redirect(['view', 'id' => $model->id]);
            }
            if ($model->gambar2) {
                $model->gambar2->saveAs('uploads_about_eng/' . $model->gambar2->baseName . '.' . $model->gambar2->extension);
                $model->gambar2 = $model->gambar2->baseName . '.' . $model->gambar2->extension;
                $model->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
                return $this->redirect(['view', 'id' => $model->id]);
            }
            if ($model->gambar3) {
                $model->gambar3->saveAs('uploads_about_eng/' . $model->gambar3->baseName . '.' . $model->gambar3->extension);
                $model->gambar3 = $model->gambar3->baseName . '.' . $model->gambar3->extension;
                $model->save(false);
                Yii::$app->session->setFlash('success', 'File berhasil diupload');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
            'success' => $success
        ]);
    }

    /**
     * Updates an existing AboutEng model.
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
     * Deletes an existing AboutEng model.
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
     * Finds the AboutEng model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return AboutEng the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AboutEng::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
