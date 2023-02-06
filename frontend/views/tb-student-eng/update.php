<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbStudentEng $model */

$this->title = 'Update Tb Student Eng: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tb Student Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-student-eng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
