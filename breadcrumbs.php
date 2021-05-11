<?php
/* $array_labor = [
    ['id' => 1, 'tit' => 'Gestiones y acciones de Gobierno'],
    ['id' => 2, 'tit' => 'Calidad y Transparencia'],
    ['id' => 3, 'tit' => 'cloud'],
];
 
$ids = array_column($array, 'id');
 
print_r($ids); // [1, 2, 3] */

$array_urls = array(
    'gestiones_gobierno.php' => array('url' => '<a href="index.php">Inicio</a> / <a href="gestiones_gobierno.php" class="actual">Gestiones y acciones de Gobierno</a>','nombre'=>'Gestiones y acciones de Gobierno'),
    'calidad_transparencia.php' => array('url' => '<a href="index.php">Inicio</a> / <a href="calidad_transparencia.php" class="actual">Calidad y transparencia</a>','nombre'=>'Calidad y transparencia'),
    'informes.php' => array('url' => '<a href="index.php">Inicio</a> / <a href="informes.php" class="actual">Informes, Estadísticas y Comunicación</a>','nombre'=>'Informes, Estadísticas y Comunicación'),
    'teipesa.php' => array('url' => '<a href="index.php">Inicio</a> / <a href="teipesa.php" class="actual">Modernización para pymes</a>','nombre'=>'Modernización para pymes'),
    'sello_sustentable.php' => array('url' => '<a href="index.php">Inicio</a> / <a href="sello_sustentable.php" class="actual">Sello CAME Sustentable</a>', 'nombre'=>'Sello CAME Sustentable'),
    'weps.php' => array('url' => '<a href="index.php">Inicio</a> / <a href="weps.php" class="actual">Adhesión a los Principios para el Empoderamiento de la Mujer (WEP’s)</a>','nombre'=>'Adhesión a los Principios para el Empoderamiento de la Mujer (WEP’s)'),
    'propuestas_gob.php' => array('url' => '<a href="index.php">Inicio</a> / <a href="gestiones_gobierno.php">Gestiones y acciones de Gobierno</a> / <a href="propuestas_gob.php" class="actual">Propuestas para las pymes en el escenario de la pandemia</a>','nombre'=>'CAME a la vanguardia: Propuestas para las pymes en el escenario de la pandemia'),
    'gestiones_trib.php' => array( 'url' => '<a href="index.php">Inicio</a> / <a href="gestiones_gobierno.php">Gestiones y acciones de Gobierno</a> / <a href="gestiones_trib.php"  class="actual">Gestiones de CAME ante autoridades tributarias</a>','nombre'=>'Gestiones de CAME ante autoridades tributarias, en pos de generar herramientas salvaguarden la delicada situación de las pymes'),
    'gestiones_bcra.php'  => array( 'url' => '<a href="index.php">Inicio</a> / <a href="gestiones_gobierno.php">Gestiones y acciones de Gobierno</a> / <a href="gestiones_bcra.php" class="actual">CAME contra la especulación financiera en el marco de la pandemia</a>','nombre'=>'CAME contra la especulación financiera en el marco de la pandemia'),
    'gestiones_pandemia.php'  => array( 'url' => '<a href="index.php">Inicio</a> / <a href="gestiones_gobierno.php">Gestiones y acciones de Gobierno</a> / <a href="gestiones_pandemia.php" class="actual">Encuentros estratégicos para fomentar la sinergia en el marco de la pandemia</a>','nombre'=>'Encuentros estratégicos para fomentar la sinergia en el marco de la pandemia'),
    'comercio_servicios.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="comercio_servicios.php" class="actual">Comercio y Servicios</a>','nombre'=>'<img src="imgs/sec/comercio_servicios.png"> Comercio y Servicios'),
    'turismo.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="turismo.php" class="actual">Turismo</a>','nombre'=>'<img src="imgs/sec/turismo.png"> Turismo'),
    'industria.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="industria.php" class="actual">Industria</a>','nombre'=>'<img src="imgs/sec/industria.png"> Industria'),
    'parques_industriales.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="parques_industriales.php" class="actual">Parques Industriales</a>','nombre'=>'<img src="imgs/sec/fapi.png"> Parques Industriales'),
    'economias_regionales.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="economias_regionales.php" class="actual">Economías Regionales</a>','nombre'=>'<img src="imgs/sec/regionales.png"> Economías Regionales'),
    'construccion.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="construccion.php" class="actual">Construcción</a>','nombre'=>'<img src="imgs/sec/construccion.png"> Construcción'),
    'mujeres.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="mujeres.php" class="actual">Mujeres Empresarias</a>','nombre'=>'<img src="imgs/sec/mujeres.png"> Mujeres Empresarias'),
    'came_joven.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Sectores / <a href="came_joven.php" class="actual">CAME Joven</a>','nombre'=>'<img src="imgs/sec/jovenes.png"> CAME Joven'),
    'rse.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="rse.php" class="actual">RSE</a>','nombre'=>'<img src="imgs/sec/rse.png"> RSE'),
    'capacitacion.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="capacitacion.php" class="actual">Capacitación</a>','nombre'=>'<img src="imgs/sec/capacitacion.png"> Capacitación'),
    'financiamiento.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="financiamiento.php" class="actual">Financiamiento y Competitividad</a>','nombre'=>'<img src="imgs/sec/financiamiento.png"> Financiamiento y Competitividad'),
    'comex.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="comex.php" class="actual">Comercio Exterior</a>','nombre'=>'<img src="imgs/sec/comercio_servicios.png"> Comercio Exterior'),
    'rondas.php'  => array( 'url' => '<a href="index.php">Inicio</a> / Secretarías / <a href="rondas.php" class="actual">Rondas de Negocios</a>','nombre'=>'<img src="imgs/sec/rondas.png"> Rondas de Negocios')
    );

$url= $_SERVER['REQUEST_URI'];    
$url_n=explode('/', $url);
$url_actual=$url_n[2];
?>
<div class="breadcrumbs mt-0 mb-4">
    <div class="container clearfix col-md-12 d-flex align-content-center flex-wrap align-items-center">
        <div class="titulo-sec mr-auto p-2"><?php echo $array_urls[$url_actual]['nombre']; ?></div>
        <div class="bread-sec p-2"><?php echo $array_urls[$url_actual]['url']; ?></div>
    </div>
</div>