<?php
session_start();
require_once('data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass'])) { header('Location:index-session.php');    exit();}
if ($_SESSION['sess_login']!==$enter_login ||   $_SESSION['sess_pass']!==$enter_passw) {header('Location:index-session.php');    exit();}
?> 
<?php
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
include 'inc-header-menu.php';
include 'inc-left-side-menu-furnitura.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="petli-dlya-fasadov">ПЕТЛИ для ФАСАДОВ</h1>
                        </div> 
                        <!-- <a href="./dist/files/сводная таблица фурнитуры дверей распашных, класс ЛЮКС, STANDART.xlsx" type="button" class="btn btn-primary"download="сводная таблица фурнитуры дверей распашных, класс ЛЮКС, STANDART.xlsx">Скачать - сводная таблица фурнитуры дверей распашных, класс ЛЮКС, STANDART.xlsx</a>  -->
                        <h2 id="5000502-01-100-petlya-vkladnaya">&nbsp;</h2>                   
                        <h2 >5000502-01-100 петля вкладная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-100 петля вкладная.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-100 петля вкладная.pdf"></a>
                        </object> 

                        <h2 id="5000502-01-101-petlya-nakladnaya">&nbsp;</h2>                   
                        <h2 >5000502-01-101 петля накладная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-101 петля накладная.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-101 петля накладная.pdf"></a>
                        </object>  

                        <h2 id="5000502-01-102-petlya-polunakladnaya">&nbsp;</h2>                   
                        <h2 >5000502-01-102 петля полунакладная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-102 петля полунакладная.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-102 петля полунакладная.pdf"></a>
                        </object> 

                        <h2 id="5000502-01-103-petlya-vkladnaya-falshfasadnaya">&nbsp;</h2>                   
                        <h2 >5000502-01-103 петля вкладная фальшфасадная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-103 петля вкладная фальшфасадная.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-103 петля вкладная фальшфасадная.pdf"></a>
                        </object> 

                        <h2 id="5000502-01-104-petlya-nakladnaya-nulevogo-vhozhdeniya">&nbsp;</h2>                   
                        <h2 >5000502-01-104 петля накладная нулевого вхождения</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-104 петля накладная нулевого вхождения.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-104 петля накладная нулевого вхождения.pdf"></a>
                        </object> 

                         <h2 id="5000502-01-110-petlya-vkladnaya-bez-pruzhiny">&nbsp;</h2>                   
                        <h2 >5000502-01-110 петля вкладная без пружины</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-110 петля вкладная без пружины.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-110 петля вкладная без пружины.pdf"></a>
                        </object> 

                        <h2 id="5000502-01-111-petlya-nakladnaya-bez-pruzhiny">&nbsp;</h2>                   
                        <h2 >5000502-01-111 петля накладная без пружины</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-111 петля накладная без пружины.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-111 петля накладная без пружины.pdf"></a>
                        </object> 

                        <h2 id="5000502-01-112-petlya-polunakladnaya-bez-pruzhiny">&nbsp;</h2>                   
                        <h2 >5000502-01-112 петля полунакладная без пружины</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-112 петля полунакладная без пружины.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-112 петля полунакладная без пружины.pdf"></a>
                        </object> 

                        <h2 id="5000502-01-113-petlya-vkladnaya-falshfasadnaya-bez-pruzhiny">&nbsp;</h2>                   
                        <h2 >5000502-01-113 петля вкладная фальшфасадная без пружины</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-113 петля вкладная фальшфасадная без пружины.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-113 петля вкладная фальшфасадная без пружины.pdf"></a>
                        </object> 

                        <h2 id="5000502-01-114-petlya-nakladnaya-nulevogo-vhozhdeniya-bez-pruzhiny">&nbsp;</h2>                   
                        <h2 >5000502-01-114 петля накладная нулевого вхождения без пружины</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-01-114 петля накладная нулевого вхождения без пружины.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-01-114 петля накладная нулевого вхождения без пружины.pdf"></a>
                        </object>            
                                                                    
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="mehanizmy-razdvizheniya-dlya-fasadov-Cinetto-PS23">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ФАСАДОВ</h1>
                        </div>

                        <h2 id="5000502-02-110-sistema-razdvizheniya-i-skladyvaniya-fasadov-Cinetto-PS23">&nbsp;</h2>                   
                        <h2 >5000502-02-110 система раздвижения и складывания фасадов Cinetto PS23</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/PS23_sch.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/PS23_sch.pdf"></a>
                        </object> 

                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="mehanizmy-podemnye-dlya-fasadov">МЕХАНИЗМЫ ПОДЪЕМНЫЕ для ФАСАДОВ</h1>
                        </div>

                        <h2 id="mehanizmy-podemny1">&nbsp;</h2>                   
                        <h2 >mehanizmy-podemny1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 
                        
                    </article>


                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="mekhanizmy-vydvizheniya-dlya-yashchikov">МЕХАНИЗМЫ ВЫДВИЖЕНИЯ для ЯЩИКОВ</h1>
                        </div> 
                        <!-- <a href="./dist/files/сводная таблица фурнитуры дверей распашных, класс ЛЮКС, STANDART.xlsx" type="button" class="btn btn-primary"download="сводная таблица фурнитуры дверей распашных, класс ЛЮКС, STANDART.xlsx">Скачать - сводная таблица фурнитуры дверей распашных, класс ЛЮКС, STANDART.xlsx</a>  -->
                        <h2 id="5000502-04-101-movento-blumotion-napravlyayushchie-250">&nbsp;</h2>                   
                        <h2 >5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-103-movento-blumotion-napravlyayushchie-300">&nbsp;</h2>                   
                        <h2 >5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм.pdf"></a>
                        </object>  

                        <h2 id="5000502-04-105-movento-blumotion-napravlyayushchie-350">&nbsp;</h2>                   
                        <h2 >5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-107-movento-blumotion-napravlyayushchie-400">&nbsp;</h2>                   
                        <h2 >5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-109-movento-blumotion-napravlyayushchie-450">&nbsp;</h2>                   
                        <h2 >5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм.pdf"></a>
                        </object> 

                         <h2 id="5000502-04-111-movento-blumotion-napravlyayushchie-500">&nbsp;</h2>                   
                        <h2 >5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-113-movento-blumotion-napravlyayushchie-550">&nbsp;</h2>                   
                        <h2 >5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-114-movento-blumotion-napravlyayushchie-600">&nbsp;</h2>                   
                        <h2 >5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-121-movento-tipon-napravlyayushchie-250">&nbsp;</h2>                   
                        <h2 >5000502-04-121 MOVENTO TIPON 40 КГ 250 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-121 MOVENTO TIPON 40 КГ 250 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-121 MOVENTO TIPON 40 КГ 250 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-125-movento-tipon-napravlyayushchie-300">&nbsp;</h2>                   
                        <h2 >5000502-04-125 MOVENTO TIPON 40 КГ 300 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-125 MOVENTO TIPON 40 КГ 300 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-125 MOVENTO TIPON 40 КГ 300 мм.pdf"></a>
                        </object>  

                        <h2 id="5000502-04-128-movento-tipon-napravlyayushchie-350">&nbsp;</h2>                   
                        <h2 >5000502-04-128 MOVENTO TIPON 40 КГ 350 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-128 MOVENTO TIPON 40 КГ 350 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-128 MOVENTO TIPON 40 КГ 350 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-133-movento-tipon-napravlyayushchie-400">&nbsp;</h2>                   
                        <h2 >5000502-04-128 MOVENTO TIPON 40 КГ 400 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-128 MOVENTO TIPON 40 КГ 400 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-128 MOVENTO TIPON 40 КГ 400 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-139-movento-tipon-napravlyayushchie-450">&nbsp;</h2>                   
                        <h2 >5000502-04-139 MOVENTO TIPON 40 КГ 450 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-139 MOVENTO TIPON 40 КГ 450 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-139 MOVENTO TIPON 40 КГ 450 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-141-movento-tipon-napravlyayushchie-500">&nbsp;</h2>                   
                        <h2 >5000502-04-141 MOVENTO TIPON 40 КГ 500 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-141 MOVENTO TIPON 40 КГ 500 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-141 MOVENTO TIPON 40 КГ 500 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-143-movento-tipon-napravlyayushchie-550">&nbsp;</h2>                   
                        <h2 >5000502-04-143 MOVENTO TIPON 40 КГ 550 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-143 MOVENTO TIPON 40 КГ 550 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-143 MOVENTO TIPON 40 КГ 550 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-04-145-movento-tipon-napravlyayushchie-600">&nbsp;</h2>                   
                        <h2 >5000502-04-145 MOVENTO TIPON 40 КГ 600 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-04-145 MOVENTO TIPON 40 КГ 600 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-04-145 MOVENTO TIPON 40 КГ 600 мм.pdf"></a>
                        </object> 

                        <h2 id="tekhnicheskaya-informaciya-po-napravlyayushchim">&nbsp;</h2>                   
                        <h2 >Техническая информация по направляющим</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/blum MOVENTO - инструкция по установке TIP-ON BLUMOTION.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/blum MOVENTO - инструкция по установке TIP-ON BLUMOTION.pdf"></a>
                        </object> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/blum MOVENTO - инструкция по установке БОКОВОГО СИНХРОНИЗАТОРА.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/blum MOVENTO - инструкция по установке БОКОВОГО СИНХРОНИЗАТОРА.pdf"></a>
                        </object> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/blum MOVENTO - инструкция по установке СИНХРОНИЗАТОРА ДЛЯ TIP-ON.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/blum MOVENTO - инструкция по установке СИНХРОНИЗАТОРА ДЛЯ TIP-ON.pdf"></a>
                        </object>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/blum MOVENTO - листовка МОНТАЖ КО ДНУ.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/blum MOVENTO - листовка МОНТАЖ КО ДНУ.pdf"></a>
                        </object> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/blum MOVENTO - листовка РЕГУЛИРОВКА ПО ГЛУБИНЕ.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/blum MOVENTO - листовка РЕГУЛИРОВКА ПО ГЛУБИНЕ.pdf"></a>
                        </object>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/blum MOVENTO - ОПИСАНИЕ ПРОДУКЦИИ.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/blum MOVENTO - ОПИСАНИЕ ПРОДУКЦИИ.pdf"></a>
                        </object>           
                                                                    
                      </section>
                    </article>



                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="opory">ОПОРЫ</h1>
                        </div>

                        <h2 id="5000502-05-501-opora-reguliruemaya-universalnaya">&nbsp;</h2>                   
                        <h2 >5000502-05-501 опора регулируемая универсальная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-05-501 опора регулируемая универсальная.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-05-501 опора регулируемая универсальная.pdf"></a>
                        </object> 

                        <h2 id="5000502-05-502-opora-reguliruemaya-s-podderzhkoy-bokoviny">&nbsp;</h2>                   
                        <h2 >5000502-05-502 опора регулируемая с поддержкой боковины</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-05-502 опора регулируемая с поддержкой боковины.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-05-502 опора регулируемая с поддержкой боковины.pdf"></a>
                        </object> 

                        <h2 id="5000502-05-511-opora-reguliruemaya-malaya">&nbsp;</h2>                   
                        <h2 >5000502-05-511 опора регулируемая малая</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-05-511 опора регулируемая малая.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-05-511 опора регулируемая малая.pdf"></a>
                        </object> 

                        <h2 id="5000502-05-512-opora-reguliruemaya-malaya-s-cokolnoy-klipsoy">&nbsp;</h2>                   
                        <h2 >5000502-05-512 опора регулируемая малая с цокольной клипсой</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-05-512 опора регулируемая малая с цокольной клипсой.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-05-512 опора регулируемая малая с цокольной клипсой.pdf"></a>
                        </object> 

                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="zashchelki-mebelnye">ЗАЩЕЛКИ МЕБЕЛЬНЫЕ</h1>
                        </div>

                        <h2 id="5000502-06-100-zashchelka-tipon">&nbsp;</h2>                   
                        <h2  >5000502-06-100 защелка - TIPON</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-06-100 защелка - TIPON.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-06-100 защелка - TIPON.pdf"></a>
                        </object> 

                        <h2 id="5000502-06-106-zashchelka-mebelnaya-magnitnaya">&nbsp;</h2>                   
                        <h2 >5000502-06-106 защелка мебельная магнитная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-06-106 защелка мебельная магнитная.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-06-106 защелка мебельная магнитная.pdf"></a>
                        </object> 

                        

                    </article>

                   <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="styazhki">СТЯЖКИ</h1>
                        </div>

                        <h2 id="5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm">&nbsp;</h2>                   
                        <h2  >5000502-07-701 стяжка эксцентриковая односторонняя<br>для плит 16 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-07-701 стяжка эксцентриковая односторонняя для плит 16 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-07-701 стяжка эксцентриковая односторонняя для плит 16 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-702 стяжка эксцентриковая двухсторонняя<br>для плит 16 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-07-702 стяжка эксцентриковая двухсторонняя для плит 16 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-07-702 стяжка эксцентриковая двухсторонняя для плит 16 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-703 стяжка эксцентриковая односторонняя<br>для плит 24 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-07-703 стяжка эксцентриковая односторонняя для плит 24 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-07-703 стяжка эксцентриковая односторонняя для плит 24 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-704 стяжка эксцентриковая двухсторонняя<br>для плит 24 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-07-704 стяжка эксцентриковая двухсторонняя для плит 24 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-07-704 стяжка эксцентриковая двухсторонняя для плит 24 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm">&nbsp;</h2>                   
                        <h2 >5000502-07-707 стяжка эксцентриковая в металлическом корпусе<br>для плит 16 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-07-707 стяжка эксцентриковая в металлическом корпусе для плит 16 мм.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-07-707 стяжка эксцентриковая в металлическом корпусе для плит 16 мм.pdf"></a>
                        </object> 

                        <h2 id="5000502-07-750-konfirmat-70h50">&nbsp;</h2>                   
                        <h2 >5000502-07-750 конфирмат 7,0Х50</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-07-750 конфирмат 7,0Х50.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-07-750 конфирмат 7,0Х50pdf"></a>
                        </object> 

                        <h2 id="5000502-07-752-konfirmat-70h70">&nbsp;</h2>                   
                        <h2 >5000502-07-752 конфирмат 7,0Х70</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-07-752 конфирмат 7,0Х70.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-07-752 конфирмат 7,0Х70.pdf"></a>
                        </object>                      

                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="polkoderzhateli">ПОЛКОДЕРЖАТЕЛИ</h1>
                        </div>

                        <h2 id="5000502-08-101-pk2-polkoderzhatel-s-fiksaciey-polki">&nbsp;</h2>                   
                        <h2 >5000502-08-101 PK2 полкодержатель с фиксацией полки</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000502-08-101 PK2 полкодержатель с фиксацией полки.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000502-08-101 PK2 полкодержатель с фиксацией полки.pdf"></a>
                        </object> 
                        
                    </article>

                    
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="shtangi-mebelnye">ШТАНГИ МЕБЕЛЬНЫЕ</h1>
                        </div>

                        <h2 id="5000502-10-300-shtanga-kruglaya-dlya-veshala">&nbsp;</h2>                   
                        <h2 >5000502-10-300 штанга круглая для вешала</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        <h2 id="5000502-10-301-shtanga-kruglaya-s-prohodnym-derzhatelem-dlya-veshala">&nbsp;</h2>                   
                        <h2 >5000502-10-301 штанга круглая с проходным держателем</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 
                        
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="pantografy"> ПАНТОГРАФЫ</h1>
                        </div>

                        <h2 id="pantograf1">&nbsp;</h2>                   
                        <h2 >pantograf1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        <h2 id="pantograf2">&nbsp;</h2>                   
                        <h2 >pantograf2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 
                        
                    </article>
                    
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="ruchki">РУЧКИ</h1>
                        </div>

                        <h2 id="ruchka1">&nbsp;</h2>                   
                        <h2 >ruchka1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        <h2 id="ruchka2">&nbsp;</h2>                   
                        <h2 >ruchka2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 
                        
                    </article>

                     <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="mekhanizmy-dlya-razdvizhnyh-stolov">МЕХАНИЗМЫ для РАЗДВИЖНЫХ СТОЛОВ</h1>
                        </div>

                        <h2 id="mekhanizmy1">&nbsp;</h2>                   
                        <h2 >mekhanizmy1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        
                        
                    </article>

                     <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="natyazhiteli-dlya-fasadov">НАТЯЖИТЕЛИ для ФАСАДОВ</h1>
                        </div>

                        <h2 id="pivot-tn-103-2329-02">&nbsp;</h2>                   
                        <h2 >Pivot TN 103.2329.02</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/Pivot TN103.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/Pivot TN103.pdf"></a>
                        </object>                        
                        
                    </article>

                     <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="mekhanizmy-dlya-obuvnic">МЕХАНИЗМЫ для ОБУВНИЦ</h1>
                        </div>

                        <h2 id="razdvizhnoy-derzhatel-dlya-obuvi-560-1000-mm-chernyy-892-11-300">&nbsp;</h2>                   
                        <h2 >Раздвижной держатель для обуви 560-1000 мм черный </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        <h2 id="razdvizhnoy-derzhatel-dlya-obuvi-460-750-mm-stal-hromirovannyy-892-12-906">&nbsp;</h2>                   
                        <h2 >Раздвижной держатель для обуви 460-750 мм хромированный </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 
                        
                    </article>

                    
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" id="main-page">
                        <ul class="nav bs-sidenav">
                            
                            <li><a href="#petli-dlya-fasadov">ПЕТЛИ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-01-100-petlya-vkladnaya">&#9733;&nbsp;5000502-01-100 петля вкладная</a>
                                    </li>
                                    <li><a href="#5000502-01-101-petlya-nakladnaya">&#9733;&nbsp;5000502-01-101 петля накладная</a>
                                    </li>
                                    <li><a href="#5000502-01-102-petlya-polunakladnaya">&#9733;&nbsp;5000502-01-102 петля полунакладная</a>
                                    </li>
                                    <li><a  href="#5000502-01-103-petlya-vkladnaya-falshfasadnaya">&#9733;&nbsp;5000502-01-103 петля вкладная фальшфасадная</a>
                                    </li>
                                    <li><a  href="#5000502-01-104-petlya-nakladnaya-nulevogo-vhozhdeniya">&#9733;&nbsp;5000502-01-104 петля накладная нулевого вхождения</a>
                                    </li>
                                    <li><a  href="#5000502-01-110-petlya-vkladnaya-bez-pruzhiny">&#9733;&nbsp;5000502-01-110 петля вкладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-111-petlya-nakladnaya-bez-pruzhiny">&#9733;&nbsp;5000502-01-111 петля накладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-112-petlya-polunakladnaya-bez-pruzhiny">&#9733;&nbsp;5000502-01-112 петля полунакладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-113-petlya-vkladnaya-falshfasadnaya-bez-pruzhiny">&#9733;&nbsp;5000502-01-113 петля вкладная фальшфасадная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-114-petlya-nakladnaya-nulevogo-vhozhdeniya-bez-pruzhiny">&#9733;&nbsp;5000502-01-114 петля накладная нулевого вхождения без пружины</a>
                                    </li>                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#mehanizmy-razdvizheniya-dlya-fasadov-Cinetto-PS23">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-02-110-sistema-razdvizheniya-i-skladyvaniya-fasadov-Cinetto-PS23">&#9733;&nbsp;5000502-02-110 система раздвижения и складывания фасадов Cinetto PS23</a>
                                    </li>                                   
                                </ul>
                            </li>

                             <li>
                                <a href="#mehanizmy-podemnye-dlya-fasadov">МЕХАНИЗМЫ ПОДЪЕМНЫЕ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#mehanizmy-podemny1">&#9733;&nbsp;mehanizmy-podemny1</a>
                                    </li>                                   
                                </ul>
                            </li>
                           
                            <li>
                                <a href="#mekhanizmy-vydvizheniya-dlya-yashchikov">МЕХАНИЗМЫ ВЫДВИЖЕНИЯ для ЯЩИКОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-04-101-movento-blumotion-napravlyayushchie-250">&#9733;&nbsp;5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм</a>
                                    </li> 
                                    <li><a href="#5000502-04-103-movento-blumotion-napravlyayushchie-300">&#9733;&nbsp;5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-105-movento-blumotion-napravlyayushchie-350">&#9733;&nbsp;5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-107-movento-blumotion-napravlyayushchie-400">&#9733;&nbsp;5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-109-movento-blumotion-napravlyayushchie-450">&#9733;&nbsp;5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-111-movento-blumotion-napravlyayushchie-500">&#9733;&nbsp;5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-113-movento-blumotion-napravlyayushchie-550">&#9733;&nbsp;5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-114-movento-blumotion-napravlyayushchie-600">&#9733;&nbsp;5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-121-movento-tipon-napravlyayushchie-250">&#9733;&nbsp;5000502-04-121 MOVENTO TIPON 40 КГ 250 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-125-movento-tipon-napravlyayushchie-300">&#9733;&nbsp;5000502-04-125 MOVENTO TIPON 40 КГ 300 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-128-movento-tipon-napravlyayushchie-350">&#9733;&nbsp;5000502-04-128 MOVENTO TIPON 40 КГ 350 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-133-movento-tipon-napravlyayushchie-400">&#9733;&nbsp;5000502-04-128 MOVENTO TIPON 40 КГ 400 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-139-movento-tipon-napravlyayushchie-450">&#9733;&nbsp;5000502-04-139 MOVENTO TIPON 40 КГ 450 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-141-movento-tipon-napravlyayushchie-500">&#9733;&nbsp;5000502-04-141 MOVENTO TIPON 40 КГ 500 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-143-movento-tipon-napravlyayushchie-550">&#9733;&nbsp;5000502-04-143 MOVENTO TIPON 40 КГ 550 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-145-movento-tipon-napravlyayushchie-600">&#9733;&nbsp;5000502-04-145 MOVENTO TIPON 40 КГ 600 мм</a>
                                    </li>
                                    <li><a href="#tekhnicheskaya-informaciya-po-napravlyayushchim">&#9733;&nbsp;Техническая информация по направляющим</a>
                                    </li>                                  
                                </ul>
                            </li>

                             <li>
                                <a href="#opory">ОПОРЫ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-05-501-opora-reguliruemaya-universalnaya">&#9733;&nbsp;5000502-05-501 опора регулируемая универсальная</a>
                                    </li>
                                    <li><a href="#5000502-05-502-opora-reguliruemaya-s-podderzhkoy-bokoviny">&#9733;&nbsp;5000502-05-502 опора регулируемая с поддержкой боковины</a>
                                    </li>
                                    <li><a href="#5000502-05-511-opora-reguliruemaya-malaya">&#9733;&nbsp;5000502-05-511 опора регулируемая малая</a>
                                    </li>
                                    <li><a href="#5000502-05-512-opora-reguliruemaya-malaya-s-cokolnoy-klipsoy">&#9733;&nbsp;5000502-05-512 опора регулируемая малая с цокольной клипсой</a>
                                    </li >                                  
                                </ul>
                            </li>

                            <li>
                                <a href="#zashchelki-mebelnye">ЗАЩЕЛКИ МЕБЕЛЬНЫЕ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-06-100-zashchelka-tipon" >&#9733;&nbsp;5000502-06-100 защелка - TIPON</a>
                                    </li>                                    
                                    <li><a href="#5000502-06-106-zashchelka-mebelnaya-magnitnaya">&#9733;&nbsp;5000502-06-106 защелка мебельная магнитная</a>
                                    </li>                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#styazhki">СТЯЖКИ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm">&#9733;&nbsp;5000502-07-701 стяжка эксцентриковая односторонняя<br>для плит 16 мм</a>
                                    </li>                                    
                                    <li><a href="#5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm">&#9733;&nbsp;5000502-07-702 стяжка эксцентриковая двухсторонняя<br>для плит 16 мм</a>
                                    </li> 
                                    <li><a href="#5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm">&#9733;&nbsp;5000502-07-703 стяжка эксцентриковая односторонняя<br>для плит 24 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm">&#9733;&nbsp;5000502-07-704 стяжка эксцентриковая двухсторонняя<br>для плит 24 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm">&#9733;&nbsp;5000502-07-707 стяжка эксцентриковая в металлическом корпусе<br>для плит 16 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-750-konfirmat-70h50">&#9733;&nbsp;5000502-07-750 конфирмат 7.0Х50</a>
                                    </li>
                                    <li><a href="#5000502-07-752-konfirmat-70h70">&#9733;&nbsp;5000502-07-752 конфирмат 7.0Х70</a>
                                    </li>                                                                   
                                </ul>
                            </li>

                             <li>
                                <a href="#polkoderzhateli">ПОЛКОДЕРЖАТЕЛИ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-08-101-pk2-polkoderzhatel-s-fiksaciey-polki">&#9733;&nbsp;5000502-08-101 PK2 полкодержатель с фиксацией полки</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#shtangi-mebelnye">ШТАНГИ МЕБЕЛЬНЫЕ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-10-300-shtanga-kruglaya-dlya-veshala">&#9733;&nbsp;5000502-10-300 штанга круглая для вешала</a>
                                    </li>
                                    <li><a href="#5000502-10-301-shtanga-kruglaya-s-prohodnym-derzhatelem-dlya-veshala">&#9733;&nbsp;5000502-10-301 штанга круглая с проходным держателем</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#pantografy"> ПАНТОГРАФЫ</a>
                                <ul class="nav">
                                    <li><a href="#pantograf1">&#9733;&nbsp;pantograf1</a>
                                    </li>
                                    <li><a href="#pantograf2">&#9733;&nbsp;pantograf2</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#ruchki">РУЧКИ</a>
                                <ul class="nav">
                                    <li><a href="#ruchka1">&#9733;&nbsp;ruchka1</a>
                                    </li>
                                    <li><a href="#ruchka2">&#9733;&nbsp;ruchka2</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#mekhanizmy-dlya-razdvizhnyh-stolov">МЕХАНИЗМЫ для РАЗДВИЖНЫХ СТОЛОВ</a>
                                <ul class="nav">
                                    <li><a href="#mekhanizmy1">&#9733;&nbsp;mekhanizmy1</a>
                                    </li>                                                                                                    
                                </ul>
                            </li>

                             <li>
                                <a href="#natyazhiteli-dlya-fasadov">НАТЯЖИТЕЛИ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#pivot-tn-103-2329-02">&#9733;&nbsp;Pivot TN 103.2329.02</a>
                                    </li>                                                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#mekhanizmy-dlya-obuvnic">МЕХАНИЗМЫ для ОБУВНИЦ</a>
                                <ul class="nav">
                                    <li><a href="#razdvizhnoy-derzhatel-dlya-obuvi-560-1000-mm-chernyy-892-11-300">&#9733;&nbsp;Раздвижной держатель для обуви 560-1000 мм черный </a>
                                    </li>
                                    <li><a href="#razdvizhnoy-derzhatel-dlya-obuvi-460-750-mm-stal-hromirovannyy-892-12-906">&#9733;&nbsp;Раздвижной держатель для обуви 460-750 мм хромированный </a>
                                    </li>                                                                 
                                </ul>
                            </li>
                                                    
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>