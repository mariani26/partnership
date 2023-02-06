<?php

use backend\models\ChooseEng;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ChooseEngSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Choose Engs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choose-eng-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Choose Eng', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title1',
            'title2',
            'isi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ChooseEng $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
