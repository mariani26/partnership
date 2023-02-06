<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbPerguruanTinggiEng $model */

$this->title = 'Create Tb Perguruan Tinggi Eng';
$this->params['breadcrumbs'][] = ['label' => 'Tb Perguruan Tinggi Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-perguruan-tinggi-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
