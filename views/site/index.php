
<!-- HERO -->
<?php 
use yii\helpers\Url;
$busi = "/tracer/web/";
?>
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Tracer Study Politeknik Negeri Jakarta</h1>

                                   <a href="<?= Url::base(''); ?>/site/login" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Isi Formulir Tracer</a>

                                   <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +6221 7860036</strong>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="<?php echo $busi ?>tempmo/images/working-girl.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up"> <strong>Tracer Study</strong>  Politeknik Negeri Jakarta</h2>

                              <p class="mb-0" data-aos="fade-up" align="justify"><i>Tracer Study </i> atau yang sering disebut sebagai survey alumni atau survey <i> "follow up" </i> adalah studi mengenai lulusan lembaga penyelenggara pendidikan tinggi. Studi ini mampu menyediakan berbagai informasi yang bermanfaat bagi kepentingan evaluasi hasil pendidikan tinggi dan selanjutnya dapat digunakan untuk penyempurnaan dan penjaminan kualitas lembaga pendidikan tinggi.

                                <i> Tracer study </i> bertujuan untuk mengetahui hasil pendidikan dalam bentuk transisi dari dunia pendidikan tinggi ke dunia kerja, keluaran pendidikan yaitu penilaian diri terhadap penguasaan dan pemerolehan kompetensi, proses pendidikan berupa evaluasi proses pembelajaran dan kontribusi pendidikan tinggi terhadap pemerolehan kompetensi serta input pendidikan berupa penggalian lebih lanjut terhadap informasi lulusan.

                                </p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="<?php echo $busi ?>tempmo/images/office.png" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Nantikan Fitur Berikutnya
                            <strong>Web Tracer Study</strong>
                        </h2>

                         
                    </div>

               </div>
          </div>
     </section>





<?php

/* @var $this yii\web\View */

$this->title = 'Tracer Study Politeknik Negeri Jakarta';
?>