<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\ChooseEng $model */

$this->title = 'Create Choose Eng';
$this->params['breadcrumbs'][] = ['label' => 'Choose Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choose-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
