<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\FaqEng $model */

$this->title = 'Update Faq Eng: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Faq Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faq-eng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
