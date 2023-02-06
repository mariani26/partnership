<?php

use yii\helpers\Url;

// use backend\models\TbIndustri;

/** @var yii\web\View $this */
$total = [];
foreach ($usr as $user) {
  $total[] = $user["total"];
}

$rle = [];
foreach ($role as $nama_role) {
  $rle[] = $nama_role->role;
}
$this->title = 'My Yii Application';
?>
<div class="site-index">

  <!-- Main content -->
  <section class="content">


    <!--begin::Stats-->
    <?php if (Yii::$app->user->identity->role == 'superadmin') { ?>
      <div class="card-p mt-n20 position-relative">
        <!--begin::Row-->
        <div class="row g-0">
          <h2>Indonesia</h2>
          <!--begin::Col-->
          <div class="col bg-danger px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbindustri ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-industri']) ?>" class="text-light fw-bold fs-6">Industri</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbsekolah ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-sekolah']) ?>" class="text-light fw-bold fs-6">Sekolah</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbdinas ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-dinas']) ?>" class="text-light fw-bold fs-6">Pemerintah</a>
          </div>
          <!--end::Col-->

        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-primary px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbperguruantinggi ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-perguruan-tinggi']) ?>" class="text-light fw-bold fs-6">Perguruan Tinggi</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-info px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbnpo ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-npo']) ?>" class="text-light fw-bold fs-6 mt-2">Organisasi Nirlaba</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-dark px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttborganisasi ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-organisasi']) ?>" class="text-light fw-bold fs-6 mt-2">Organisasi</a>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-danger px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countfaq ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/faq']) ?>" class="text-light fw-bold fs-6">FAQ</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countabout ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/about']) ?>" class="text-light fw-bold fs-6 mt-2">About Us</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countuser ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/user']) ?>" class="text-light fw-bold fs-6 mt-2">User</a>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->
      </div><br><br><br>

      <div class="card-p mt-n20 position-relative">
        <!--begin::Row-->
        <div class="row g-0">
          <h2>Non Indonesia</h2>
          <!--begin::Col-->
          <div class="col bg-primary px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbindustrieng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-industri-eng']) ?>" class="text-light fw-bold fs-6">Industry</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-info px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbsekolaheng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-sekolah-eng']) ?>" class="text-light fw-bold fs-6">School</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-dark px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbdinaseng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-dinas-eng']) ?>" class="text-light fw-bold fs-6">Government</a>
          </div>
          <!--end::Col-->

        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-danger px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbperguruantinggieng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-perguruan-tinggi-eng']) ?>" class="text-light fw-bold fs-6">College</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbnpoeng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-npo-eng']) ?>" class="text-light fw-bold fs-6 mt-2">Non Profit Organization (NPO)</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttborganisasieng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-organisasi-eng']) ?>" class="text-light fw-bold fs-6 mt-2">Organization</a>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-primary px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbstudenteng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-student-eng']) ?>" class="text-light fw-bold fs-6 mt-2">Student</a>
          </div>

          <div class="col bg-info px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countuser ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/user']) ?>" class="text-light fw-bold fs-6 mt-2">User</a>
          </div>
          <div class="col bg-dark px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countfaqeng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/faq-eng']) ?>" class="text-light fw-bold fs-6">FAQ</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->

          <!--end::Col-->
        </div>
        <!--end::Row-->


      </div>
      <!--end::Stats-->
    <?php } else if (Yii::$app->user->identity->role == 'admin_ind') { ?>
      <div class="card-p mt-n20 position-relative">
        <!--begin::Row-->
        <div class="row g-0">
          <!-- <h2>Indonesia</h2> -->
          <!--begin::Col-->
          <div class="col bg-danger px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbindustri ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-industri']) ?>" class="text-light fw-bold fs-6">Industri</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbsekolah ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-sekolah']) ?>" class="text-light fw-bold fs-6">Sekolah</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbdinas ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-dinas']) ?>" class="text-light fw-bold fs-6">Pemerintah</a>
          </div>
          <!--end::Col-->

        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-primary px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbperguruantinggi ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-perguruan-tinggi']) ?>" class="text-light fw-bold fs-6">Perguruan Tinggi</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-info px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbnpo ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-npo']) ?>" class="text-light fw-bold fs-6 mt-2">Organisasi Nirlaba</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-dark px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttborganisasi ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-organisasi']) ?>" class="text-light fw-bold fs-6 mt-2">Organisasi</a>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-danger px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countfaq ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/faq']) ?>" class="text-light fw-bold fs-6">FAQ</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countabout ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/about']) ?>" class="text-light fw-bold fs-6 mt-2">About Us</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countuser ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/user']) ?>" class="text-light fw-bold fs-6 mt-2">User</a>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->
      </div>
    <?php } else { ?>
      <div class="card-p mt-n20 position-relative">
        <!--begin::Row-->
        <div class="row g-0">
          <!-- <h2>Non Indonesia</h2> -->
          <!--begin::Col-->
          <div class="col bg-primary px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbindustrieng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-industri-eng']) ?>" class="text-light fw-bold fs-6">Industry</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-info px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbsekolaheng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-sekolah-eng']) ?>" class="text-light fw-bold fs-6">School</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-dark px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbdinaseng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-dinas-eng']) ?>" class="text-light fw-bold fs-6">Government</a>
          </div>
          <!--end::Col-->

        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-danger px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbperguruantinggieng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-perguruan-tinggi-eng']) ?>" class="text-light fw-bold fs-6">College</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbnpoeng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-npo-eng']) ?>" class="text-light fw-bold fs-6 mt-2">Non Profit Organization (NPO)</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttborganisasieng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-organisasi-eng']) ?>" class="text-light fw-bold fs-6 mt-2">Organization</a>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-0">
          <!--begin::Col-->
          <div class="col bg-primary px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $counttbstudenteng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/tb-student-eng']) ?>" class="text-light fw-bold fs-6 mt-2">Student</a>
          </div>

          <div class="col bg-info px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countuser ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/user']) ?>" class="text-light fw-bold fs-6 mt-2">User</a>
          </div>
          <div class="col bg-dark px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countfaqeng ?></h3>
            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <a href="<?= Url::toRoute(['/faq-eng']) ?>" class="text-light fw-bold fs-6">FAQ</a>
          </div>
          <!--end::Col-->
          <!--begin::Col-->

          <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <!-- <div class="row g-0"> -->
        <!--begin::Col-->
        <!--begin::Col-->
        <!-- <div class="col bg-danger px-6 py-8 rounded-2 me-7 mb-7">
            <h3 class="text-light fw-bold fs-1"><?= $countabouteng ?></h3> -->
        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
        <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
              </svg>
            </span> -->
          <!--end::Svg Icon-->
          <!-- <a href="<?= Url::toRoute(['/about-eng']) ?>" class="text-light fw-bold fs-6 mt-2">About Us</a>
          </div> -->
          <!--end::Col-->
          <!--end::Col-->
          <!--begin::Col-->
          <!-- <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7"> -->
          <!-- <h3 class="text-danger fw-bold fs-1"><?= $countabout ?></h3> -->
          <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
          <!-- <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
          </svg>
        </span> -->
          <!--end::Svg Icon-->
          <!-- <a href="<?= Url::toRoute(['/about']) ?>" class="text-danger fw-bold fs-6 mt-2">About Us</a> -->
          <!-- </div> -->
          <!--end::Col-->
          <!--begin::Col-->
          <!-- <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7"> -->
          <!-- <h3 class="text-light fw-bold fs-1"><?= $countuser ?></h3> -->
          <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
          <!-- <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
            <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
          </svg>
        </span> -->
          <!--end::Svg Icon-->
          <!-- <a href="<?= Url::toRoute(['/user']) ?>" class="text-light fw-bold fs-6 mt-2">User</a> -->
          <!-- </div> -->
          <!--end::Col-->
          <!-- </div> -->
          <!--end::Row-->

      </div>
      <!--end::Stats-->
    <?php } ?>
    <div>
      <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?= json_encode($rle) ?>,
          datasets: [{
            label: 'TOTAL USER',
            data: <?= json_encode($total) ?>,
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
  </section>
</div>