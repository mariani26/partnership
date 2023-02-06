<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbPerguruanTinggi $model */

$this->title = 'Create Perguruan Tinggi';
$this->params['breadcrumbs'][] = ['label' => 'Tb Perguruan Tinggis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-perguruan-tinggi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
