<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbNpo $model */

$this->title = 'Create Npo';
$this->params['breadcrumbs'][] = ['label' => 'Tb Npos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-npo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
