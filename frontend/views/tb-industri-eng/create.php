<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbIndustriEng $model */

$this->title = 'Create Tb Industri Eng';
$this->params['breadcrumbs'][] = ['label' => 'Tb Industri Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-industri-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
