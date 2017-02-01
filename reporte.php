<?php
  $nombre = $_GET["nombre"];
  $entrHra = $_GET["entrHra"];
  $entrMin = $_GET["entrMin"];
  $entrZon = $_GET["entrZon"];
  $saliHra = $_GET["saliHra"];
  $saliMin = $_GET["saliMin"];
  $saliZon = $_GET["saliZon"];
  $actividad = $_GET["actividad"];
  $descripcion = $_GET["descripcion"];
  $encargado = $_GET["encargado"];

  $tz = 'America/Mexico_City';
  $time = time();
  $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
  $dt->setTimestamp($time); //adjust the object to correct timestamp
  // echo $dt->format('d.m.Y,H:i:s')."<br>";
  $fecha = $dt->format('d/m/Y');


  ob_start();

  $html = ob_get_clean();
  $html = utf8_encode($html);

  $html .= '
  <style>
  .cabecera {
  }

  .img_buap {
    float: left;
    width: 15%;
    height: auto;
    margin: 20px 10px;
  }

  .titulo {
    float: left;
    width: 60%;
    text-align: center;
    margin: 20px 20px;
  }

  .titulo p {
    font-size: 20px;
    font-weight: bold;
    margin: 1px;
  }

  .img_educon {
    float: left;
    width: 15%;
    height: auto;
    margin: 20px 20px;
  }

  .fecha {
    text-align: right;
    margin-right: 5px;
  }

  .contenedor-texto-nombre{
    margin-top: -32px;
  }

  .contenedor-texto {
    margin-top: 10px;
  }

  .texto {
    width: 715px;
    margin-top: 20px;
    margin-left: 10px;
    text-align: justify;
    border-style: dotted;
    border-width: 1px;
    padding: 1px 15px;
  }

  .texto p {
    margin: 8px 0px;
    font-size: 15px;
  }

  .descripcion {
    width: 715px;
    height: 160px;
    margin-top: 20px;
    margin-left: 10px;
    text-align: justify;
    border-style: dotted;
    border-width: 1px;
    padding: 1px 15px;
  }

  .observaciones {
    height: 80px;
  }

  .negrita {
    font-weight: bold;
  }

  .encargado {
    float: left;
    width: 47.5%;
    height: auto;
    margin-top: 20px;
    margin-left: 10px;
    text-align: justify;
    border-style: dotted;
    border-width: 1px;
    margin-bottom: 100px;
  }

  .encargado p {
    text-align: center;
    margin-top: 0px;
    padding: 10px 0px;
  }

  .firma {
    float: right;
    width: 47.5%;
    height: auto;
    text-align: justify;
    border-style: dotted;
    border-width: 1px;
    margin-bottom: 100px;
  }

  .firma p {
    text-align: center;
    margin-top: 0px;
    padding: 10px 0px;
  }
  </style>

  <body>

      <div class="cabecera">
        <div class="img_buap">
          <!-- Imagen BUAP -->
          <img src="img/buap.png" alt="">
        </div>

        <div class="titulo">
          <!-- Titulo -->
          <p> Departamento de Educación Continua </p>
          <p> Facultad de Estomatología BUAP.</p>
        </div>

        <div class="img_educon">
          <!-- Imagen Educacion Continua -->
          <img src="img/educon.jpg" alt="">
        </div>
      </div>

      <div class="fecha">
        <p>'.$fecha.'</p>
      </div>

      <div class="contenedor-texto-nombre">
        <div class="texto">
          <p class="negrita">Nombre:</p>
          <p>'.$nombre.'</p>
        </div>
        <div class="texto">
          <p class="negrita">Hora Entrada:</p>
          <p>'.$entrHra.':'.$entrMin.' '.$entrZon.'</p>
        </div>
        <div class="texto">
          <p class="negrita">Hora Salida:</p>
          <p>'.$saliHra.':'.$saliMin.' '.$saliZon.'</p>
        </div>
        <div class="texto">
          <p class="negrita">Actividad:</p>
          <p>'.$actividad.'</p>
        </div>
        <div class="descripcion">
          <p class="negrita">Descripción:</p>
          <p>'.$descripcion.'</p>
        </div>
        <div class="texto">
          <p class="negrita">Observaciones:</p>
          <p class="observaciones"></p>
        </div>
        <div class="encargado">
          <p class="negrita">Encargado:</p><br>
          <p>'.$encargado.'</p>
        </div>
        <div class="firma">
          <p class="negrita">Firma:</p><br>
          <p>___________________________________</p>
        </div>
      </div>
  </body>
';

  include("mpdf60/mpdf.php");

  $mpdf = new mPDF();
  $mpdf->allow_charset_conversion = true;
  $mpdf->charset_in = 'UTF-8';
  $mpdf->WriteHTML($html);
  $mpdf->Output('menu-pdf', 'I');

  exit();

?>
