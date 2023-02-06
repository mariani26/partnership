<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\FaqEng $model */

$this->title = 'Create Faq';
$this->params['breadcrumbs'][] = ['label' => 'Faq Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
