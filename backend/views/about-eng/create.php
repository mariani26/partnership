<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\AboutEng $model */

$this->title = 'Create About';
$this->params['breadcrumbs'][] = ['label' => 'About Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
