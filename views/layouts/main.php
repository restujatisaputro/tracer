<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$busi = "/tracer/web/";
$base = Url::base('')."/site/index/";
AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<?php
$parts = str_replace('/tracer/web', '', $_SERVER['REQUEST_URI']);
if($parts == '/site/index'||$parts == '/site/'){
    $baseurl = "";
} else{
    $baseurl = Url::base('')."/site/index";
}


// if (Yii::$app->user->identity->username) {
//     echo Yii::$app->user->identity->username;
// }

// die;
?>



<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

     <link rel="stylesheet" href="<?= Url::to(['/tempmo/css/bootstrap.min.css']); ?>">
     <link rel="stylesheet" href="<?= Url::to(['/tempmo/css/font-awesome.min.css']); ?>">
     <link rel="stylesheet" href="<?= Url::to(['/tempmo/css/aos.css']); ?>">
     <link rel="stylesheet" href="<?= Url::to(['/tempmo/css/owl.carousel.min.css']); ?>">
     <link rel="stylesheet" href="<?= Url::to(['/tempmo/css/owl.theme.default.min.css']); ?>">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?= Url::to(['/tempmo/css/templatemo-digital-trend.css']); ?>">
     <style type="text/css">
         .icon {
        
        height: 50px;
        width: 50px;
        display: block;}
        .navbar{
            margin-bottom: 0!important;
        }
        
     </style>
</head>

<body>
<?php $this->beginBody() ?>


<nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="<?= Url::to(['/images/logo.png']); ?>" class="icon">
            <a class="navbar-brand" href="<?= Url::base(''); ?>/site/index">

                 <?= Yii::$app->name ?>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?= $baseurl ?>#about" class="nav-link smoothScroll">Tentang Tracer</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $baseurl ?>#project" class="nav-link smoothScroll">Layanan</a>
                    </li>

                    <?php 
                    if (Yii::$app->user->isGuest) :
                    ?>
                    <li class="nav-item">
                        <a href="<?= Url::base(''); ?>/site/login" class="nav-link contact">Isi Formulir</a>
                    </li>
                    <?php else :?>
                    <li class="nav-item">
                        <?= Html::a('Logout', ['site/logout'], ['class'=>['nav-link','contact'],'data' => ['method' => 'post']]) ?>
                    </li>
                <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
<?= $content ?>

<footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Aplikasi Web<strong>Tracer Study</strong> PNJ.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Info Kontak</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +6221 7860036
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                bidangkerjasama@pnj.ac.id
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Alamat</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Jl. Prof. DR. G.A Siwabessy Depok, Jawa Barat 16425
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
             <p class="pull-left">Copyright &copy; <a href="https://pnj.ac.id/"> Politeknik Negeri Jakarta </a> <?= date('Y') ?></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            

          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="https://www.facebook.com/PoliteknikNegeriJakartaOfficial/" target="_blank" class="fa fa-facebook"></a></li>
              <li><a href="https://twitter.com/HumasPNJ" target="_blank" class="fa fa-twitter"></a></li>
              <li><a href="https://www.instagram.com/politekniknegerijakarta/" target="_blank" class="fa fa-instagram"></a></li>
              <li><a href="https://www.youtube.com/channel/UCcCP2OtU0l6J3Dbmu3uEiyA?view_as=subscriber" target="_blank" class="fa fa-youtube"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="<?= Url::to(['/tempmo/js/jquery.min.js']); ?>"></script>
     <script src="<?= Url::to(['/tempmo/js/bootstrap.min.js']); ?>"></script>
     <script src="<?= Url::to(['/tempmo/js/aos.js']); ?>"></script>
     <script src="<?= Url::to(['/tempmo/js/owl.carousel.min.js']); ?>"></script>
     <script src="<?= Url::to(['/tempmo/js/smoothscroll.js']); ?>"></script>
     <script src="<?= Url::to(['/tempmo/js/custom.js']); ?>"></script>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
