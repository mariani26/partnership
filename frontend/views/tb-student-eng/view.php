<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TbStudentEng $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tb Student Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-student-eng-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'date_of_birth',
            'gender',
            'address',
            'city',
            'state',
            'country',
            'zipcode',
            'major',
            'original_college',
            'email:email',
            'phone_number',
            'application_letter',
            'biodata',
            'photo',
            'certificate',
            'passport',
            'financial_guarantee_letter',
            'health_certificate',
            'statement_letter',
            'campus_recommendation_letter',
            'achievement',
            'user_id',
        ],
    ]) ?>

</div>
