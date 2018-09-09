<?php
include 'inc-session-start.php';
$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = 'class="active"';
$materialyClass = '';
$literaturaClass = '';

$item_dlya_dvernyh_blokov_Class = '';
$item_dlya_mebeli_Class = 'active';
$item_universalnaya_Class = '';
$item_katalogi_Class = '';
include 'inc-head.php';
echo '<link rel="stylesheet" href="css/main.07.07.2018.css" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
        
        
        <style>
        .btn:focus,
        .btn:active,
        button:focus,
        button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer {
            display: block;
        }

        .thumb {
            margin-top: 7.5px;
            margin-bottom: 7.5px;
            padding-right: 7.5px;
            padding-left: 7.5px;
            text-align: center;
        }

       
        /* .modal-dialog {
             width: auto;
           margin:30px 30px;
        } */

        /* .row .row {
            margin-right: 0;
            margin-left: 0;
        } */

        .thumbnail {
            border: none;
        }
        .modal-header .close {
         margin-top: -20px;
        }
        #image-gallery-image{float:none;}
        @media (min-width: 768px){
        .navbar-collapse.collapse {
            display: none !important;
            }
       }
    </style>  
        
        ';


include 'inc-header-menu.php';
include 'inc-left-side-menu-furnitura.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="petli-dlya-fasadov">ПЕТЛИ для ФАСАДОВ</h1>
                        </div> 
                      
                     <!-- <h2 >Видео с Ютуба</h2>    -->
                        <!-- <div class="bs-callout bs-callout-warning cont" > 
                        
                            <iframe  class="center-block   img-rounded img-thumbnail b-lazy bar video-album" src="https://www.youtube.com/embed/hSWQ0w1sB3M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            
                        </div> -->


                        <div class="main-box clearfix">                            
                            <div class="main-box-body clearfix"> 
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hSWQ0w1sB3M?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        

                      <!-- <div class="bs-callout bs-callout-warning cont" > 
                      <h2 >Видео с Яндекс диска</h2>  
                           
                           <iframe  class="center-block   img-rounded img-thumbnail b-lazy bar video-album" src="https://yastatic.net/yandex-video-player-iframe-api-bundles/1.0-249/?mq_url=https%3A%2F%2Fstreaming.disk.yandex.net%2Fhls%2FU2FsdGVkX1-lS3O0qV_NyuKUWQnFgcrvQSuLp2xmcK2tAx5WMsw7Tv4kxMXdpkLNKwGjf78wsIlaJbHQkXI-tP3CE0TUH2IXyYL3pqMDsYXGJuz_SvO3xpSC-JJjVxEpErhgVLej6PESGhlb6lQrHF2IVlHqwR0n80lk8eUGt0vM7comBfkE4SyiiICI2fjox6Anl6KOhFuxdM5INKTyBiKIvxBwL4U6wZjsnz0hR4dJBJF0JnYjtmFN3Ux1B_i2%2F57378f8a84b90%2Fb641e0b8d4c83ffef6b9c81722d3127513276b4f2e8dd8dc4475bf9db0587d72%2Fmaster-playlist.m3u8&auto_quality=false&preview=https%3A%2F%2Fdownloader.disk.yandex.ru%2Fpreview%2F1207d57ea6d06d6d845676af234700b4358dc08a2bdf9617236f0ccd74c0b23c%2F5b7424f0%2FT1BjQtjWW4JGT0b3oP7o3HBAjOS-L0ZajiqZ23cZrpC9EY8GPRXaCG1lbmNZHbUtMOy9IGv4ta28eb5j3fd-1A%253D%253D%3Fuid%3D0%26filename%3D0-02-05-fc71fc5298aadbb2fceefe58e50d013607ed78281b75dc63efe5d9c47fa538b9_709380c4.mp4%26disposition%3Dinline%26hash%3D%26limit%3D0%26content_type%3Dimage%252Fjpeg%26tknv%3Dv2%26size%3D640x368&vsid=9a649ed24813a9562df84409fbca6eaa1973935515a2cd0dce5c52a603ed9ee5&host=yadi.sk&volume=100&muted=false&report=false" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           
                       </div>


                             <div class="bs-callout bs-callout-warning cont" > 
                           
                            <h2 >Картинка с Яндекс диска</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="https://downloader.disk.yandex.ru/preview/5563d4827533774c0802f2e22a5e79e2fbfb58f4f5b9c7561fb7b013cffb9cc7/5b74281c/T1BjQtjWW4JGT0b3oP7o3HMdl93sQtFV_z2YXv7YHz4sxUxRvDuJPVhtSOWwbH-mUKPXba1zWz_MTg110YnF_Q%3D%3D?uid=0&filename=mdf-nakladka-050-dsh.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=2048x2048"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="Картинка с Яндекс диска"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> -->

                        

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-100-petlya-vkladnaya" >&nbsp;</h2> 
                            <h2 >5000502-01-100 петля вкладная</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-100-petlya-vkladnaya_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-100 петля вкладная"
                                        data-pdf="./dist/files/pdf/5000502-01-100-petlya-vkladnaya.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-101-petlya-nakladnaya" >&nbsp;</h2> 
                            <h2 >5000502-01-101 петля накладная</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-101-petlya-nakladnaya_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar   img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-101 петля накладная"
                                        data-pdf="./dist/files/pdf/5000502-01-101-petlya-nakladnaya.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                    

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-102-petlya-polunakladnaya" >&nbsp;</h2> 
                            <h2 >5000502-01-102 петля полунакладная</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-102-petlya-polunakladnaya_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-102 петля полунакладная"
                                        data-pdf="./dist/files/pdf/5000502-01-102-petlya-polunakladnaya.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-103-petlya-vkladnaya-falshfasadnaya" >&nbsp;</h2> 
                            <h2 >5000502-01-103 петля вкладная фальшфасадная</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-103-petlya-vkladnaya-falshfasadnaya_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-103 петля вкладная фальшфасадная"
                                        data-pdf="./dist/files/pdf/5000502-01-103-petlya-vkladnaya-falshfasadnaya.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                     

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-104-petlya-nakladnaya-nulevogo-vhozhdeniya" >&nbsp;</h2> 
                            <h2 >5000502-01-104 петля накладная нулевого вхождения</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-104-petlya-nakladnaya-nulevogo-vhozhdeniya_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-104 петля накладная нулевого вхождения"
                                        data-pdf="./dist/files/pdf/5000502-01-104-petlya-nakladnaya-nulevogo-vhozhdeniya.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                      

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-110-petlya-vkladnaya-bez-pruzhiny" >&nbsp;</h2> 
                            <h2 >5000502-01-110 петля вкладная без пружины</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-110-petlya-vkladnaya-bez-pruz_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-110 петля вкладная без пружины"
                                        data-pdf="./dist/files/pdf/5000502-01-110-petlya-vkladnaya-bez-pruz.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                    

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-111-petlya-nakladnaya-bez-pruzhiny" >&nbsp;</h2> 
                            <h2 >5000502-01-111 петля накладная без пружины</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-111-petlya-nakladnaya-bez-pruzhiny_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-111 петля накладная без пружины"
                                        data-pdf="./dist/files/pdf/5000502-01-111-petlya-nakladnaya-bez-pruzhiny.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>  

                  

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-112-petlya-polunakladnaya-bez-pruzhiny" >&nbsp;</h2> 
                            <h2 >5000502-01-112 петля полунакладная без пружины</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-112-petlya-polunakladnaya-bez-pruzhiny_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-112 петля полунакладная без пружины"
                                        data-pdf="./dist/files/pdf/5000502-01-112-petlya-polunakladnaya-bez-pruzhiny.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                    

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-113-petlya-vkladnaya-falshfasadnaya-bez-pruzhiny" >&nbsp;</h2> 
                            <h2 >5000502-01-113 петля вкладная фальшфасадная без пружины</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-113-petlya-vkladnaya-falshfasadnaya-bez-pruzhiny_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-113 петля вкладная фальшфасадная без пружины"
                                        data-pdf="./dist/files/pdf/5000502-01-113-petlya-vkladnaya-falshfasadnaya-bez-pruzhiny.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                     

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-01-114-petlya-nakladnaya-nulevogo-vhozhdeniya-bez-pruzhiny" >&nbsp;</h2> 
                            <h2 >5000502-01-114 петля накладная нулевого вхождения без пружины</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-01-114-petlya-nakladnaya-nulevogo-vhozhdeniya-bez-pruzhiny_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-01-114 петля накладная нулевого вхождения без пружины"
                                        data-pdf="./dist/files/pdf/5000502-01-114-petlya-nakladnaya-nulevogo-vhozhdeniya-bez-pruzhiny.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>  

                    

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="petli-dlya-fasadov-podbor-po-vesu" >&nbsp;</h2> 
                            <h2 >ПЕТЛИ для ФАСАДОВ (подбор по весу)</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/petli-dlya-fasadov-podbor-po-vesu_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="ПЕТЛИ для ФАСАДОВ (подбор по весу)"
                                        data-pdf="./dist/files/pdf/petli-dlya-fasadov-podbor-po-vesu.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>           
                                                                    
                      </section>
                    </article>

                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="mehanizmy-razdvizheniya-dlya-fasadov-Cinetto-PS23">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ФАСАДОВ</h1>
                        </div>

                       

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-02-110-sistema-razdvizheniya-i-skladyvaniya-fasadov-Cinetto-PS23" >&nbsp;</h2> 
                            <h2 >5000502-02-110 система раздвижения и складывания фасадов Cinetto PS23</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/PS23_sch_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-02-110 система раздвижения и складывания фасадов Cinetto PS23"
                                        data-pdf="./dist/files/pdf/PS23_sch.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 
                        </section>
                    </article>

                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="mehanizmy-podemnye-dlya-fasadov">МЕХАНИЗМЫ ПОДЪЕМНЫЕ для ФАСАДОВ</h1>
                        </div>

                     

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="mehanizmy-podemny1" >&nbsp;</h2> 
                            <h2 >mehanizmy-podemny1</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="mehanizmy-podemny1"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>
                        </section>
                    </article>


                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="mekhanizmy-vydvizheniya-dlya-yashchikov">МЕХАНИЗМЫ ВЫДВИЖЕНИЯ для ЯЩИКОВ</h1>
                        </div> 
               

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-101-movento-blumotion-napravlyayushchie-250" >&nbsp;</h2> 
                            <h2 >5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-101 MOVENTO BLUMOTION 40 kg 250 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-101 MOVENTO BLUMOTION 40 kg 250 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                  

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-103-movento-blumotion-napravlyayushchie-300" >&nbsp;</h2> 
                            <h2 >5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-103 MOVENTO BLUMOTION 40 kg 300 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-103 MOVENTO BLUMOTION 40 kg 300 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>  

                      

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-105-movento-blumotion-napravlyayushchie-350" >&nbsp;</h2> 
                            <h2 >5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-105 MOVENTO BLUMOTION 40 kg 350 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-105 MOVENTO BLUMOTION 40 kg 350 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                   


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-107-movento-blumotion-napravlyayushchie-400" >&nbsp;</h2> 
                            <h2 >5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-107 MOVENTO BLUMOTION 40 kg 400 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-107 MOVENTO BLUMOTION 40 kg 400 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-109-movento-blumotion-napravlyayushchie-450" >&nbsp;</h2> 
                            <h2 >5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-108 MOVENTO BLUMOTION 40 kg 450 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-108 MOVENTO BLUMOTION 40 kg 450 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                   

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-111-movento-blumotion-napravlyayushchie-500" >&nbsp;</h2> 
                            <h2 >5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-110 MOVENTO BLUMOTION 40 kg 500 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-110 MOVENTO BLUMOTION 40 kg 500 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-113-movento-blumotion-napravlyayushchie-550" >&nbsp;</h2> 
                            <h2 >5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-113 MOVENTO BLUMOTION 40 kg 550 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-113 MOVENTO BLUMOTION 40 kg 550 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-114-movento-blumotion-napravlyayushchie-600" >&nbsp;</h2> 
                            <h2 >5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-114 MOVENTO BLUMOTION 40 kg 600 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-114 MOVENTO BLUMOTION 40 kg 600 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-121-movento-tipon-napravlyayushchie-250" >&nbsp;</h2> 
                            <h2 >5000502-04-121 MOVENTO TIPON 40 КГ 250 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-121 MOVENTO TIPON 40 kg 250 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-121 MOVENTO TIPON 40 КГ 250 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-121 MOVENTO TIPON 40 kg 250 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

              

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-04-125-movento-tipon-napravlyayushchie-300" >&nbsp;</h2> 
                            <h2 >5000502-04-125 MOVENTO TIPON 40 КГ 300 мм</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-125 MOVENTO TIPON 40 kg 300 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-125 MOVENTO TIPON 40 КГ 300 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-125 MOVENTO TIPON 40 kg 300 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>  

                  

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-04-128-movento-tipon-napravlyayushchie-350">&nbsp;</h2>                   
                        <h2 >5000502-04-128 MOVENTO TIPON 40 КГ 350 мм</h2>                             
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-128 MOVENTO TIPON 40 kg 350 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-128 MOVENTO TIPON 40 КГ 350 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-128 MOVENTO TIPON 40 kg 350 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-04-133-movento-tipon-napravlyayushchie-400">&nbsp;</h2>                   
                        <h2 >5000502-04-128 MOVENTO TIPON 40 КГ 400 мм</h2>                             
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-128 MOVENTO TIPON 40 kg 400 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-128 MOVENTO TIPON 40 КГ 400 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-128 MOVENTO TIPON 40 kg 400 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-04-139-movento-tipon-napravlyayushchie-450">&nbsp;</h2>                   
                        <h2 >5000502-04-139 MOVENTO TIPON 40 КГ 450 мм</h2>                             
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-139 MOVENTO TIPON 40 kg 450 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-139 MOVENTO TIPON 40 КГ 450 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-139 MOVENTO TIPON 40 kg 450 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-04-141-movento-tipon-napravlyayushchie-500">&nbsp;</h2>                   
                        <h2 >5000502-04-141 MOVENTO TIPON 40 КГ 500 мм</h2>                            
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-141 MOVENTO TIPON 40 kg 500 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-141 MOVENTO TIPON 40 КГ 500 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-141 MOVENTO TIPON 40 kg 500 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                        
                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-04-143-movento-tipon-napravlyayushchie-550">&nbsp;</h2>                   
                        <h2 >5000502-04-143 MOVENTO TIPON 40 КГ 550 мм</h2>                            
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-143 MOVENTO TIPON 40 kg 550 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-143 MOVENTO TIPON 40 КГ 550 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-143 MOVENTO TIPON 40 kg 550 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-04-145-movento-tipon-napravlyayushchie-600">&nbsp;</h2>                   
                        <h2 >5000502-04-145 MOVENTO TIPON 40 КГ 600 мм</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-04-145 MOVENTO TIPON 40 kg 600 mm_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-04-145 MOVENTO TIPON 40 КГ 600 мм"
                                        data-pdf="./dist/files/pdf/5000502-04-145 MOVENTO TIPON 40 kg 600 mm.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>


                        <h2 id="tekhnicheskaya-informaciya-po-napravlyayushchim">&nbsp;</h2>                   
                        <h2 >Техническая информация по направляющим</h2>

       

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 >&nbsp;</h2>                   
                        <h2 >blum MOVENTO - инструкция по установке TIP-ON BLUMOTION</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/blum-movento---instrukciya-po-ustanovke-tip-on-blumotion_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="blum MOVENTO - инструкция по установке TIP-ON BLUMOTION"
                                        data-pdf="./dist/files/pdf/blum-movento---instrukciya-po-ustanovke-tip-on-blumotion.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 >&nbsp;</h2>                   
                        <h2 >blum MOVENTO - инструкция по установке БОКОВОГО СИНХРОНИЗАТОРА</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/blum-movento---instrukciya-po-ustanovke-bokovogo-sinhronizatora_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="blum MOVENTO - инструкция по установке БОКОВОГО СИНХРОНИЗАТОРА"
                                        data-pdf="./dist/files/pdf/blum-movento---instrukciya-po-ustanovke-bokovogo-sinhronizatora.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 >&nbsp;</h2>                   
                        <h2 >blum MOVENTO - инструкция по установке СИНХРОНИЗАТОРА ДЛЯ TIP-ON</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/blum-movento---instrukciya-po-ustanovke-sinhronizatora-dlya-tip-on_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="blum MOVENTO - инструкция по установке СИНХРОНИЗАТОРА ДЛЯ TIP-ON"
                                        data-pdf="./dist/files/pdf/blum-movento---instrukciya-po-ustanovke-sinhronizatora-dlya-tip-on.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 >&nbsp;</h2>                   
                        <h2 >blum MOVENTO - листовка МОНТАЖ КО ДНУ</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/blum-movento---listovka-montazh-ko-dnu_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="blum MOVENTO - листовка МОНТАЖ КО ДНУ"
                                        data-pdf="./dist/files/pdf/blum-movento---listovka-montazh-ko-dnu.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

           

                         <div class="bs-callout bs-callout-warning cont" > 
                        <h2 >&nbsp;</h2>                   
                        <h2 >blum MOVENTO - листовка РЕГУЛИРОВКА ПО ГЛУБИНЕ</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/blum-movento---listovka-regulirovka-po-glubine_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="blum MOVENTO - листовка РЕГУЛИРОВКА ПО ГЛУБИНЕ"
                                        data-pdf="./dist/files/pdf/blum-movento---listovka-regulirovka-po-glubine.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                         <div class="bs-callout bs-callout-warning cont" > 
                        <h2 >&nbsp;</h2>                   
                        <h2 >blum MOVENTO - ОПИСАНИЕ ПРОДУКЦИИ</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/blum-movento---opisanie-produkcii_16.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="blum MOVENTO - ОПИСАНИЕ ПРОДУКЦИИ"
                                        data-pdf="./dist/files/pdf/blum-movento---opisanie-produkcii.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>           
                                                                    
                      </section>
                    </article>



                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="opory">ОПОРЫ</h1>
                        </div>

                 

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-05-501-opora-reguliruemaya-universalnaya">&nbsp;</h2>                   
                        <h2 >5000502-05-501 опора регулируемая универсальная</h2>                          
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-05-501-opora-reguliruemaya-universalnaya_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-05-501 опора регулируемая универсальная"
                                        data-pdf="./dist/files/pdf/5000502-05-501-opora-reguliruemaya-universalnaya.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                   

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-05-502-opora-reguliruemaya-s-podderzhkoy-bokoviny">&nbsp;</h2>                   
                        <h2 >5000502-05-502 опора регулируемая с поддержкой боковины</h2>                         
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-05-502-opora-reguliruemaya-s-podderzhkoy-bokoviny_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-05-502 опора регулируемая с поддержкой боковины"
                                        data-pdf="./dist/files/pdf/5000502-05-502-opora-reguliruemaya-s-podderzhkoy-bokoviny.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-05-511-opora-reguliruemaya-malaya">&nbsp;</h2>                   
                        <h2 >5000502-05-511 опора регулируемая малая</h2>                        
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-05-511-opora-reguliruemaya-malaya_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-05-511 опора регулируемая малая"
                                        data-pdf="./dist/files/pdf/5000502-05-511-opora-reguliruemaya-malaya.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-05-512-opora-reguliruemaya-malaya-s-cokolnoy-klipsoy">&nbsp;</h2>                   
                        <h2 >5000502-05-512 опора регулируемая малая с цокольной клипсой</h2>                       
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-05-512-opora-reguliruemaya-malaya-s-cokolnoy-klipsoy_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-05-512 опора регулируемая малая с цокольной клипсой"
                                        data-pdf="./dist/files/pdf/5000502-05-512-opora-reguliruemaya-malaya-s-cokolnoy-klipsoy.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>  
                        </section>
                    </article>

                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="zashchelki-mebelnye">ЗАЩЕЛКИ МЕБЕЛЬНЫЕ</h1>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-06-100-zashchelka-tipon">&nbsp;</h2>                   
                        <h2  >5000502-06-100 защелка - TIPON</h2>                       
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/5000502-06-100-zashchelka---tipon_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-06-100 защелка - TIPON"
                                        data-pdf="./dist/files/pdf/5000502-06-100-zashchelka---tipon.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-06-106-zashchelka-mebelnaya-magnitnaya">&nbsp;</h2>                   
                            <h2 >5000502-06-106 защелка мебельная магнитная</h2>              
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-06-106-zashchelka-mebelnaya-magnitnaya_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-06-106 защелка мебельная магнитная"
                                            data-pdf="./dist/files/pdf/5000502-06-106-zashchelka-mebelnaya-magnitnaya.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div> 

                        </section>
                    </article>

                   <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="styazhki">СТЯЖКИ</h1>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm">&nbsp;</h2>                   
                        <h2  >5000502-07-701 стяжка эксцентриковая односторонняя<br>для плит 16 мм</h2>             
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-dlya-plit-16-mm_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-07-701 стяжка эксцентриковая односторонняя для плит 16 мм"
                                            data-pdf="./dist/files/pdf/5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-dlya-plit-16-mm.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div>

                

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-702 стяжка эксцентриковая двухсторонняя<br>для плит 16 мм</h2>            
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-dlya-plit-16-mm_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-07-702 стяжка эксцентриковая двухсторонняя для плит 16 мм"
                                            data-pdf="./dist/files/pdf/5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-dlya-plit-16-mm.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div>

               
                        
                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-703 стяжка эксцентриковая односторонняя<br>для плит 24 мм</h2>            
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-dlya-plit-24-mm_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-07-703 стяжка эксцентриковая односторонняя для плит 24 мм"
                                            data-pdf="./dist/files/pdf/5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-dlya-plit-24-mm.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div>

                

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-704 стяжка эксцентриковая двухсторонняя<br>для плит 24 мм</h2>            
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-dlya-plit-24-mm_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-07-704 стяжка эксцентриковая двухсторонняя для плит 24 мм"
                                            data-pdf="./dist/files/pdf/5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-dlya-plit-24-mm.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-707 стяжка эксцентриковая в металлическом корпусе<br>для плит 16 мм</h2>            
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-07-707-styazhka-ekscentrikovaya-v-metallicheskom-korpuse-dlya-plit-16-mm_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-07-707 стяжка эксцентриковая в металлическом корпусе для плит 16 мм"
                                            data-pdf="./dist/files/pdf/5000502-07-707-styazhka-ekscentrikovaya-v-metallicheskom-korpuse-dlya-plit-16-mm.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div> 

                

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-07-750-konfirmat-70h50">&nbsp;</h2>                   
                        <h2 >5000502-07-750 конфирмат 7,0Х50</h2>           
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-07-750-konfirmat-70h50_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-07-750 конфирмат 7,0Х50"
                                            data-pdf="./dist/files/pdf/5000502-07-750-konfirmat-70h50.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div> 

                

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-07-752-konfirmat-70h70">&nbsp;</h2>                   
                        <h2 >5000502-07-752 конфирмат 7,0Х70</h2>           
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-07-752-konfirmat-70h70_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-07-752 конфирмат 7,0Х70"
                                            data-pdf="./dist/files/pdf/5000502-07-752-konfirmat-70h70.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div>

                        </section>
                    </article>

                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="polkoderzhateli">ПОЛКОДЕРЖАТЕЛИ</h1>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="5000502-08-101-pk2-polkoderzhatel-s-fiksaciey-polki">&nbsp;</h2>                   
                        <h2 >5000502-08-101 PK2 полкодержатель с фиксацией полки</h2>          
                                <p> 
                                    <a>
                                        <img  
                                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                            data-src="./dist/images/5000502-08-101-pk2-polkoderzhatel-s-fiksaciey-polki_1.png"
                                            class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                            data-toggle="modal"
                                            data-target="#myModal"                                                                   
                                            alt="5000502-08-101 PK2 полкодержатель с фиксацией полки"
                                            data-pdf="./dist/files/pdf/5000502-08-101-pk2-polkoderzhatel-s-fiksaciey-polki.pdf"
                                        >
                                    </a>
                                </p>
                            <div class="overlay"></div>
                        </div>

                        </section> 
                    </article>

                    
                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="shtangi-mebelnye">ШТАНГИ МЕБЕЛЬНЫЕ</h1>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-10-300-shtanga-kruglaya-dlya-veshala" >&nbsp;</h2> 
                            <h2 >5000502-10-300 штанга круглая для вешала</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-10-300 штанга круглая для вешала"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>  

                        
                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="5000502-10-301-shtanga-kruglaya-s-prohodnym-derzhatelem-dlya-veshala" >&nbsp;</h2> 
                            <h2 >5000502-10-301 штанга круглая с проходным держателем</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="5000502-10-301 штанга круглая с проходным держателем"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 
                        </section>
                    </article>

                    <article  id="pantografy">
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" > ПАНТОГРАФЫ</h1>
                        </div>

                
                        
                        <div class="bs-callout bs-callout-warning cont" > 
                            
                            <div class="main-box clearfix"  id="SUPERLIFT">   
                                <!-- <span id="SUPERLIFT"></span>  -->
                                <h2 >Артикул: SUPERLIFT</h2>                            
                                <h2 >Пантограф 75-115 см, регул. нагрузки 14-20 кг</h2> 
                                 
                                <div class="main-box-body clearfix">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IzM8rPYn-Ag?rel=0"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class=" col-xs-6 col-sm-4 col-md-4">
                                   
                                    <div id="carousel" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Пантограф 75-115 см, регул. нагрузки 14-20 кг" data-image="./dist/images/SUPERLIFT.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                    src="./dist/images/SUPERLIFT.jpg"
                                                    data-src="./dist/images/SUPERLIFT.jpg"
                                                    class="center-block   img-rounded img-thumbnail bar "
                                                    data-toggle="modal"
                                                                                                                    
                                                    alt="Пантограф 75-115 см, регул. нагрузки 14-20 кг"
                                                    data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Ширина секции 750 - 1150 мм" data-image="./dist/images/SUPERLIFT_foto.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                        src="./dist/images/SUPERLIFT_foto.jpg"
                                                        data-src="./dist/images/SUPERLIFT_foto.jpg"
                                                        class="center-block   img-rounded img-thumbnail  bar "
                                                        data-toggle="modal"
                                                                                                                          
                                                        alt="Ширина секции 750 - 1150 мм"
                                                        data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="УСТАНОВКА к боковине &#034;Система 32&#034;" data-image="./dist/images/SUPERLIFT_sch1.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                        src="./dist/images/SUPERLIFT_sch1.jpg"
                                                        data-src="./dist/images/SUPERLIFT_sch1.jpg"
                                                        class="center-block   img-rounded img-thumbnail  bar "
                                                        data-toggle="modal"
                                                                                                                          
                                                        alt="Установка к боковине &#034;Система 32&#034;"
                                                        data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Регулировка угла наклона штанги" data-image="./dist/images/SUPERLIFT_sch2.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                        src="./dist/images/SUPERLIFT_sch2.jpg" 
                                                        data-src="./dist/images/SUPERLIFT_sch2.jpg"
                                                        class="center-block   img-rounded img-thumbnail  bar "
                                                        data-toggle="modal"
                                                                                                                         
                                                        alt="Регулировка угла наклона штанги"
                                                        data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Элементы управления -->
                                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Предыдущий</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Следующий</span>
                                        </a>
                                    </div>

                                    <div class="overlay"></div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8"
                                
                                 style="background: #fff;height: 237px;
                                 border: 1px solid rgb(221, 221, 221);
                                 box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                                 border-radius: 4px;
                                 line-height: 1.1;
                                 "
                                 >
                                   
                                    <p class="boldstyle f-row">                                        
                                        <span class="f-left">Материал:</span><span class="f-separator"></span><span class="f-val f-right"> металл/пластик</span>
                                        <br>
                                    </p>  
                                     <p class="boldstyle f-row"> 
                                        <span class="f-left">Установка:</span><span class="f-separator"></span><span class="f-val f-right"> к боковине "Система 32"</span>
                                        <br>
                                    </p> 
                                    <p class="boldstyle f-row">   
                                        <span class="f-left">Ширина секции</span><span class="f-separator"></span><span class="f-val f-right"> 750-1150 мм</span>
                                        <br>
                                    </p>
                                    <p class="boldstyle f-row"> 
                                        <span class="f-left">Нагрузка:</span><span class="f-separator"></span><span class="f-val f-right"> до 20 кг</span>
                                        <br>
                                    </p>
                                    <p class="boldstyle f-row"> 
                                        <span class="f-left">Производитель:</span><span class="f-separator"></span><span class="f-val f-right"> Ambos (Италия)</span>
                                        <br>
                                    </p>
                                    <p style="margin-bottom: 0px;margin-top: 15px;" class="boldstyle">
                                         <span>Преимущества:</span>
                                    </p>
                                    <ul class="stat" style="margin-top: 0px;">
                                        <li>регулировка угла наклона штанги. Используется с расширителем для пантографа 152/A.</li>                                        
                                    </ul>
                                    <i >Артикул: SUPERLIFT</i> 
                                </div>                            
                            </div> 
                            
                        </div> 


                        <div class="bs-callout bs-callout-warning cont" > 
                            
                            <div class="main-box clearfix"  id="LIFT800">   
                                <!-- <span id="SUPERLIFT"></span>  -->
                                <h2 >Артикул: LIFT800</h2>                            
                                <h2 >Пантограф с креплением к стене, 75-115 см, нагр.10 кг</h2> 
                                 
                                <div class="main-box-body clearfix">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n6QfgloIgCk?rel=0"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class=" col-xs-6 col-sm-4 col-md-4">
                                   
                                    <div id="carousel" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Пантограф 75-115 см, регул. нагрузки 14-20 кг" data-image="./dist/images/LIFT800.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                    src="./dist/images/LIFT800.jpg"
                                                    data-src="./dist/images/LIFT800.jpg"
                                                    class="center-block   img-rounded img-thumbnail bar "
                                                    data-toggle="modal"
                                                                                                                    
                                                    alt="Пантограф 75-115 см, регул. нагрузки 14-20 кг"
                                                    data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Ширина секции 750 - 1150 мм" data-image="./dist/images/LIFT800_foto.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                        src="./dist/images/LIFT800_foto.jpg"
                                                        data-src="./dist/images/LIFT800_foto.jpg"
                                                        class="center-block   img-rounded img-thumbnail  bar "
                                                        data-toggle="modal"
                                                                                                                          
                                                        alt="Ширина секции 750 - 1150 мм"
                                                        data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="УСТАНОВКА к боковине &#034;Система 32&#034;" data-image="./dist/images/LIFT800_sch.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                        src="./dist/images/LIFT800_sch.jpg"
                                                        data-src="./dist/images/LIFT800_sch.jpg"
                                                        class="center-block   img-rounded img-thumbnail  bar "
                                                        data-toggle="modal"
                                                                                                                          
                                                        alt="Установка к боковине &#034;Система 32&#034;"
                                                        data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Регулировка угла наклона штанги" data-image="./dist/images/LIFT800_dr.jpg" data-target="#image-gallery">
                                                    <img  style="height: 237px;"
                                                        src="./dist/images/LIFT800_dr.jpg" 
                                                        data-src="./dist/images/LIFT800_dr.jpg"
                                                        class="center-block   img-rounded img-thumbnail  bar "
                                                        data-toggle="modal"
                                                                                                                         
                                                        alt="Регулировка угла наклона штанги"
                                                        data-pdf=""
                                                    >
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Элементы управления -->
                                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Предыдущий</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Следующий</span>
                                        </a>
                                    </div>

                                    <div class="overlay"></div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8"
                                
                                 style="background: #fff;height: 237px;
                                 border: 1px solid rgb(221, 221, 221);
                                 box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                                 border-radius: 4px;
                                 line-height: 1.1;
                                 "
                                 >
                                    <p class="boldstyle f-row">                                        
                                        <span class="f-left">Примечание:</span><span class="f-separator"></span><span class="f-val f-right"> крепится к стене</span>
                                        <br>
                                    </p> 
                                    <p class="boldstyle f-row">                                        
                                        <span class="f-left">Материал:</span><span class="f-separator"></span><span class="f-val f-right"> металл/пластик</span>
                                        <br>
                                    </p>  
                                     <p class="boldstyle f-row"> 
                                        <span class="f-left">Установка:</span><span class="f-separator"></span><span class="f-val f-right">к задней стенке или стене</span>
                                        <br>
                                    </p> 
                                    <p class="boldstyle f-row">   
                                        <span class="f-left">Ширина секции</span><span class="f-separator"></span><span class="f-val f-right"> 750-1150 мм</span>
                                        <br>
                                    </p>
                                    <p class="boldstyle f-row"> 
                                        <span class="f-left">Нагрузка:</span><span class="f-separator"></span><span class="f-val f-right"> до 10 кг</span>
                                        <br>
                                    </p>
                                    <p class="boldstyle f-row"> 
                                        <span class="f-left">Производитель:</span><span class="f-separator"></span><span class="f-val f-right"> Ambos (Италия)</span>
                                        <br>
                                    </p>
                                    <p style="margin-bottom: 0px;margin-top: 15px;" class="boldstyle">
                                         <span>Преимущества:</span>
                                    </p>
                                    <ul class="stat" style="margin-top: 0px;">
                                        <li>разработан специально для использования во встроенных шкафах-купе, гардеробных комнатах и в качестве торгового оборудования в магазинах;</li>
                                        <li>предназначен исключительно для прямого крепления к стене (весь необходимый крепеж и накладка идут в комплекте).</li>                                         
                                    </ul>
                                    <i >Артикул: LIFT800</i> 
                                </div>                            
                            </div> 
                            
                        </div> 

           

                       
                        </section> 
                    </article>
                    
                    <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="ruchki">РУЧКИ</h1>
                        </div>


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="ruchka1" >&nbsp;</h2> 
                            <h2 >ruchka1</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="ruchka1"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>  


                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="ruchka2" >&nbsp;</h2> 
                            <h2 >ruchka2</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="ruchka2"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 
                        </section>
                    </article>

                     <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="mekhanizmy-dlya-razdvizhnyh-stolov">МЕХАНИЗМЫ для РАЗДВИЖНЫХ СТОЛОВ</h1>
                        </div>

                

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="mekhanizmy1" >&nbsp;</h2> 
                            <h2 >mekhanizmy1</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="mekhanizmy1"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                        
                        </section>
                    </article>

                     <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="natyazhiteli-dlya-fasadov">НАТЯЖИТЕЛИ для ФАСАДОВ</h1>
                        </div>

                

                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 id="pivot-tn-103-2329-02">&nbsp;</h2>                   
                        <h2 >Pivot TN 103.2329.02</h2>                           
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/Pivot TN103_1.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="Pivot TN 103.2329.02"
                                        data-pdf="./dist/files/pdf/Pivot TN103.pdf"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>
                        <div class="bs-callout bs-callout-warning cont" > 
                        <h2 >&nbsp;</h2>                   
                                                 
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/Pivot TN103_2.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-book"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="Pivot TN 103.2329.02 чертеж"
                                        data-pdf="./dist/files/pdf/Pivot TN103_2.pdf"
                                        data-dwg="./dist/files/Pivot TN103.dwg"
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div>                        
                        </section>
                    </article>

                     <article  >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="mekhanizmy-dlya-obuvnic">МЕХАНИЗМЫ для ОБУВНИЦ</h1>
                        </div>

                

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="razdvizhnoy-derzhatel-dlya-obuvi-560-1000-mm-chernyy-892-11-300" >&nbsp;</h2> 
                            <h2 >Раздвижной держатель для обуви 560-1000 мм черный</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="Раздвижной держатель для обуви 560-1000 мм черный"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 

                 

                        <div class="bs-callout bs-callout-warning cont" > 
                            <h2 id="razdvizhnoy-derzhatel-dlya-obuvi-460-750-mm-stal-hromirovannyy-892-12-906" >&nbsp;</h2> 
                            <h2 >Раздвижной держатель для обуви 460-750 мм хромированный</h2>                              
                            <p> 
                                <a>
                                    <img  
                                        src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 
                                        data-src="./dist/images/test.png"
                                        class="center-block   img-rounded img-thumbnail b-lazy bar img-album"
                                        data-toggle="modal"
                                        data-target="#myModal"                                                                   
                                        alt="Раздвижной держатель для обуви 460-750 мм хромированный"
                                        data-pdf=""
                                    >
                                </a>
                            </p>
                            <div class="overlay"></div>
                        </div> 
                        </section>
                    </article>

                    
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >
                        <ul class="nav bs-sidenav">
                            
                            <li><a href="#petli-dlya-fasadov">ПЕТЛИ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-01-100-petlya-vkladnaya">&#9999;&nbsp;5000502-01-100 петля вкладная</a>
                                    </li>
                                    <li><a href="#5000502-01-101-petlya-nakladnaya">&#9999;&nbsp;5000502-01-101 петля накладная</a>
                                    </li>
                                    <li><a href="#5000502-01-102-petlya-polunakladnaya">&#9999;&nbsp;5000502-01-102 петля полунакладная</a>
                                    </li>
                                    <li><a  href="#5000502-01-103-petlya-vkladnaya-falshfasadnaya">&#9999;&nbsp;5000502-01-103 петля вкладная фальшфасадная</a>
                                    </li>
                                    <li><a  href="#5000502-01-104-petlya-nakladnaya-nulevogo-vhozhdeniya">&#9999;&nbsp;5000502-01-104 петля накладная нулевого вхождения</a>
                                    </li>
                                    <li><a  href="#5000502-01-110-petlya-vkladnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-110 петля вкладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-111-petlya-nakladnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-111 петля накладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-112-petlya-polunakladnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-112 петля полунакладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-113-petlya-vkladnaya-falshfasadnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-113 петля вкладная фальшфасадная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-114-petlya-nakladnaya-nulevogo-vhozhdeniya-bez-pruzhiny">&#9999;&nbsp;5000502-01-114 петля накладная нулевого вхождения без пружины</a>
                                    </li>
                                    <li><a  href="#petli-dlya-fasadov-podbor-po-vesu">&#9999;&nbsp;ПЕТЛИ для ФАСАДОВ (подбор по весу)</a>
                                    </li>                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#mehanizmy-razdvizheniya-dlya-fasadov-Cinetto-PS23">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-02-110-sistema-razdvizheniya-i-skladyvaniya-fasadov-Cinetto-PS23">&#9999;&nbsp;5000502-02-110 система раздвижения и складывания фасадов Cinetto PS23</a>
                                    </li>                                   
                                </ul>
                            </li>

                             <li>
                                <a href="#mehanizmy-podemnye-dlya-fasadov">МЕХАНИЗМЫ ПОДЪЕМНЫЕ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#mehanizmy-podemny1">&#9999;&nbsp;mehanizmy-podemny1</a>
                                    </li>                                   
                                </ul>
                            </li>
                           
                            <li>
                                <a href="#mekhanizmy-vydvizheniya-dlya-yashchikov">МЕХАНИЗМЫ ВЫДВИЖЕНИЯ для ЯЩИКОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-04-101-movento-blumotion-napravlyayushchie-250">&#9999;&nbsp;5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм</a>
                                    </li> 
                                    <li><a href="#5000502-04-103-movento-blumotion-napravlyayushchie-300">&#9999;&nbsp;5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-105-movento-blumotion-napravlyayushchie-350">&#9999;&nbsp;5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-107-movento-blumotion-napravlyayushchie-400">&#9999;&nbsp;5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-109-movento-blumotion-napravlyayushchie-450">&#9999;&nbsp;5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-111-movento-blumotion-napravlyayushchie-500">&#9999;&nbsp;5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-113-movento-blumotion-napravlyayushchie-550">&#9999;&nbsp;5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-114-movento-blumotion-napravlyayushchie-600">&#9999;&nbsp;5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-121-movento-tipon-napravlyayushchie-250">&#9999;&nbsp;5000502-04-121 MOVENTO TIPON 40 КГ 250 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-125-movento-tipon-napravlyayushchie-300">&#9999;&nbsp;5000502-04-125 MOVENTO TIPON 40 КГ 300 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-128-movento-tipon-napravlyayushchie-350">&#9999;&nbsp;5000502-04-128 MOVENTO TIPON 40 КГ 350 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-133-movento-tipon-napravlyayushchie-400">&#9999;&nbsp;5000502-04-128 MOVENTO TIPON 40 КГ 400 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-139-movento-tipon-napravlyayushchie-450">&#9999;&nbsp;5000502-04-139 MOVENTO TIPON 40 КГ 450 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-141-movento-tipon-napravlyayushchie-500">&#9999;&nbsp;5000502-04-141 MOVENTO TIPON 40 КГ 500 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-143-movento-tipon-napravlyayushchie-550">&#9999;&nbsp;5000502-04-143 MOVENTO TIPON 40 КГ 550 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-145-movento-tipon-napravlyayushchie-600">&#9999;&nbsp;5000502-04-145 MOVENTO TIPON 40 КГ 600 мм</a>
                                    </li>
                                    <li><a href="#tekhnicheskaya-informaciya-po-napravlyayushchim">&#9999;&nbsp;Техническая информация по направляющим</a>
                                    </li>                                  
                                </ul>
                            </li>

                             <li>
                                <a href="#opory">ОПОРЫ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-05-501-opora-reguliruemaya-universalnaya">&#9999;&nbsp;5000502-05-501 опора регулируемая универсальная</a>
                                    </li>
                                    <li><a href="#5000502-05-502-opora-reguliruemaya-s-podderzhkoy-bokoviny">&#9999;&nbsp;5000502-05-502 опора регулируемая с поддержкой боковины</a>
                                    </li>
                                    <li><a href="#5000502-05-511-opora-reguliruemaya-malaya">&#9999;&nbsp;5000502-05-511 опора регулируемая малая</a>
                                    </li>
                                    <li><a href="#5000502-05-512-opora-reguliruemaya-malaya-s-cokolnoy-klipsoy">&#9999;&nbsp;5000502-05-512 опора регулируемая малая с цокольной клипсой</a>
                                    </li >                                  
                                </ul>
                            </li>

                            <li>
                                <a href="#zashchelki-mebelnye">ЗАЩЕЛКИ МЕБЕЛЬНЫЕ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-06-100-zashchelka-tipon" >&#9999;&nbsp;5000502-06-100 защелка - TIPON</a>
                                    </li>                                    
                                    <li><a href="#5000502-06-106-zashchelka-mebelnaya-magnitnaya">&#9999;&nbsp;5000502-06-106 защелка мебельная магнитная</a>
                                    </li>                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#styazhki">СТЯЖКИ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm">&#9999;&nbsp;5000502-07-701 стяжка эксцентриковая односторонняя<br>для плит 16 мм</a>
                                    </li>                                    
                                    <li><a href="#5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm">&#9999;&nbsp;5000502-07-702 стяжка эксцентриковая двухсторонняя<br>для плит 16 мм</a>
                                    </li> 
                                    <li><a href="#5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm">&#9999;&nbsp;5000502-07-703 стяжка эксцентриковая односторонняя<br>для плит 24 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm">&#9999;&nbsp;5000502-07-704 стяжка эксцентриковая двухсторонняя<br>для плит 24 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm">&#9999;&nbsp;5000502-07-707 стяжка эксцентриковая в металлическом корпусе<br>для плит 16 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-750-konfirmat-70h50">&#9999;&nbsp;5000502-07-750 конфирмат 7.0Х50</a>
                                    </li>
                                    <li><a href="#5000502-07-752-konfirmat-70h70">&#9999;&nbsp;5000502-07-752 конфирмат 7.0Х70</a>
                                    </li>                                                                   
                                </ul>
                            </li>

                             <li>
                                <a href="#polkoderzhateli">ПОЛКОДЕРЖАТЕЛИ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-08-101-pk2-polkoderzhatel-s-fiksaciey-polki">&#9999;&nbsp;5000502-08-101 PK2 полкодержатель с фиксацией полки</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#shtangi-mebelnye">ШТАНГИ МЕБЕЛЬНЫЕ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-10-300-shtanga-kruglaya-dlya-veshala">&#9999;&nbsp;5000502-10-300 штанга круглая для вешала</a>
                                    </li>
                                    <li><a href="#5000502-10-301-shtanga-kruglaya-s-prohodnym-derzhatelem-dlya-veshala">&#9999;&nbsp;5000502-10-301 штанга круглая с проходным держателем</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#pantografy"> ПАНТОГРАФЫ</a>
                                <ul class="nav">
                                    <li><a href="#SUPERLIFT">&#9999;&nbsp;Пантограф 75-115 см, регул. нагрузки 14-20 кг</a>
                                    </li>
                                    <li><a href="#LIFT800">&#9999;&nbsp;Пантограф с креплением к стене, 75-115 см, нагр.10 кг</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#ruchki">РУЧКИ</a>
                                <ul class="nav">
                                    <li><a href="#ruchka1">&#9999;&nbsp;ruchka1</a>
                                    </li>
                                    <li><a href="#ruchka2">&#9999;&nbsp;ruchka2</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#mekhanizmy-dlya-razdvizhnyh-stolov">МЕХАНИЗМЫ для РАЗДВИЖНЫХ СТОЛОВ</a>
                                <ul class="nav">
                                    <li><a href="#mekhanizmy1">&#9999;&nbsp;mekhanizmy1</a>
                                    </li>                                                                                                    
                                </ul>
                            </li>

                             <li>
                                <a href="#natyazhiteli-dlya-fasadov">НАТЯЖИТЕЛИ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#pivot-tn-103-2329-02">&#9999;&nbsp;Pivot TN 103.2329.02</a>
                                    </li>                                                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#mekhanizmy-dlya-obuvnic">МЕХАНИЗМЫ для ОБУВНИЦ</a>
                                <ul class="nav">
                                    <li><a href="#razdvizhnoy-derzhatel-dlya-obuvi-560-1000-mm-chernyy-892-11-300">&#9999;&nbsp;Раздвижной держатель для обуви 560-1000 мм черный </a>
                                    </li>
                                    <li><a href="#razdvizhnoy-derzhatel-dlya-obuvi-460-750-mm-stal-hromirovannyy-892-12-906">&#9999;&nbsp;Раздвижной держатель для обуви 460-750 мм хромированный </a>
                                    </li>                                                                 
                                </ul>
                            </li>
                                                    
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->

                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="image-gallery">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                                    <i class="fa fa-arrow-left"></i>
                                </button>

                                <button type="button" class="btn btn-secondary float-right" id="show-next-image">
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              
    <script src="./dist/js/main.26.04.2018.js"></script> 
    <script>
        // var modalId = $('#image-gallery');

        $(document)
            .ready(function () {

                loadGallery(true, 'a.thumbb');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }



                //  @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                //  @param setClickAttr  Sets the attribute for the click handler.


                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function () {
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                        let $sel = selector;
                        current_image = $sel.data('image-id');
                        $('#image-gallery-title')
                            .text($sel.data('title'));
                        $('#image-gallery-image')
                            .attr('src', $sel.data('image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function () {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function () {
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function (e) {
                switch (e.which) {
                    case 37: // left
                        
                        // if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        if ($('#show-previous-image').is(":visible")) {
                        //   alert('left');  
                            $('#show-previous-image').click();
                        }
                        break;

                    case 39: // right
                        
                        // if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        if ($('#show-next-image').is(":visible")) {
                            // alert('right');
                            $('#show-next-image').click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });
    </script>
<?php include 'inc-footer2.php'; ?>