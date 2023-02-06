<?php

use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

/** @var \common\models\User $user */
/** @var \yii\web\View $this */
/** @var \backend\models\TbIndustri $tbIndustri */
/** @var \backend\models\TbSekolah $tbSekolah */
/** @var \backend\models\TbPerguruanTinggi $tbPerguruanTinggi */


?>
<div class="container pt-3 pb-2">

    <div class="row pt-2">
        <div class="col-lg-3 mt-4 mt-lg-0">

            <div class="d-flex justify-content-center mb-4">
                <div class="profile-image-outer-container">
                    <div class="profile-image-inner-container bg-color-primary">
                        <img src="img/avatars/avatar.jpg">
                        <span class="profile-image-button bg-color-dark">
                            <i class="fas fa-camera text-light"></i>
                        </span>
                    </div>
                    <input type="file" id="file" class="form-control profile-image-input">
                </div>
            </div>

            <aside class="sidebar mt-2" id="sidebar">
                <ul class="nav nav-list flex-column mb-5">
                    <li class="nav-item"><a class="nav-link text-3 text-dark active" href="#">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link text-3" href="#">User Preferences</a></li>
                    <li class="nav-item"><a class="nav-link text-3" href="#">Billing</a></li>
                    <li class="nav-item"><a class="nav-link text-3" href="#">Invoices</a></li>
                </ul>
            </aside>

        </div>
        <div class="col-lg-9">

            <form role="form" class="needs-validation">


                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Nama</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="text" name="nama" value="<?php echo $user->nama ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="email" name="email" value="<?php echo $user->email ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Username</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="text" name="username" value="<?php echo $user->username ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Website</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="url" name="website" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Address</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="text" name="address" value="" placeholder="Street">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"></label>
                    <div class="col-lg-6">
                        <input class="form-control text-3 h-auto py-2" type="text" name="city" value="" placeholder="City">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control text-3 h-auto py-2" type="text" name="state" value="" placeholder="State">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Username</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="text" name="username" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Password</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="password" name="password" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Confirm password</label>
                    <div class="col-lg-9">
                        <input class="form-control text-3 h-auto py-2" type="password" name="confirmPassword" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-lg-9">

                    </div>
                    <div class="form-group col-lg-3">
                        <input type="submit" value="Save" class="btn btn-primary btn-modern float-end" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>