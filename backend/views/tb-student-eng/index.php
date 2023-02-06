<?php

use backend\models\TbStudentEng;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\TbStudentEngSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-student-eng-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<!-- <?= Html::a('Create Tb Student Eng', ['create'], ['class' => 'btn btn-success']) ?> -->
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
					'name',
					'date_of_birth',
					'gender',
					'address',
					//'city',
					//'state',
					'country',
					//'zipcode',
					'major',
					//'original_college',
					'email:email',
					'phone_number',
					//'application_letter',
					//'biodata',
					//'photo',
					//'certificate',
					//'passport',
					//'financial_guarantee_letter',
					//'health_certificate',
					//'statement_letter',
					//'campus_recommendation_letter',
					//'achievement',
					//'user_id',
					[
						'class' => ActionColumn::className(),
						'urlCreator' => function ($action, TbStudentEng $model, $key, $index, $column) {
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
							<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Student" />
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
								<?= Html::a('Add Student', ['signupeng'], ['class' => 'btn btn-light-primary']) ?>
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
								<th class="">Name</th>
								<th class="">Date of Birth</th>
								<th class="">Gender</th>
								<th class="">Address</th>
								<!-- <th class="">City</th>
													<th class="">State</th>
													<th class="">Country</th>
													<th class="">Zipcode</th> -->
								<th class="">Major</th>
								<th class="">Original College</th>
								<th class="">Email</th>
								<th class="">Phone Number</th>
								<!-- <th class="">Application Letter</th> -->
								<th class="">Biodata</th>
								<!-- <th class="">Photo</th> -->
								<!-- <th class="">Certificate</th>
													<th class="">Passport</th>
													<th class="">Financial Guarantee Letter</th>
													<th class="">Health Certificate</th>
													<th class="">Statement Letter</th>
													<th class="">Campus Recommendation Letter</th>
													<th class="">Achievement</th>
													<th class="">User Id</th> -->
								<th class="">Actions</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-bold text-gray-600">
							<?php foreach ($tb_student_eng as $a) { ?>
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->

									<td><?= $a->name ?></td>
									<td><?= $a->date_of_birth ?></td>
									<td><?= $a->gender ?></td>
									<td><?= $a->address ?></td>
									<!-- <td><?= $a->city ?></td>
													<td><?= $a->state ?></td>
													<td><?= $a->country ?></td>
													<td><?= $a->zipcode ?></td> -->
									<td><?= $a->major ?></td>
									<td><?= $a->original_college ?></td>
									<td><?= $a->email ?></td>
									<td><?= $a->phone_number ?></td>

									<!-- <td>
														<?php if ($a->application_letter) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/application_letter/' . $a->application_letter) ?>" id="viewdokmu" target="_blank"><?= $a->application_letter ?></a>
														<?php } ?>
													</td> -->
									<td>
										<?php if ($a->biodata) { ?>
											<a href="<?= Yii::getAlias('@web/uploads_student_eng/biodata/' . $a->biodata) ?>" id="viewdokmu" target="_blank"><?= $a->biodata ?></a>
										<?php } ?>
									</td>
									<!-- <td>
														<?php if ($a->photo) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/photo/' . $a->photo) ?>" id="viewdokmu" target="_blank"><?= $a->photo ?></a>                            
														<?php } ?>
													</td> -->
									<!-- <td>
														<?php if ($a->certificate) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/certificate/' . $a->certificate) ?>" id="viewdokmu" target="_blank"><?= $a->certificate ?></a>                            
														<?php } ?>
													</td> -->
									<!-- <td>
														<?php if ($a->passport) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/passport/' . $a->passport) ?>" id="viewdokmu" target="_blank"><?= $a->passport ?></a>                            
														<?php } ?>
													</td> -->
									<!-- <td>
														<?php if ($a->financial_guarantee_letter) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/financial_guarantee_letter/' . $a->financial_guarantee_letter) ?>" id="viewdokmu" target="_blank"><?= $a->financial_guarantee_letter ?></a>                            
														<?php } ?>
													</td> -->
									<!-- <td>
														<?php if ($a->health_certificate) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/health_certificate/' . $a->health_certificate) ?>" id="viewdokmu" target="_blank"><?= $a->health_certificate ?></a>                            
														<?php } ?>
													</td> -->
									<!-- <td>
														<?php if ($a->statement_letter) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/statement_letter/' . $a->statement_letter) ?>" id="viewdokmu" target="_blank"><?= $a->statement_letter ?></a>                            
														<?php } ?>
													</td> -->
									<!-- <td>
														<?php if ($a->campus_recommendation_letter) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/campus_recommendation_letter/' . $a->campus_recommendation_letter) ?>" id="viewdokmu" target="_blank"><?= $a->campus_recommendation_letter ?></a>                            
														<?php } ?>
													</td> -->
									<!-- <td>
														<?php if ($a->achievement) { ?>
														<a href="<?= Yii::getAlias('@web/uploads_student_eng/achievement/' . $a->achievement) ?>" id="viewdokmu" target="_blank"><?= $a->achievement ?></a>                            
														<?php } ?>
													</td> -->

									<!-- <td><?= $a->user_id ?></td> -->
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