<?php
include 'inc-session-start.php';
// izdeliya-paneli-stenovye.php
$detaliClass = '';
$izdeliyaClass = 'class="active"';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_bloki_dvernye_Class = '';
$item_mebel_korpusnaya_Class = '';
$item_paneli_stenovye_Class = 'active';
$item_karnizy_i_frizy_Class = '';
$item_plintusy_i_moldingi_Class = '';
$item_ekrany_Class = '';
$item_pilyastry_Class = '';
$item_potolki_Class = '';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-izdeliya.php';
?> 
        <!-- main  -->
        <div class="col-md-8 col-md-8-non" role="main" id="main-page">
            <article  >
              <section  >
              
                <div class="page-header">
                  <h1 itemprop="name" id="paneli-stenovye-konstrukcii">Конструкции панелей стеновых</h1>
                </div>


                <h2 id="osnovanie-korpusa-shkafa">&nbsp;</h2>
                <div class="bs-callout bs-callout-warning cont" ><h4>5000202-99_101 основание корпуса шкафа</h4>
                          <!-- <div class="overlay"></div>                   -->
                  <p> <a>
                    
                      <img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="./dist/images/5000202-99-101-osnovanie-korpusa-shkafa_1-v1.png" class="center-block img-rounded img-thumbnail b-lazy img-album"
                        data-toggle="modal"
                        data-target="#myModal"
                                                  
                        alt="5000202-99_101 основание корпуса шкафа"
                        data-xls=""
                        data-pdf=""
                        data-prnt="noPrint"
                        data-spng="noPNG" 
                          ></a>
                  </p>
                  <p> <a>
                    
                      <img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="./dist/images/5000202-99-101-osnovanie-korpusa-shkafa_2-v1.png" class="center-block img-rounded img-thumbnail b-lazy img-album"
                        data-toggle="modal"
                        data-target="#myModal"
                                                  
                        alt="5000202-99_101 основание корпуса шкафа"
                        data-xls=""
                        data-pdf=""
                        data-prnt="noPrint"
                        data-spng="noPNG" 
                          ></a>
                  </p>                        
                </div>

              
              </section>
            </article>

      
            
                </div> <!-- main  -->
          <?php
                  
                  $arrlist = [$panelistenovye];
                  // $arrlist = [$konstr_dok,                              
                  //             $sostav_kd];
                  SideMenuList($arrlist)
                ?> 
<?php include 'inc-footer.php'; ?>