<?php

use backend\models\About;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\AbouttSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Create About', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title',
            'isi:ntext',
            'gambar1',
            'gambar2',
            'gambar3',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, About $model, $key, $index, $column) {
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
												<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search About" />
											</div>
											<!--end::Search-->
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Toolbar-->
											    <p>
                                                    <!-- <?= Html::a('Import', ['import'], ['class' => 'btn btn-light-primary']) ?> -->
                                                    <!-- <?= Html::a('Export', ['export-excel2'], ['class' => 'btn btn-light-primary']) ?> -->
                                                    <?= Html::a('Add About', ['create'], ['class' => 'btn btn-light-primary']) ?>
                                                </p>
											<!--end::Toolbar-->
											<!--begin::Group actions-->
											<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
												<div class="fw-bolder me-5">
												<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
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
													<th class="">Title</th>
													<th class="">Isi</th>
													<!-- <th class="">Gambar1</th>
													<th class="">Gambar2</th>
													<th class="">Gambar3</th> -->
													<th class="">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
                                            <?php foreach ($about as $a) { ?>
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													
													<td><?= $a->title?></td>
													<td><?= $a->isi?></td>
													<!-- <td><?= $a->gambar1?></td>
													<td><?= $a->gambar2?></td>
													<td><?= $a->gambar3?></td> -->
													
													<!--begin::Action=-->
													<td class="text-end">
														<p>														
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
														<!--end::Menu-->
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
								
								<!--begin::Modal - Adjust Balance-->
								<div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Export Customers</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_customers_export_form" class="form" action="#">
													<!--begin::Input group-->
													<div class="fv-row mb-10">
														<!--begin::Label-->
														<label class="fs-5 fw-bold form-label mb-5">Select Export Format:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<select data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
															<option value="excell">Excel</option>
															<option value="pdf">PDF</option>
															<option value="cvs">CVS</option>
															<option value="zip">ZIP</option>
														</select>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-10">
														<!--begin::Label-->
														<label class="fs-5 fw-bold form-label mb-5">Select Date Range:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Row-->
													<div class="row fv-row mb-15">
														<!--begin::Label-->
														<label class="fs-5 fw-bold form-label mb-5">Payment Type:</label>
														<!--end::Label-->
														<!--begin::Radio group-->
														<div class="d-flex flex-column">
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-bold">All</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-bold">Visa</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="3" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-bold">Mastercard</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid">
																<input class="form-check-input" type="checkbox" value="4" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-bold">American Express</span>
															</label>
															<!--end::Radio button-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Row-->
													<!--begin::Actions-->
													<div class="text-center">
														<button type="reset" id="kt_customers_export_cancel" class="btn btn-light me-3">Discard</button>
														<button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - New Card-->
								<!--end::Modals-->
							</div>
							<!--end::Container-->
    </div>


</div>
