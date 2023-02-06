<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbIndustri $model */

$this->title = 'Update Tb Industri: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Industris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-industri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
