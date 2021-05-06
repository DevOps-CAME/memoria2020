<?php
/* $array_labor = [
    ['id' => 1, 'tit' => 'Gestiones y acciones de Gobierno'],
    ['id' => 2, 'tit' => 'Calidad y Transparencia'],
    ['id' => 3, 'tit' => 'cloud'],
];
 
$ids = array_column($array, 'id');
 
print_r($ids); // [1, 2, 3] */

$array_urls = array(
    'propuestas_gob.php' => array(
    'url' => '<a href="index.php">Inicio</a> / Gestiones y acciones de Gobierno / <a href="propuestas_gob.php" class="actual">Propuestas para las pymes en el escenario de la pandemia</a>'),
    'gestiones_trib.php' => array( 'url' => '<a href="index.php">Inicio</a> / Gestiones y acciones de Gobierno / <a href="gestiones_trib.php"  class="actual">Gestiones de CAME ante autoridades tributarias</a>'),
     'gestiones_bcra.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Gestiones y acciones de Gobierno / <a href="gestiones_bcra.php" class="actual">CAME contra la especulación financiera en el marco de la pandemia</a>'),
     'gestiones_pandemia.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Gestiones y acciones de Gobierno / <a href="gestiones_pandemia.php" class="actual">Encuentros estratégicos para fomentar la sinergia en el marco de la pandemia</a>'),
     'comercio_servicios.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="comercio_servicios.php" class="actual">Comercio y Servicios</a>'),
     'turismo.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="turismo.php" class="actual">Turismo</a>'),
     'industria.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="industria.php" class="actual">Industria</a>'),
     'parques_industriales.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="parques_industriales.php" class="actual">Parques Industriales</a>'),
     'economias_regionales.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="economias_regionales.php" class="actual">Economías Regionales</a>'),
     'construccion.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="construccion.php" class="actual">Construcción</a>'),
     'mujeres.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="mujeres.php" class="actual">Mujeres Empresarias</a>'),
     'came_joven.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="came_joven.php" class="actual">CAME Joven</a>'),
     'rse.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="rse.php" class="actual">RSE</a>'),
     'capacitacion.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="capacitacion.php" class="actual">Capacitación</a>'),
     'financiamiento.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="financiamiento.php" class="actual">Financiamiento y Competitividad</a>'),
     'comex.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="comex.php" class="actual">Comercio Exterior</a>'),
     'rondas.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="rondas.php" class="actual">Rondas de Negocios</a> ')
    );

$url= $_SERVER['REQUEST_URI'];    
$url_n=explode('/', $url);
$url_actual=$url_n[2];
?>
<div class="breadcrumbs">
    <?php echo $array_urls[$url_actual]['url']; ?>
</div>