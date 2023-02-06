<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbDinas $model */

$this->title = 'Create Tb Dinas';
$this->params['breadcrumbs'][] = ['label' => 'Tb Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-dinas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
