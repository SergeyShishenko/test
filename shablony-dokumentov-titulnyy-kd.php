<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-shablony-dokumentov.php';
$shablonyClass = 'class="active"';
$item_list_titulnyy_kd_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-shablony-dokumentov.php';
include 'Classes/class_ScanDir.php';
// $pattern
$scan = [];
$path = "./dist/images/kd/";
$item;
$scan[0] = null;
// $scan[1] = new class_ScanDir($path, 'shablon-kd_1');
// $scan[2] = new class_ScanDir($path, 'shablon-kd_2');
// $scan[3] = new class_ScanDir($path, 'shablon-kd_3');
// $scan[4] = new class_ScanDir($path, 'shablon-kd_4');
// $scan[5] = new class_ScanDir($path, 'shablon-kd_5');

// $scan[6] = new class_ScanDir($path, 'sostav-kd_1');
// $scan[7] = new class_ScanDir($path, 'sostav-kd_2');
// $scan[8] = new class_ScanDir($path, 'sostav-kd_3');
// $scan[9] = new class_ScanDir($path, 'sostav-kd_4');
// $s=new class_ScanDir($path, 'shablon-kd_1');
// $s->getScan();
// echo $scan[0]->getNameFile();
// $scanx = new class_ScanDir("./dist/files/xls/",'/list-titulnyy-alboma-obrazcov(.*)/');

?>
<!-- main  -->
<div class="col-md-8 col-md-8-non" role="main" id="main-page">


  <article>
    <section>
      <div class="page-header">
        <h2 id="listy-titulnye-konstruktorskoy-dokumentacii">&nbsp;</h2>
        <h1 itemprop="name">ЛИСТЫ ТИТУЛЬНЫЕ ПРОИЗВОДСТВЕННОГО ЗАДАНИЯ</h1>
      </div>
      <h2 id="list-titulnyy-kd">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Лист титульный ПЗ</h4>
        <?php 
        $item=1;
        $scan[$item] = new class_ScanDir($path, 'shablon-kd_1');
        echo $overlayRight;
        ?>     
        <div class="overlay"></div>

        <p> <a>
            <!-- <img src="./dist/images/shablon-kd.png" class="center-block img-rounded img-thumbnail" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Лист титульный ПЗ" 
            data-xls="./dist/files/xls/shablon-pz.xlsx" 
            data-pdf="" 
            data-prnt="noPrint" 
            data-spng="noPNG">
          </a>
        </p>

      </div>


      <h2 id="pasport-izdeliy-zakaza-kd">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>паспорт изделий заказа КД</h4>
        <?php 
        $item=2;
        $scan[$item] = new class_ScanDir($path, 'shablon-kd_2');
        echo $overlayRight;
        ?>   

        <p> <a>
            <!-- <img src="./dist/images/5000301-01-001-pasport-izdeliy-zakaza-kd.png" class="center-block img-rounded img-thumbnail" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();//kd_2 ?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="5000301-01-001 паспорт изделий заказа КД">
          </a>
        </p>
        <!-- <div class="overlay"></div> -->
      </div>

      <h2 id="reestr-razdelov-kd">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>реестр разделов КД</h4>
        <?php 
        $item=3;
        $scan[$item] = new class_ScanDir($path, 'shablon-kd_3');
        echo $overlayRight;
        ?> 

        <p> <a>
            <!-- <img src="./dist/images/5000301-01-001-reestr-razdelov-kd.png" class="center-block img-rounded img-thumbnail" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="5000301-02-000 лист титульный КД">
          </a>
        </p>
        <!-- <div id='hovertitle'></div> -->
        <!-- <div class="overlay"></div> -->
      </div>
    </section>
  </article>



  <article>
    <section>
      <div class="page-header">
        <h2 id="specifikaciya-konstruktorskaya">&nbsp;</h2>

        <h1 itemprop="name">СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ</h1>
      </div>
      <h2 id="specifikaciya-konstruktorskaya">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Спецификация конструкторская</h4>
        <?php 
        $item=4;
        $scan[$item] = new class_ScanDir($path, 'shablon-kd_4');
        echo $overlayRight;
        ?> 

        <p> <a>
            <!-- <img src="./dist/images/5000301-01-001-reestr-razdelov-kd.png" class="center-block img-rounded img-thumbnail" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Спецификация конструкторская">
          </a>
        </p>
        <!-- <div id='hovertitle'></div> -->
        <!-- <div class="overlay"></div> -->
      </div>
    </section>
  </article>


  <article>
    <section>
      <div class="page-header">
        <h2 id="shablony-dokumentov-list-titulnyy-vpi">&nbsp;</h2>
        <h1 itemprop="name">ЛИСТ ТИТУЛЬНЫЙ ВПИ</h1>
      </div>
      <h2 id="list-titulnyy-vpi">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>5000304-01-000 лист титульный ВПИ ПЗ</h4>
        <?php 
        $item=5;
        $scan[$item] = new class_ScanDir($path, 'shablon-kd_5');
        echo $overlayRight;
        ?> 
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/list-titulnyy-vpi_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Лист титульный ВПИ ПЗ" 
            data-prnt="noPrint" 
            data-spng="noPNG" 
            data-xls="./dist/files/xls/list-titulnyy-vpi-kd.xlsx">
          </a>
        </p>
        <!--  -->
      </div>
    </section>
  </article>

  <article>
    <section>
      <div class="page-header">
        <h2 id="shablony-dokumentov-vedomost-furnitury">&nbsp;</h2>
        <h1 itemprop="name">ВЕДОМОСТЬ ФУРНИТУРЫ </h1>
      </div>
      <h2 id="vedomost-furnitury">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Ведомость фурнитуры ПЗ</h4>
        <?php
        $item=6;
        $scan[$item] = new class_ScanDir($path, '5000304-01-002-vedomost-furnitury-pz');
         echo $overlayRight;
         ?> 
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/vedomost-furnitury_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Ведомость фурнитуры ПЗ" 
            data-prnt="noPrint" 
            data-spng="noPNG" 
            data-xls="./dist/files/xls/5000304-01-002-vedomost-furnitury-pz.xlsx">
          </a>
        </p>
        <!--  -->
      </div>
    </section>
  </article>

  <article>
    <section>
      <div class="page-header">
        <h2 id="shablony-dokumentov-vedomost-stekol-i-zerkal">&nbsp;</h2>
        <h1 itemprop="name">ВЕДОМОСТЬ СТЕКОЛ И ЗЕРКАЛ</h1>
      </div>
      <h2 id="vedomost-stekol-i-zerkal">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Ведомость стекол и зеркал ПЗ</h4>
        <?php 
        $item=8;
        $scan[$item] = new class_ScanDir($path, '5000304-02-002-vedomost-stekol-i-zerkal-pz');
        echo $overlayRight;
        ?> 
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/vedomost-stekol-i-zerkal_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Ведомость стекол и зеркал КД" 
            data-prnt="noPrint" 
            data-spng="noPNG" 
            data-xls="./dist/files/xls/5000304-02-002-vedomost-stekol-i-zerkal-pz.xlsx">
          </a>
        </p>
        <!--  -->
      </div>
    </section>
  </article>

  <article>
    <section>
      <div class="page-header">
        <h2 id="shablony-dokumentov-vedomost-materialy-prochie">&nbsp;</h2>
        <h1 itemprop="name">ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ</h1>
      </div>
      <h2 id="vedomost-materialy-prochie">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Ведомость материалы прочие КД</h4>
        <?php 
        $item=9;
        $scan[$item] = new class_ScanDir($path, '5000304-03-002-vedomost-materialy-prochie-pz');
        echo $overlayRight;
        ?> 
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/vedomost-materialy-prochie_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Ведомость материалы прочие ПЗ" 
            data-prnt="noPrint" 
            data-spng="noPNG" 
            data-xls="./dist/files/xls/5000304-03-002-vedomost-materialy-prochie-pz.xlsx">
          </a>
        </p>
        <!--  -->
      </div>
    </section>
  </article>



  <article>
    <section>
      <div class="page-header">
        <h2 id="specifikaciya-tehnologichesaya">&nbsp;</h2>
        <h1 itemprop="name">СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ</h1>
      </div>
      <h2 id="5000303-02-001-specifikaciya">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>5000303-02-001 спецификация</h4>
        <?php 
        $item=10;
        $scan[$item] = new class_ScanDir($path, '5000303-02-001-specifikaciya_1');
        // 5000303-02-001-specifikaciya_1.png
        echo $overlayRight;
        ?> 
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/5000303-02-001-specifikaciya_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==            
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="5000303-02-001 спецификация" 
            data-xls="./dist/files/xls/5000303-02-001-specifikaciya.xlsx">
          </a>
        </p>

      </div>

    </section>
  </article>

  <article>
    <section>
      <div class="page-header">
        <h2 id="vedomost-detaley-uchastka-3d">&nbsp;</h2>
        <h1 itemprop="name">ВЕДОМОСТЬ ДЕТАЛЕЙ УЧАСТКА 3D</h1>
      </div>
      <!-- <h2 id="5000303-02-001-specifikaciya">&nbsp;</h2> -->
      <div class="bs-callout bs-callout-warning cont">
        <!-- <h4>5000303-02-001 спецификация</h4> -->
        <?php
        $item=11;
        $scan[$item] = new class_ScanDir($path, 'vedomost-detaley-uchastka-3d_1');
         echo $overlayRight;
         ?> 
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/5000303-02-001-specifikaciya_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album" -->
            <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
            data-src="<?php echo $scan[$item]->getNameFile();?>" 
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="ВЕДОМОСТЬ ДЕТАЛЕЙ УЧАСТКА 3D" 
            data-xls="./dist/files/xls/vedomost-detaley-uchastka-3d.xlsx">
          </a>
        </p>

      </div>

    </section>
  </article>

  <article>
    <section>
      <div class="page-header">
        <h2 id="sostav_kd">&nbsp;</h2>
        <h1 itemprop="name">Состав конструкторской документации</h1>
      </div>
      <!-- <h2 id="dok--385">&nbsp;</h2> -->
      <div class="bs-callout bs-callout-warning cont">
        <!-- <h4>Док. № 385</h4> -->
        <div>
          <?php 
          $item=12;
          $scan[$item] = new class_ScanDir($path, 'sostav-kd_1');
          echo $overlayRight;
          ?> 
          <div class="overlay"></div>
          <p> <a>

              <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
              data-src="<?php echo $scan[$item]->getNameFile();?>" 
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>"
              class="center-block img-rounded img-thumbnail b-lazy img-book" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="Лист1" 
              data-pdf="./dist/files/pdf/sostav-kd.pdf" 
              data-prnt="noPrint" 
              data-spng="noPNG"></a>
          </p>
        </div>
        <div>
          <?php
          $item=13;
          $scan[$item] = new class_ScanDir($path, 'sostav-kd_2');
           echo $overlayRight;
           ?> 
          <p> <a>

              <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
              data-src="<?php echo $scan[$item]->getNameFile();?>" 
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>"
              class="center-block img-rounded img-thumbnail b-lazy img-book" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="Лист2" 
              data-pdf="./dist/files/pdf/sostav-kd.pdf" 
              data-prnt="noPrint" 
              data-spng="noPNG"></a>
          </p>
        </div>
        <div>
          <?php 
          $item=14;
          $scan[$item] = new class_ScanDir($path, 'sostav-kd_3');
          echo $overlayRight;
          ?> 
          <p> <a>

              <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
              data-src="<?php echo $scan[$item]->getNameFile();?>" 
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>"
              class="center-block img-rounded img-thumbnail b-lazy img-book" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="Лист3" 
              data-pdf="./dist/files/pdf/sostav-kd.pdf" 
              data-prnt="noPrint" 
              data-spng="noPNG"></a>
          </p>
        </div>
        <div>
          <?php 
          $item=15;
          $scan[$item] = new class_ScanDir($path, 'sostav-kd_4');
          echo $overlayRight;
          ?> 
          <p> <a>

              <img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
              data-src="<?php echo $scan[$item]->getNameFile();?>" 
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
               data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-book" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="Лист4" 
              data-pdf="./dist/files/pdf/sostav-kd.pdf" 
              data-prnt="noPrint" 
              data-spng="noPNG"></a>
          </p>
        </div>
      </div>

    </section>
  </article>



</div> <!-- main  -->

<?php

$arrlist = [
  $konstr_dok,
  $spec_konst,
  $list_titulnyy_vpi_kd,
  $dok_vpi_kd,
  $dok_vsz,
  $dok_v_materialy_prochie,
  $spec_tehnolog,
  $vedomost_detaley_3d,
  $sostav_kd
];
sideMenuList($arrlist)
?>
<?php include 'inc/inc-footer.php'; ?>