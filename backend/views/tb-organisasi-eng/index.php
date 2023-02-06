<?php

use backend\models\TbOrganisasiEng;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\TbOrganisasiEngSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-organisasi-eng-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<!-- <?= Html::a('Create Tb Organisasi Eng', ['create'], ['class' => 'btn btn-success']) ?> -->
		<!-- <?= Html::a('Data Import', ['import'], ['class' => 'btn btn-success']) ?>
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
					'organization_name',
					'organizational_field',
					'collaboration_title',
					'type_of_cooperation',
					'collaboration_year_number',
					[
						'attribute' => 'start_date',
						'format' => ['date'],
						'contentOptions' => ['style' => 'white-space: nowrap']
					],
					[
						'attribute' => 'end_date',
						'format' => ['date'],
						'contentOptions' => ['style' => 'white-space: nowrap']
					],
					'doc_mou',
					'doc_moa',
					'doc_imp',
					//'initiator',
					//'description',
					//'main_email:email',
					//'phone_number',
					//'fax_number',
					//'website',
					//'address:ntext',
					//'city',
					//'state',
					//'country',
					//'zipcode',
					//'contact_person',
					//'map_link:ntext',
					//'facebook_link:ntext',
					//'instagram_link:ntext',
					//'twitter_link:ntext',
					//'youtube_link:ntext',
					//'user_id',
					[
						'class' => ActionColumn::className(),
						'urlCreator' => function ($action, TbOrganisasiEng $model, $key, $index, $column) {
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
							<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Organization" />
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
								<?= Html::a('Add Organization', ['signupeng'], ['class' => 'btn btn-light-primary']) ?>
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
								<th class="">Organization Name</th>
								<th class="">Organizational Field</th>
								<th class="">Collaboration Title</th>
								<th class="">Type of Cooperation</th>
								<!-- <th class="">Collaboration Year Number</th> -->
								<th class="">Start Date</th>
								<th class="">End Date</th>
								<th class="">Doc Mou</th>
								<th class="">Doc Moa</th>
								<th class="">Doc Imp</th>
								<!-- <th class="">Initiator</th>
													<th class="">Description</th> -->
								<th class="">Main Email</th>
								<!-- <th class="">Phone Number</th> -->
								<!-- <th class="">Fax Number</th>
													<th class="">Website</th>
													<th class="">Address</th>
													<th class="">City</th>
													<th class="">State</th>
													<th class="">Country</th>
													<th class="">Zipcode</th>
													<th class="">Contact Person</th>
													<th class="">Map Link</th>
													<th class="">Facebook Link</th>
													<th class="">Instagram Link</th>
													<th class="">Twitter Link</th>
													<th class="">Youtube Link</th>
													<th class="">User Id</th> -->
								<th class="">Actions</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-bold text-gray-600">
							<?php foreach ($tb_organisasi_eng as $a) { ?>
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->

									<td><?= $a->organization_name ?></td>
									<td><?= $a->organizational_field ?></td>
									<td><?= $a->collaboration_title ?></td>
									<td><?= $a->type_of_cooperation ?></td>
									<!-- <td><?= $a->collaboration_year_number ?></td> -->
									<td><?= $a->start_date ?></td>
									<td><?= $a->end_date ?></td>
									<td>
										<?php if ($a->doc_mou) { ?>
											<a href="<?= Yii::getAlias('@web/uploads_organisasi_eng/mou/' . $a->doc_mou) ?>" id="viewdokmu" target="_blank"><?= $a->doc_mou ?></a>
										<?php } ?>
									</td>
									<td>
										<?php if ($a->doc_moa) { ?>
											<a href="<?= Yii::getAlias('@web/uploads_organisasi_eng/moa/' . $a->doc_moa) ?>" id="viewdokmu" target="_blank"><?= $a->doc_moa ?></a>
										<?php } ?>
									</td>
									<td>
										<?php if ($a->doc_imp) { ?>
											<a href="<?= Yii::getAlias('@web/uploads_organisasi_eng/imp/' . $a->doc_imp) ?>" id="viewdokmu" target="_blank"><?= $a->doc_imp ?></a>
										<?php } ?>
									</td>
									<!-- <td><?= $a->initiator ?></td>
													<td><?= $a->description ?></td> -->
									<td><?= $a->main_email ?></td>
									<!-- <td><?= $a->phone_number ?></td>
													<td><?= $a->fax_number ?></td>
													<td><?= $a->website ?></td>
													<td><?= $a->address ?></td>
													<td><?= $a->city ?></td>
													<td><?= $a->state ?></td>
													<td><?= $a->country ?></td>
													<td><?= $a->zipcode ?></td>
													<td><?= $a->contact_person ?></td>
													<td><?= $a->map_link ?></td>
													<td><?= $a->facebook_link ?></td>
													<td><?= $a->instagram_link ?></td>
													<td><?= $a->twitter_link ?></td>
													<td><?= $a->youtube_link ?></td>
													<td><?= $a->user_id ?></td> -->
									<!--end::Date=-->
									<!--begin::Action=-->
									<td class="text-end">
										<p>
											<!-- <?= Html::a('Update', ['update', 'id' => $a->id], ['class' => 'btn btn-light-primary']) ?> -->
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