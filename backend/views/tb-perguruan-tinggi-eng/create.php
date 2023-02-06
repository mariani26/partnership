<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbPerguruanTinggiEng $model */

$this->title = 'Create Perguruan Tinggi';
$this->params['breadcrumbs'][] = ['label' => 'Tb Perguruan Tinggi Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-perguruan-tinggi-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
