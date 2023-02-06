<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbDinasEng $model */

$this->title = 'Update Tb Dinas Eng: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Dinas Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-dinas-eng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
