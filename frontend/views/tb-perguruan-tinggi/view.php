<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TbPerguruanTinggi $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Perguruan Tinggis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-perguruan-tinggi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_peguruan_tinggi',
            'bidang_kerjasama',
            'judul_kerjasama',
            'jenis_kerjasama',
            'no_thn_kerjasama',
            'tgl_mulai',
            'tgl_akhir',
            'dok_mou',
            'dok_moa',
            'dok_imp',
            'inisiator',
            'keterangan',
            'fakultas',
            'email_utama:email',
            'no_telp',
            'no_fax',
            'website',
            'alamat:ntext',
            'kelurahan',
            'kecamatan',
            'kota',
            'kode_pos',
            'rt_rw',
            'kontak_person',
            'link_maps:ntext',
            'link_facebook:ntext',
            'link_instagram:ntext',
            'link_twitter:ntext',
            'link_youtube:ntext',
            'id_user',
        ],
    ]) ?>

</div>