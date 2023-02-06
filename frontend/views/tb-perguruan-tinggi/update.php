<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbPerguruanTinggi $model */

$this->title = 'Update Tb Perguruan Tinggi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Perguruan Tinggis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-perguruan-tinggi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
