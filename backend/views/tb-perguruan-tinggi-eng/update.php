<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbPerguruanTinggiEng $model */

$this->title = 'Update Tb Perguruan Tinggi Eng: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Perguruan Tinggi Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-perguruan-tinggi-eng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
