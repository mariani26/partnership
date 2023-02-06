<?php

use backend\models\TbIndustri;
use yii\helpers\Html\file;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\TbIndustriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Industri';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-industri-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<!-- <?= Html::a('Create Tb Industri', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Import Data', ['import'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Data', ['export-excel2'], ['class' => 'btn btn-success']) ?> -->

	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); 
	?>

	<!-- <?= GridView::widget([
				'dataProvider' => $dataProvider,
				'filterModel' => $searchModel,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],

					// 'id',
					'nama_industri',
					'no_identitas',
					'identitas_derektur',
					'bidang_usaha',
					'judul_kerjasama',
					'jenis_kerjasama',
					'no_thn_kerjasama',

					[
						'attribute' => 'tgl_mulai',
						'format' => ['date'],
						'contentOptions' => ['style' => 'white-space: nowrap']
					],
					[
						'attribute' => 'tgl_akhir',
						'format' => ['date'],
						'contentOptions' => ['style' => 'white-space: nowrap']
					],

					'dok_mou',
					// [
					//     'label' => 'Dok_Mou',
					//     'attribute' => 'dok_mou',
					//     'content' => function ($model) {
					//         /** @var \common\models\Produk $model */
					//         return yii\helpers\Html::img($model->getImageUrl(), ['style' => 'width: 50px']);
					//     }
					// ],
					'dok_moa',
					'dok_imp',
					//'inisiator',
					//'keterangan',
					//'email_utama:email',
					//'email_cadangan:email',
					//'no_telp',
					//'no_fax',
					//'website',
					//'alamat:ntext',
					//'kelurahan',
					//'kecamatan',
					//'kota',
					//'kode_pos',
					//'rt_rw',
					//'kontak_person',
					//'link_maps:ntext',
					//'link_facebook:ntext',
					//'link_instagram:ntext',
					//'link_twitter:ntext',
					//'link_youtube:ntext',
					//'id_user',
					[
						'class' => ActionColumn::className(),
						'urlCreator' => function ($action, TbIndustri $model, $key, $index, $column) {
							return Url::toRoute([$action, 'id' => $model->id]);
						}
					],
				],
			]); ?> -->

	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Card-->
			<div class="card">
				<!--begin::Card header-->
				<div class="card-header border-0 pt-6">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-1 position-absolute ms-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Industri" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Toolbar-->
						<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
							<p>
								<?= Html::a('Import', ['import'], ['class' => 'btn btn-light-primary']) ?>
								<?= Html::a('Export', ['export-excel2'], ['class' => 'btn btn-light-primary']) ?>
								<?= Html::a('Add Industri', ['signup'], ['class' => 'btn btn-light-primary']) ?>
							</p>
						</div>
						<!--end::Toolbar-->
						<!--begin::Group actions-->
						<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
							<div class="fw-bolder me-5">
								<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
							</div>
							<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
						</div>
						<!--end::Group actions-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
									</div>
								</th>
								<th class="">Nama Industri</th>
								<th class="">No Identitas</th>
								<th class="">Identitas Direktur</th>
								<th class="">Bidang Usaha</th>
								<th class="">Judul Kerjasama</th>
								<th class="">Jenis Kerjasama</th>
								<!-- <th class="">Nomor dan Tahun Kerjasama</th> -->
								<th class="">Tanggal Mulai</th>
								<th class="">Tanggal Akhir</th>
								<th class="">Dok Mou</th>
								<th class="">Dok Moa</th>
								<th class="">Dok Imp</th>
								<!-- <th class="">Inisiator</th>
													<th class="">Keterangan</th> -->
								<th class="">Email Utama</th>
								<th class="">Email Cadangan</th>
								<!-- <th class="">Nomor Telepon</th> -->
								<!-- <th class="">No Fax</th>
													<th class="">Website</th>
													<th class="">Alamat</th>
													<th class="">Kelurahan</th>
													<th class="">Kecamatan</th>
													<th class="">Kota</th>
													<th class="">Kode Pos</th>
													<th class="">Rt/Rw</th>
													<th class="">Kontak Person</th>
													<th class="">Link Maps</th>
													<th class="">Link Facebook</th>
													<th class="">Link Instagram</th>
													<th class="">Link Twitter</th>
													<th class="">Link Youtube</th>
													<th class="">Id User</th> -->
								<th class="">Actions</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-bold text-gray-600">
							<?php foreach ($tb_industri as $a) { ?>
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->

									<td><?= $a->nama_industri ?></td>
									<td><?= $a->no_identitas ?></td>
									<td><?= $a->identitas_derektur ?></td>
									<td><?= $a->bidang_usaha ?></a></td>
									<td><?= $a->judul_kerjasama ?></td>
									<td><?= $a->jenis_kerjasama ?></td>
									<!-- <td><?= $a->no_thn_kerjasama ?></td> -->
									<td><?= $a->tgl_mulai ?></td>
									<td><?= $a->tgl_akhir ?></td>
									<td>
										<?php if ($a->dok_mou) { ?>
											<a href="<?= Yii::getAlias('@web/uploads_industri/mou/' . $a->dok_mou) ?>" id="viewdokmu" target="_blank"><?= $a->dok_mou ?></a>
										<?php } ?>
									</td>
									<td>
										<?php if ($a->dok_moa) { ?>
											<a href="<?= Yii::getAlias('@web/uploads_industri/moa/' . $a->dok_moa) ?>" id="viewdokmu" target="_blank"><?= $a->dok_moa ?></a>
										<?php } ?>
									</td>
									<td>
										<?php if ($a->dok_imp) { ?>
											<a href="<?= Yii::getAlias('@web/uploads_industri/imp/' . $a->dok_imp) ?>" id="viewdokmu" target="_blank"><?= $a->dok_imp ?></a>
										<?php } ?>
									</td>
									<!-- <td><?= $a->inisiator ?></td>
													<td><?= $a->keterangan ?></td> -->
									<td><?= $a->email_utama ?></td>
									<td><?= $a->email_cadangan ?></td>
									<!-- <td><?= $a->no_telp ?></td>
													<td><?= $a->no_fax ?></td>
													<td><?= $a->website ?></td>
													<td><?= $a->alamat ?></td>
													<td><?= $a->kelurahan ?></td>
													<td><?= $a->kecamatan ?></td>
													<td><?= $a->kota ?></td>
													<td><?= $a->kode_pos ?></td>
													<td><?= $a->rt_rw ?></td>
													<td><?= $a->kontak_person ?></td>
													<td><?= $a->link_maps ?></td>
													<td><?= $a->link_facebook ?></td>
													<td><?= $a->link_instagram ?></td>
													<td><?= $a->link_twitter ?></td>
													<td><?= $a->link_youtube ?></td>
													<td><?= $a->id_user ?></td> -->
									<!--end::Date=-->
									<!--begin::Action=-->
									<td class="text-end">
										<p>
											<!-- <?= Html::a('Update', ['update', 'id' => $a->id], ['class' => 'btn btn-primary']) ?> -->
											<?= Html::a('&nbsp; View&nbsp;', ['view', 'id' => $a->id], ['class' => 'btn btn-light-primary']) ?>
											<?= Html::a('Delete', ['delete', 'id' => $a->id], [
												'class' => 'btn btn-light-danger',
												'data' => [
													'confirm' => 'Are you sure you want to delete this item?',
													'method' => 'post',
												],
											]) ?>
										</p>
									</td>
									<!--end::Action=-->
								</tr>
							<?php } ?>

						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
			<!--begin::Modals-->

			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>

</div>

<script>
	function dokMu() {
		var iframe = $("#iframedokmu");
		iframe.attr("src", ifrae.daa('src'));
	}
</script>