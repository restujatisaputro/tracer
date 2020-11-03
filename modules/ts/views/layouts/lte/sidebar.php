<?php


use yii\helpers\Url;

?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="<?=Url::base(true)?>/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Tracer Study</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=Url::base(true)?>/images/user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=Yii::$app->user->identity->username ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <?php
            echo \hail812\adminlte3\widgets\Menu::widget([
                'items' => [



                    ['label' => 'Profil Alumni','url' => ['profil/view?id='.Yii::$app->user->identity->nim], 'icon' => 'th', 'active' => $this->context->route == 'ts/profil/view'],
                    ['label' => 'Metode Pembelajaran','url' => ['metode/view?id='.Yii::$app->user->identity->nim], 'icon' => 'th', 'active' => $this->context->route == 'ts/metode/view'],
                    ['label' => 'Pencarian Pekerjaan','url' => ['pencarian/view?id='.Yii::$app->user->identity->nim], 'icon' => 'th', 'active' => $this->context->route == 'ts/pencarian/view'],
                    ['label' => 'Mendapatkan Pekerjaan','url' => ['memperoleh/view?id='.Yii::$app->user->identity->nim], 'icon' => 'th', 'active' => $this->context->route == 'ts/memperoleh/view'],
                    ['label' => 'Kesesuaian Pekerjaan','url' => ['kesesuaian/view?id='.Yii::$app->user->identity->nim], 'icon' => 'th', 'active' => $this->context->route == 'ts/kesesuaian/view'],
                    ['label' => 'Kompetensi Lulusan','url' => ['kompetensi/view?id='.Yii::$app->user->identity->nim], 'icon' => 'th', 'active' => $this->context->route == 'ts/kompetensi/view'],
                    ['label' => 'Saran','url' => ['saran/view?id='.Yii::$app->user->identity->nim], 'icon' => 'th', 'active' => $this->context->route == 'ts/saran/view'],

                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>