<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-shablony-dokumentov.php';
$shablonyClass = 'class="active"';
$item_albom_obrazcov_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-shablony-dokumentov.php';
include 'Classes/class_ScanDir.php';
// $scan = new class_ScanDir("./dist/images/", 'shablon-alboma-obrazcov_1');
$scan = [];
$path = "./dist/images/obr/";
$item;
$scan[0] = null;
?>
<!-- main  -->
<div class="col-md-8 col-md-8-non" role="main" id="main-page">
  <article>
    <section>
      <div class="page-header">
        <h2 id="shablon-alboma-obrazcov">&nbsp;</h2>
        <h1 itemprop="name">ШАБЛОН АЛЬБОМА ОБРАЗЦОВ</h1>
      </div>
      <!-- <p>&nbsp;</p> -->
      <h2 id="shablon-alboma-obrazcov_1">&nbsp;</h2>
      <a href="#shablon-alboma-obrazcov_4" class=""><b>Титульный лист ОБРАЗЕЦ</b> &nbsp;<i class="glyphicon glyphicon-arrow-right" aria-hidden="true"></i></a>
      <!-- <a href="./dist/files/xls/117-metodicheskoe-posobie-po-izdeliyam.xls" type="button" class="btn btn-primary"  download="117-metodicheskoe-posobie-po-izdeliyam.xls">Скачать - 117. Методическое пособие по изделиям.xls</a> -->
      <div class="bs-callout bs-callout-warning cont">
        <h4>Лист титульный альбома образцов</h4>
        <?php 
        $item=1;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov_'.$item);
        echo $overlayRight;
        ?> 
        <div class="overlay"></div>

        <p> <a>
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="5000301-03-001 лист титульный Альбома Образцов" 
            data-prnt="noPrint" 
            data-xls="./dist/files/xls/list-titulnyy-alboma-obrazcov.xlsx" 
            data-spng="noPNG"></a>
        </p>
        <!-- data-dwg="./dist/files/xls/list-titulnyy-alboma-obrazcov.dwg"  -->
        <!-- data-spng="noPNG"  -->
        <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov.pdf" -->
        <!-- <div class="overlay"></div> -->
      </div>


      <h2 id="shablon-alboma-obrazcov_2">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Таблица образцов для заказчика</h4>
        <?php 
        $item=2;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov_'.$item);
        echo $overlayRight;
        ?> 
        <div class="overlay"></div>
        <p> <a>
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"  
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Таблица образцов для заказчика" 
            data-prnt="noPrint" 
            data-xls="./dist/files/xls/ishodnik-tablicy-obrazcov-dlya-zakazchika.xlsx" 
            data-sample="./dist/files/xls/primer-tablicy-obrazcov-dlya-zakazchika.xlsx" 
            data-spng="noPNG"></a>
        </p>
        <!-- sample -->
        <!-- <div class="overlay"></div> -->
      </div>

      <h2 id="shablon-alboma-obrazcov_3">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Размещение образцов на плане</h4>
        <?php 
        $item=3;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov_'.$item);
        echo $overlayRight;
        ?> 

        <p> <a>
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Размещение изделий на плане"></a>
        </p>
        <!-- <div class="overlay"></div> -->
      </div>

      <h2 id="shablon-alboma-obrazcov_4">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Титульный лист Образец</h4>
        <?php 
        $item=1; // такой же как Лист титульный альбома образцов
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov_'.$item);
        //echo $overlayRight;
        ?>
        <div class="overlay"></div>
        <p> <a>

            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>"  
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Титульный лист Образец" 
            data-prnt="noPrint" 
            data-spng="noPNG" 
            data-xls=""></a>
            <!-- data-xls="./dist/files/xls/list-titulnyy-obrazca.xlsx" -->
        </p>
        
        <!-- <div class="overlay"></div> -->
      </div>

      <h2 id="shablon-alboma-obrazcov_5">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Титульный лист ВПИ</h4>
        <?php 
        $item=5;
        $scan[$item] = new class_ScanDir('./dist/images/kd/', 'shablon-kd_'.$item);
       // echo $overlayRight;
        ?>
        <div class="overlay"></div>
        <p> <a>

            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="Титульный лист ВПИ" 
            data-prnt="noPrint" 
            data-spng="noPNG" 
            data-xls="./dist/files/xls/list-titulnyy-vpi-kd.xlsx"></a>
            <!-- data-xls="./dist/files/xls/list-titulnyy-vpi-kd.xlsx" -->
        </p>
        
        <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov.pdf" -->
        <!--  -->
      </div>

    </section>
  </article>


  <article>
    <section>
      <div class="page-header">
        <h2 id="list-dvizheniya-obrazcov">&nbsp;</h2>
        <h1 itemprop="name">ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ</h1>
      </div>
      <h2 id="dok--385">&nbsp;</h2>
      <div class="bs-callout bs-callout-warning cont">
        <h4>Док. № 385</h4>
        <?php 
        $item=1;
        $scan[$item] = new class_ScanDir($path, 'list-dvizheniya-obrazcov_'.$item);
        echo $overlayRight;
        ?>
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            data-content="ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ" 
            alt="ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ" 
            data-xls="./dist/files/xls/list-dvizheniya-obrazcov.xlsx">
          </a>
        </p>

      </div>

    </section>
  </article>

  <article>
    <section>
      <div class="page-header">
        <h2 id="obrazec-zapolneniya-albomo-obrazcov">&nbsp;</h2>
        <h1 itemprop="name">ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ</h1>
      </div>
      <!-- <h2 id="dok--385">&nbsp;</h2> -->
      <div class="bs-callout bs-callout-warning cont">
        <!-- <h4>Док. № 385</h4> -->
        <?php 
        $item=1;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
        <div class="overlay"></div>
        <p> <a>
            <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo $scan[$item]->getNameFile();?>"             
            data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
            data-path="<?php echo $path; ?>" 
            class="center-block img-rounded img-thumbnail b-lazy img-album" 
            data-toggle="modal" 
            data-target="#myModal" 
            alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
            data-pdf="" 
            data-prnt="noPrint" 
            data-spng="noPNG">
          </a>
          <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
        </p>
        <div>
        <?php 
        $item=2;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=3;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"   -->
          </p>
        </div>
        <div>
        <?php 
        $item=4;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=5;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
       // $item=6;
       // $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        $item=1;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov_'.$item);
        //echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=7;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=8;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=9;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=10;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=11;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=12;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=13;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=14;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=15;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=16;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>"
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>
        <div>
        <?php 
        $item=17;
        $scan[$item] = new class_ScanDir($path, 'shablon-alboma-obrazcov-zapolnenie_'.$item);
        echo $overlayRight;
        ?>
          <p> <a>
              <!-- <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail" -->
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-src="<?php echo $scan[$item]->getNameFile();?>"             
              data-pattern="<?php echo $scan[$item]->getPattern(); ?>"
              data-path="<?php echo $path; ?>" 
              class="center-block img-rounded img-thumbnail b-lazy img-album" 
              data-toggle="modal" 
              data-target="#myModal" 
              alt="ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ" 
              data-pdf="" 
              data-prnt="noPrint" 
              data-spng="noPNG">
            </a>
            <!-- data-pdf="./dist/files/pdf/shablon-alboma-obrazcov-zapolnenie.pdf"  -->
          </p>
        </div>

      </div>

    </section>
  </article>

</div> <!-- main  -->
<?php
// ШАБЛОН АЛЬБОМА ОБРАЗЦОВ,ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ,ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ
$arrlist = array($albomobrazcov, $list_dvizheniya_obrazcov, $obrazec_albom_oobrazcov);
sideMenuList($arrlist);
?>

<?php include 'inc/inc-footer.php'; ?>