<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbIndustriEng $model */

$this->title = 'Create Industri';
$this->params['breadcrumbs'][] = ['label' => 'Tb Industri Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-industri-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
