<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbSekolah $model */

$this->title = 'Update Tb Sekolah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Sekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-sekolah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
