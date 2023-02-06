<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbOrganisasi $model */

$this->title = 'Update Tb Organisasi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Organisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-organisasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
