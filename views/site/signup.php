<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<!--     <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p> -->
    <style type="text/css">
        .login100-form-title img {
           height: 50%;
           width: 50%;
        }
        button{
                background: #09c6b4b8 !important;
        }
        input{
            outline: solid !important;
        }
    </style>

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/fonts/font-awesome-4.7.0/css/font-awesome.min.css']) ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/fonts/iconic/css/material-design-iconic-font.min.css']) ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/vendor/animate/animate.css']) ?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/vendor/css-hamburgers/hamburgers.min.css']) ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/vendor/animsition/css/animsition.min.css']) ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/vendor/select2/select2.min.css']) ?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/vendor/daterangepicker/daterangepicker.css']) ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/css/util.css']) ?>">
    <link rel="stylesheet" type="text/css" href="<?= Url::to(['/css/main.css']) ?>">
<!--===============================================================================================-->

<div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="<?= Url::to(['/vendor/jquery/jquery-3.2.1.min.js']) ?>"></script>
<!--===============================================================================================-->
    <script src="<?= Url::to(['/vendor/animsition/js/animsition.min.js']) ?>"></script>
<!--===============================================================================================-->
    <script src="<?= Url::to(['/vendor/bootstrap/js/popper.js']) ?>"></script>
    <script src="<?= Url::to(['/vendor/bootstrap/js/bootstrap.min.js']) ?>"></script>
<!--===============================================================================================-->
    <script src="<?= Url::to(['/vendor/select2/select2.min.js']) ?>"></script>
<!--===============================================================================================-->
    <script src="<?= Url::to(['/vendor/daterangepicker/moment.min.js']) ?>"></script>
    <script src="<?= Url::to(['/vendor/daterangepicker/daterangepicker.js']) ?>"></script>
<!--===============================================================================================-->
    <script src="<?= Url::to(['/vendor/countdowntime/countdowntime.js']) ?>"></script>
<!--===============================================================================================-->
    <script src="<?= Url::to(['/js/main.js']) ?>"></script>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <?php $form = ActiveForm::begin(['id' => 'login-form','class'=>['login100-form', 'validate-form']]); ?>
                    <span class="login100-form-title p-b-26">
                        Selamat Datang
                    </span>
                    <span class="login100-form-title p-b-48">
                        <img src="<?= Url::to(['/images/logo.png']) ?>">
                    </span>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'input100']) ?>
                        <span class="focus-input100" data-placeholder="Username"></span>
                        <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'class'=>'input100']) ?>
                        <span class="focus-input100" data-placeholder="Email"></span>
                        <?= $form->field($model, 'nim')->textInput(['autofocus' => true, 'class'=>'input100', 'minlength'=> 999999999, 'maxlength'=> 9999999999, 'type'=>'text']) ?>
                        <span class="focus-input100" data-placeholder="NIM"></span>
                        <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'class'=>'input100']) ?>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Daftar
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span style="color:#999;margin:1em 0">
                            Sudah pernah mengisi? <?= Html::a('Login Disini', ['site/login'],['class'=>'txt1']) ?>.
                        </span>
                    </div>
                    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

<!--     <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div style="color:#999;margin:1em 0">
                    Sudah punya akun? <?= Html::a('Login Disini', ['site/login']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div> -->
</div>