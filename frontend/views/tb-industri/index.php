<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\bootstrap5\ActiveForm;
use frontend\models\TbIndustri;

/** @var yii\web\View $this */
/** @var frontend\models\SearchTbIndustri $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tb Industris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-industri-index">
    <div class="container-fluid position-relative">
        <div class="container-fluid position-relative">
            <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                        <!-- <li class="nav-item" data-option-value="*"><a class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Show All</a></li> -->
                        <li class="nav-item active" data-option-value=".new"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-industri/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Industri</a></li>
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

            <div class="row" data-select2-id="16">
                <div class="col" data-select2-id="15">
                    <section class="card card-admin" data-select2-id="14">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                            </div>

                            <h4 class="card-title" align="center">DAFTAR KERJASAMA UNP</h4>
                            <h4 class="card-title" align="center">DENGAN INDUSTRI</h4>
                        </header>
                        <div class="card-body">

                            <div id="datatable-default_wrapper" class="dataTables_wrapper no-footer" data-select2-id="datatable-default_wrapper">
                                <div class="row" data-select2-id="13">
                                    <div class="col-lg-10" data-select2-id="12">
                                        <div class="dataTables_length" id="datatable-default_length" data-select2-id="datatable-default_length"><label data-select2-id="11"><select name="datatable-default_length" aria-controls="datatable-default" class="select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option value="10" data-select2-id="3">10</option>
                                                    <option value="25" data-select2-id="19">25</option>
                                                    <option value="50" data-select2-id="20">50</option>
                                                    <option value="100" data-select2-id="21">100</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 52px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-datatable-default_length-19-container"><span class="select2-selection__rendered" id="select2-datatable-default_length-19-container" role="textbox" aria-readonly="true" title="10"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> records per page</label></div>
                                    </div>
                                    <div class="col-lg-2">
                                        <?php echo $this->render('_search', ['model' => $searchModel]);
                                        ?> </div>
                                </div>
                            </div>
                        </div>
                        <?php //echo $this->render('_search', ['model' => $searchModel]);
                        ?>
                        <div class="table-responsive">
                            <?php echo GridView::widget([
                                'dataProvider' => $dataProvider,
                                //'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],


                                    'nama_industri',
                                    'bidang_usaha',
                                    'judul_kerjasama',
                                    'jenis_kerjasama',
                                    'no_thn_kerjasama',
                                    'tgl_mulai',
                                    'tgl_akhir',
                                    'dok_mou',
                                    'dok_moa',
                                    'dok_imp',
                                    'inisiator',
                                    'email_utama',
                                    'alamat',
                                    'kota',
                                    'kode_pos',

                                ],

                            ]);
                            ?>
                        </div>
                        <!-- <div class="table-responsive">
                                <table class="table table-bordered table-striped mb-0 dataTable no-footer" id="datatable-default" role="grid" style="width: 1053px;">

                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297.667px;">Nama Industri</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292.333px;">Bidang Usaha</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 373.333px;">Judul Kerjasama</th>

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

                                            <th>Kota</th>
                                            <th>Kode Pos</th>

                                            <th>Kontak Person</th>
                                            <th>Link Maps</th>
                                            <th>Link facebook</th>
                                            <th>Link Instagram</th>
                                            <th>Link Twitter</th>
                                            <th>Link Youtube</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <?php foreach ($tb_industri as $a) { ?>
                                        <tr>

                                            <td><?= $a->nama_industri ?></td>

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
                                    <?php } ?>
                                    </tr>

                                    </tbody>
                                </table>
                                <br>
                            </div> -->
                        <br>

                </div>
            </div>
            <ul class="pagination float-end">

                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
            </section>


    </div>
    </body>

    </html>

</div>