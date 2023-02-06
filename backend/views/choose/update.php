<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Choose $model */

$this->title = 'Update Choose: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Chooses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="choose-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
