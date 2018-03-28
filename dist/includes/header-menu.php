<!-- переменные на странице -->
<?php
// $detaliClass = '';
// $izdeliyaClass = '';
// $shablonyClass = 'class="active"';
// $metodichkiClass = '';
// $furnituraClass = '';
// $materialyClass = '';
// $literaturaClass = '';
// include './dist/css/includes/header-menu.php';
?>

<?php
echo'
<header class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container">            
        <div class="navbar navbar-inverse " role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">500.СТП</a >
            </div>                
            <div class="navbar-collapse collapse top-menu">
                <ul class="nav navbar-nav navbar-link " id="navmain">
                    <li '.$detaliClass.'>
                        <a href="detali-profili.php">ДЕТАЛИ</a>
                    </li>
                    <li '.$izdeliyaClass.'>
                        <a href="izdeliya-bloki-dvernye.php">ИЗДЕЛИЯ</a>
                    </li>
                    <li '.$shablonyClass.'>
                        <a href="shablony-dokumentov-titulniki.php">ШАБЛОНЫ ДОКУМЕНТОВ</a>
                    </li>
                    <li '.$metodichkiClass.'>
                        <a href="metodichki-dokument-117.php">МЕТОДИЧКИ</a>
                    </li>
                    <li '.$furnituraClass.'>
                        <a href="furnitura-katalogi.php">ФУРНИТУРА</a>
                    </li>
                    <li '.$materialyClass.'>
                        <a href="materialy-ne-derevyannye-steklo-zerkalo-vitrazh.php">МАТЕРИАЛЫ НЕ ДЕРЕВЯННЫЕ</a>
                    </li>
                    <li '.$literaturaClass.'>
                        <a href="literatura-gost.php">ЛИТЕРАТУРА</a>
                    </li>
                </ul>  
            </div>
            <div class="navbar-form navbar-right " id="search">
                <div class="form-group">                                
                    <span class="glyphicon glyphicon-search"></span>
                    <input type="text" class="form-control who zbz-input-clearable" placeholder="Поиск">                               
                </div>                            
                <ul class="search_result" style="display: none;"></ul>
            </div>            
        </div>
    </div>
</header>
';
?>