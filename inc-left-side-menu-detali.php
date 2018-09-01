<?php
// переменные на странице 
// $item_profili_Class = 'active';
// $item_reznye_Class = '';
// $item_kamni_Class = '';
// $item_rezby_Class = '';
// $item_tokarka_Class = '';
// $item_frezy_Class = '';
// $item_pazy_Class = '';
?>
<?php echo'
<article itemscope="" itemtype="http://schema.org/WebPage">   
    <div class="container bs-docs-container" >
        <div class="row">
            <!-- левое боковое меню начало -->
            <div class="col-md-2">
                <div class="list-group  bs-sidebar hidden-print affix vertical-menu nav bs-sidenav " id="navsub">
                    <ul class="list-group">
                        <!-- menu -->
                        <li class="menu">                                
                            <a href="detali-profili.php" class="list-group-item '.$item_profili_Class.'">Профили гладкие &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2">
                                    <a  class="list-group-item sub"  href="detali-profili.php#profili-nakladki">Накладки</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#profili-nakladki-50" >МДФ накладка №050/ДШ</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#profili-nakladki-51" >МДФ накладка №051/ДШ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#profili-nakladki-52" >МДФ накладка №052/ДШ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#profili-nakladki-53" >МДФ накладка №053/ДШ</a>
                                        </li>                                                                                
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#shtapiki">Штапики</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-100-hh-yy-zz">Пр_№100/XX/YY/ZZ штапик прижимной для фасада</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-101-26-17">Пр_№101/26/17 штапик </a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-101-26-15" >Пр_№101/26/15 для карниза </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-101-30-20" >Пр_№101/30/20 штапик </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-101-23-14" >Пр_№101/23/14 (штапик для фасадов стекло/витраж)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-101-20-105">Пр_№101/20/10.5 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-102-19-105">Пр_№102/19/10.5 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-103">Пр_№103 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-104-7-5">Пр_№104/7/5 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-105-13-105">Пр_№105/13/10.5 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-105-195-17">Пр_№105/19.5/17 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-106">Пр_№106 раскладка</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-108">Пр_№108 раскладка</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-111">Пр_№111 монтажный</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-112">Пр_№112 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-113">Пр_№113 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-126">Пр_№126 нащельник на двустворчатую дверь</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-157">Пр_№157 раскладка</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-157-met">Пр_№157/МЕТ раскладка</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-158-19-105-1">Пр_№158/19/10.5/1 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-158-28-19-1">Пр_№158/28/19/1 штапик </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-158-2">Пр_№158/2 штапик</a>
                                        </li>                                        
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-159">Пр_№159 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-160">Пр_№160 раскладка</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-161-16-105">Пр_№161/16/10.5 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-162">Пр_№162 штапик</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-163">Пр_№163 штапик </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-180-18-105">Пр_№180/18/10.5 штапик </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-181-18-105">Пр_№181/18/10.5 штапик </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-185-18-105">Пр_№185/18/10.5 штапик </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-190">Пр_№190 штапик </a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-199">Пр_№199 штапик </a>
                                        </li>
                                       

                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#dlya-karnizov" >Для карнизов</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-204m">Пр_№204м (карнизный)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-214">Пр_№214</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-214-k">Пр_№214/К</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-221">Пр_№221</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-221-k">Пр_№221/К</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-221-1k">Пр_№221/1К</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-221-2k">Пр_№221/2К</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-234">Пр_№234</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-235">Пр_№235</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-238">Пр_№238 (карниз)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-251">Пр_№251 (карниз)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-252">Пр_№252 (карниз)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-263">Пр_№263</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-263-k">Пр_№263/К</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-264">Пр_№264</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-265">Пр_№265</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-266">Пр_№266</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-270">Пр_№270</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-271">Пр_№271</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-272">Пр_№272</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-273">Пр_№273</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-274">Пр_№274</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-275">Пр_№275</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-277">Пр_№277</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-278">Пр_№278</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-279">Пр_№279</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-280">Пр_№280</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#dlya-obramleniya">Для обрамления</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-301">Пр_№301</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-302">Пр_№302/СОСТАВНОЙ используется с Пр_РЕЗНОЙ_№1011</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-303">Пр_№303</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-319-60-3">Пр_№319/60/3/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-319-80-3">Пр_№319/80/3/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-319-100-4">Пр_№319/100/4/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-319-120-4">Пр_№319/120/4/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-319-120-6">Пр_№319/120/6/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-320-60">Пр_№320/60</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-320-80">Пр_№320/80</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-320-100">Пр_№320/100</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-320-120">Пр_№320/120</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-323">Пр_№323</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-324">Пр_№324</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-60-2">Пр_№345/60/2/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-80-3">Пр_№345/80/3/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-100-4">Пр_№345/100/4/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-120-4">Пр_№345/120/4/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-120-6">Пр_№345/120/6/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-168-6">Пр_№345/168/6/ХХ_YY</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-60-2-hh-yy-bf">Пр_№345/60/2/ХХ_YY/БФ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-80-3-hh-yy-bf">Пр_№345/80/3/ХХ_YY/БФ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-100-4-hh-yy-bf">Пр_№345/100/4/ХХ_YY/БФ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-120-4-hh-yy-bf">Пр_№345/120/4/ХХ_YY/БФ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-120-6-hh-yy-bf">Пр_№345/120/6/ХХ_YY/БФ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-345-168-6-hh-yy-bf">Пр_№345/168/6/ХХ_YY/БФ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-322-80">Пр_№322/80</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-359">Пр_№359</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-361">Пр_№361</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-366">Пр_№366</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-374-120">Пр_№374/120</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-375">Пр_№375</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-379">Пр_№379</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-380">Пр_№380</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-381">Пр_№381</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-382">Пр_№382</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-383">Пр_№383</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-384">Пр_№384</a>
                                        </li> 

                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#plintus-moldingi">Плинтус, молдинги</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-400-hh">Пр_№400/ХХ</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-401-hh">Пр_№401/ХХ (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-413">Пр_№413</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-418-90">Пр_№418/90 (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-418-1">Пр_№418/1 (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-418f">Пр_№418Ф (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-418-paz">Пр_№418/ПАЗ плинтус на экраны радиатора</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-422-14">Пр_№422/14 (полуперила)</a>
                                        </li>                                           
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-422-25">Пр_№422/25 (полуперила)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-427">Пр_№427 (полуперила)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-476">Пр_№476 (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-476-1">Пр_№476/1 (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-476f">Пр_№476Ф (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-476-paz">Пр_№476/ПАЗ плинтус на экраны радиатора</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-477-31">Пр_№477/31</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-477-40">Пр_№477/40</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-477-59">Пр_№477/59</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-478-115">Пр_№478/115 (плинтус)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-480">Пр_№480</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#drugie">Другие</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-515">Пр_№515</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-536">Пр_№536</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-546">Пр_№546</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-549">Пр_№549</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-550">Пр_№550</a>
                                        </li>                                       
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-551">Пр_№551</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-552">Пр_№552</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-555">Пр_№555</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-556">Пр_№556</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#poruchni-lestnicy">Поручни, лестницы</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-601">Пр_№601 (Пр_лестницы)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-627-1">Пр_№627/1 (перила)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-627-2">Пр_№627/2 (подперильная доска)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-628-1">Пр_№628/1 (перила)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-628-2">Пр_№628/2 (подперильная доска)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-629">Пр_№629 (Пр_на косоур)</a>
                                        </li>                                         
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-629-1">Пр_№629/1 (Пр_на косоур)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-629-2">Пр_№629/2 (Пр_на косоур)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-630-1">Пр_№630/1 (перила)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-630-2">Пр_№630/2 (подперильная доска)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-631-1">Пр_№631/1 (перила)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-631-2">Пр_№631/2 (подперильная доска)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-647-1">Пр_№647/1 (подушка под балясину)</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-647-2">Пр_№647/2 (подушка под балясину)</a>
                                        </li> 
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#pod-rotangovuyu-setku">Под ротанговую сетку</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-762">Пр_№762 (дуб, бук под ротанговую сетку, крашеный)</a>
                                        </li>                                        
                                                                               
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#raskladki">Раскладки</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-mdf-8">Пр_МДФ_№8XX/1 или Пр_МДФ_№8XX/2</a>
                                        </li>
                                                                             
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#dlya-karkasov">Для каркасов</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-karkas-9">Пр_КАРКАС_№9XX/YY (массив:сосна)</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-karkas-9-1">Пр_КАРКАС_№9XX/YY Раскрой реечного щита для изготовления</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-925">Пр_№925</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-925-601">Пр_№925/601</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-925-602">Пр_№925/602</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-925-701">Пр_№925/701</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-925-702">Пр_№925/702</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-928-24">Пр_№928/24</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-932-30">Пр_№932/30</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-933">Пр_№933</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-940">Пр_№940/ХХХ</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-964">Пр_№964</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="detali-profili.php#dlya-stolov">Для столов</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-stol1">Пр_№СТОЛ1  || обкладка_столешницы</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-stol2">Пр_№СТОЛ2  || над_плинтусом_пилястры</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-stol3-60-3-bf">Пр_№СТОЛ3/60/3/БФ  || пилястра</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-stol4">Пр_№СТОЛ4  || поясок_верхний_уровень</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-stol5">Пр_№СТОЛ5  || обкладка_столешницы</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="detali-profili.php#pr-stol6">Пр_№СТОЛ6  || обкладка_столешницы</a>
                                        </li>                                         
                                    </ul>
                                </li>
                               
                                
                                                                    
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu disabled">
                            <a href="detali-profili-reznye.php" class="list-group-item " '.$item_reznye_Class.' ">Профили резные</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-konstrukcii">КОНСТРУКЦИИ МЕБЕЛИ КОРПУСНОЙ ТИПОВОЙ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                      
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady">ШКАФЫ С РАСПАШНЫМИ ФАСАДАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady-nakladnye" >Накладные</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady-vkladnye">Вкладные</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady-otkidnye">Откидные (секретерные)</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-razdvizhnye-fasady">ШКАФЫ С РАЗДВИЖНЫМИ ФАСАДАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-razdvizhnye-fasady-kupe">Фасады купе</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-razdvizhnye-fasady-komplanarnye">Фасады компланарные</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-stellazhi">ШКАФЫ БЕЗ ФАСАДОВ (СТЕЛЛАЖИ)</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-stoly">СТОЛЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#sborochnye-shemy-mebel-korpusnaya">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                         
                                    </ul>
                                </li>                                   
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu  disabled">
                            <a href="detali-kamni.php" class="list-group-item '.$item_kamni_Class.'">Камни</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-paneli-stenovye.php#paneli-stenovye-konstrukcii">КОНСТРУКЦИИ ПАНЕЛЕЙ СТЕНОВЫХ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                          
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-paneli-stenovye.php#sborochnye-shemy-paneli-stenovye">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                       
                                    </ul>
                                </li>                    
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu  disabled">
                                <a href="detali-rezby.php" class="list-group-item '.$item_rezby_Class.'">Резьбы</a>
                                <ul class="list-group sub_menu">
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#rozetka">Розетка</a>
                                        <ul class="list-group sub_menu2">
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>                                          
                                        </ul>
                                    </li>
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#kapitel">Капитель</a>
                                        <ul class="list-group sub_menu2">
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>                                       
                                        </ul>
                                    </li>
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#konsol">Консоль</a>
                                        <ul class="list-group sub_menu2">
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>                                       
                                        </ul>
                                    </li>  
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#barelef">Барельеф</a>
                                        <ul class="list-group sub_menu2">
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#" >...</a>
                                            </li>                                       
                                        </ul>
                                    </li>                      
                                </ul>
                            </li>
                        <!-- menu -->
                        <li class="menu disabled">
                            <a href="detali-tokarka.php" class="list-group-item '.$item_tokarka_Class.'">Токарка</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-karnizy-i-frizy.php#izdeliya-karnizy-i-frizy-konstrukcii">КОНСТРУКЦИИ КАРНИЗОВ И ФРИЗОВ ТИПОВЫХ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-karnizy-i-frizy.php#sborochnye-shemy-karnizy-i-frizy">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                   
                                    </ul>
                                </li>     
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu disabled">
                            <a href="detali-frezy.php" class="list-group-item '.$item_frezy_Class.'">Фрезы</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-plintusy-i-moldingi.php#plintusy-i-moldingi-konstrukcii">КОНСТРУКЦИИ ПЛИНТУСОВ И МОЛДИНГОВ ТИПОВЫХ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-plintusy-i-moldingi.php#sborochnye-shemy-plintusy-i-moldingi">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                      
                                    </ul>
                                </li>                                
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu disabled">
                            <a href="detali-pazy.php" class="list-group-item '.$item_pazy_Class.'">Пазы</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-ekrany-radiatorov.php#ekrany-radiatorov-konstrukcii">КОНСТРУКЦИИ ЭКРАНОВ РАДИАТОРОВ ТИПОВЫХ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                       
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-ekrany-radiatorov.php#sborochnye-shemy-ekrany-radiatorov">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                      
                                    </ul>
                                </li>                                
                            </ul>
                        </li>
                                                
                    </ul>
                </div>
            </div>                
            <!-- левое боковое меню конец -->
';?>
              