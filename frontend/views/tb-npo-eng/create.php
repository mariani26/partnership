<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbNpoEng $model */

$this->title = 'Create Tb Npo Eng';
$this->params['breadcrumbs'][] = ['label' => 'Tb Npo Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-npo-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
