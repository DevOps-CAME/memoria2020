<?php

$array_urls = array(
    'index.php' => array( 'url' => 'index.php','nombre'=>'Informe de gestión 2020'),
    'gestiones_gobierno.php' => array('url' => 'gestiones_gobierno.php','nombre'=>'Gestiones y acciones de Gobierno'),
    'calidad_transparencia.php' => array('url' => 'calidad_transparencia.php','nombre'=>'Calidad y transparencia'),
    'informes.php' => array('url' => 'informes.php','nombre'=>'Informes, Estadísticas y Comunicación'),
    'teipesa.php' => array('url' => 'teipesa.php','nombre'=>'Modernización para pymes'),
    'sello_sustentable.php' => array('url' => 'sello_sustentable.php', 'nombre'=>'Sello CAME Sustentable'),
    'weps.php' => array('url' => 'weps.php','nombre'=>'Adhesión a los Principios para el Empoderamiento de la Mujer (WEP’s)'),
    'propuestas_gob.php' => array('url' => 'propuestas_gob.php','nombre'=>'CAME a la vanguardia: Propuestas para las pymes en el escenario de la pandemia'),
    'gestiones_trib.php' => array( 'url' => 'gestiones_trib.php','nombre'=>'Gestiones de CAME ante autoridades tributarias, en pos de generar herramientas salvaguarden la delicada situación de las pymes'),
    'gestiones_bcra.php'  => array( 'url' => 'gestiones_bcra.php','nombre'=>'CAME contra la especulación financiera en el marco de la pandemia'),
    'gestiones_pandemia.php'  => array( 'url' => 'gestiones_pandemia.php','nombre'=>'Encuentros estratégicos para fomentar la sinergia en el marco de la pandemia'),
    'comercio_servicios.php'  => array( 'url' => 'comercio_servicios.php','nombre'=>'<img src="imgs/sec/comercio_servicios.png"> Comercio y Servicios'),
    'turismo.php'  => array( 'url' => 'turismo.php','nombre'=>'<img src="imgs/sec/turismo.png"> Turismo'),
    'industria.php'  => array( 'url' => 'industria.php','nombre'=>'<img src="imgs/sec/industria.png"> Industria'),
    'parques_industriales.php'  => array( 'url' => 'parques_industriales.php','nombre'=>'<img src="imgs/sec/fapi.png"> Parques Industriales'),
    'economias_regionales.php'  => array( 'url' => 'economias_regionales.php','nombre'=>'<img src="imgs/sec/regionales.png"> Economías Regionales'),
    'construccion.php'  => array( 'url' => 'construccion.php','nombre'=>'<img src="imgs/sec/construccion.png"> Construcción'),
    'mujeres.php'  => array( 'url' => 'mujeres.php','nombre'=>'<img src="imgs/sec/mujeres.png"> Mujeres Empresarias'),
    'came_joven.php'  => array( 'url' => 'came_joven.php','nombre'=>'<img src="imgs/sec/jovenes.png"> CAME Joven'),
    'rse.php'  => array( 'url' => 'rse.php','nombre'=>'<img src="imgs/sec/rse.png"> RSE'),
    'capacitacion.php'  => array( 'url' => 'capacitacion.php','nombre'=>'<img src="imgs/sec/capacitacion.png"> Capacitación'),
    'financiamiento.php'  => array( 'url' => 'financiamiento.php','nombre'=>'<img src="imgs/sec/financiamiento.png"> Financiamiento y Competitividad'),
    'comex.php'  => array( 'url' => 'comex.php','nombre'=>'<img src="imgs/sec/comercio_servicios.png"> Comercio Exterior'),
    'rondas.php'  => array( 'url' => 'rondas.php','nombre'=>'<img src="imgs/sec/rondas.png"> Rondas de Negocios'),
    'index.php' => array( 'url' => 'index.php','nombre'=>'Informe de gestión 2020')
    );

    $array_urlSimple = array('index.php','gestiones_gobierno.php','calidad_transparencia.php','informes.php','teipesa.php','sello_sustentable.php',
        'weps.php','propuestas_gob.php','gestiones_trib.php',
        'gestiones_bcra.php',
        'gestiones_pandemia.php',
        'comercio_servicios.php',
        'turismo.php',
        'industria.php',
        'parques_industriales.php',
        'economias_regionales.php',
        'construccion.php',
        'mujeres.php',
        'came_joven.php',
        'rse.php',
        'capacitacion.php',
        'financiamiento.php',
        'comex.php',
        'rondas.php',
        'index.php'
        );   

$url= $_SERVER['REQUEST_URI'];    
$url_n=explode('/', $url);
$url_actual=$url_n[2];

$clave = array_search($url_actual, $array_urlSimple); 
$anterior =  $array_urlSimple[$clave-1];
$siguiente =  $array_urlSimple[$clave+1];
?>



<div class="anterior-siguiente mt-4 mb-4">
    <div class="container clearfix col-md-12 d-flex align-content-center flex-wrap align-items-center">
        <div class="col-md-6">
            <a title="Anterior" href="<?php echo $array_urls[$anterior]['url']; ?>">
                <div class="col-1 float-left p-0 mr-3 d-flex align-items-center"><i
                        class="flecha icon-line-arrow-left"></i></div>
                <div class="col-10 float-left p-2 ml-2 text-left d-flex align-items-center"
                    style="background: linear-gradient(90deg, #ecf1ff, #ffffff); height: 6rem;">
                    <span class="nombre"><?php echo $array_urls[$anterior]['nombre']; ?></span>
                </div>
            </a>

        </div>
        <div class="col-md-6">

            <a title="Siguiente" href="<?php echo $array_urls[$siguiente]['url']; ?>">
                <div class="col-1 float-right p-0 ml-1 d-flex align-items-center"><i
                        class="flecha icon-line-arrow-right"></i></div>
                <div class="col-10 float-right p-2 mr-2 text-right d-flex align-items-center"
                    style="background: linear-gradient(90deg, #ffffff,#ecf1ff ); height: 6rem;">
                    <span class="nombre"><?php echo $array_urls[$siguiente]['nombre']; ?></span>
                </div>

        </div>
        </a>

    </div>
</div>