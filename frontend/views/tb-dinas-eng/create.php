<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbDinasEng $model */

$this->title = 'Create Tb Dinas Eng';
$this->params['breadcrumbs'][] = ['label' => 'Tb Dinas Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-dinas-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
