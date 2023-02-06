<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbNpoEng $model */

$this->title = 'Update Tb Npo Eng: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Npo Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-npo-eng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
