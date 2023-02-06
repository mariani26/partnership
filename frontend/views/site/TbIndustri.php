<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var frontend\models\SearchTbIndustri $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tb Industris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-industri-index">
    <div class="container-fluid position-relative">
        <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
            <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                    <!-- <li class="nav-item" data-option-value="*"><a class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Show All</a></li> -->
                    <li class="nav-item active" data-option-value=".new"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['TbIndustri']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Industri</a></li>
                    <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-sekolah/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">sekolah</a></li>
                    <li class="nav-item" data-option-value=".shop"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-perguruan-tinggi/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Perguruan Tinggi</a></li>
                    <li class="nav-item" data-option-value=".onepage"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-dinas/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Pemerintah</a></li>
                    <li class="nav-item" data-option-value=".business"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-organisasi/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Organisasi</a></li>
                    <li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-npo/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Non Profit Organisasi</a></li>

                </ul>
            </div>
        </div>

    </div>

    <html>

    <head> </head>

    <body>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Industri</h3>
            </div><!-- /.box-header -->
            <div class="dataTables_length" id="tablepress-34_length"><label>Show <select name="tablepress-34_length" aria-controls="tablepress-34" class="">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select> entries</label></div>


            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Nama Industri</th>
                            <th>No Identitas</th>
                            <th>Identitas Direktur</th>
                            <th>Bidang Usaha</th>
                            <th>Judul Kerjasama</th>
                            <th>Jenis Kerjasama</th>
                            <th>No Tahun Kerjasama</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Dok MoU</th>
                            <th>Dok MoA</th>
                            <th>Dok IMP</th>
                            <th>Inisiator</th>
                            <th>Keterangan</th>
                            <th>Email Utama</th>
                            <th>Email Cadangan</th>
                            <th>No Telp</th>
                            <th>No Fax</th>
                            <th>Website</th>
                            <th>Alamat</th>
                            <!-- <th>Kelurahan</th>
                                <th>Kecamatan</th> -->
                            <th>Kota</th>
                            <th>Kode Pos</th>
                            <!-- <th>RT-RW</th> -->
                            <th>Kontak Person</th>
                            <th>Link Maps</th>
                            <th>Link facebook</th>
                            <th>Link Instagram</th>
                            <th>Link Twitter</th>
                            <th>Link Youtube</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($modelTbIndustri as $key => $val) : ?>

                            <tr>

                                <td><?= $a->nama_industri ?></td>
                                <td><?= $a->no_identitas ?></td>
                                <td><?= $a->identitas_derektur ?></td>
                                <td><?= $a->bidang_usaha ?></td>
                                <td><?= $a->judul_kerjasama ?></td>
                                <td><?= $a->jenis_kerjasama ?></td>
                                <td><?= $a->no_thn_kerjasama ?></td>
                                <td><?= $a->tgl_mulai ?></td>
                                <td><?= $a->tgl_akhir ?></td>
                                <td><?= $a->dok_mou ?></td>
                                <td><?= $a->dok_moa ?></td>
                                <td><?= $a->dok_imp ?></td>
                                <td><?= $a->inisiator ?></td>
                                <td><?= $a->keterangan ?></td>
                                <td><?= $a->email_utama ?></td>
                                <td><?= $a->email_cadangan ?></td>
                                <td><?= $a->no_telp ?></td>
                                <td><?= $a->no_fax ?></td>
                                <td><?= $a->website ?></td>
                                <td><?= $a->alamat ?></td>

                                <td><?= $a->kota ?></td>
                                <td><?= $a->kode_pos ?></td>

                                <td><?= $a->kontak_person ?></td>
                                <td><?= $a->link_maps ?></td>
                                <td><?= $a->link_facebook ?></td>
                                <td><?= $a->link_instagram ?></td>
                                <td><?= $a->link_twitter ?></td>
                                <td><?= $a->link_youtube ?></td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                    <!-- <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>

                    </tr>
                </tfoot> -->
                </table>
            </div><!-- /.box-body -->
        </div>
    </body>

    </html>

</div>