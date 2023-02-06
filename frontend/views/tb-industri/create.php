<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbIndustri $model */

$this->title = 'Create Tb Industri';
$this->params['breadcrumbs'][] = ['label' => 'Tb Industris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-industri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
