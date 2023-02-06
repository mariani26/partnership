<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\AboutEng $model */

$this->title = 'Update About Eng: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'About Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-eng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
