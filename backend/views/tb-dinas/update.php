<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbDinas $model */

$this->title = 'Update Tb Dinas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-dinas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
