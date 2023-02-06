<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbOrganisasi $model */

$this->title = 'Create Organisasi';
$this->params['breadcrumbs'][] = ['label' => 'Tb Organisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-organisasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
