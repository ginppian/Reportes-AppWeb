<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="node_modules/bootstrap-material-design/dist/css/ripples.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Stylesheets -->

  <title>Reportes</title>

</head>

<body>
  <div class="container-fluid">
    <div class="row sticky_header">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand">Educación Continua <span class="glyphicon glyphicon-education educacionContinua_icono"></span></a>
        </div>
  </div>

  <div class="container">
    <div class="row">
      <h1 class="frameworks_title">Reporte Actividades</h1>
      <div class="col-md-10 col-md-offset-1" >
        <div class="well bs-component">

          <form class="form-horizontal">
            <fieldset>

              <legend >
                Fecha:
                <?php
                $tz = 'America/Mexico_City';
                $time = time();
                $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
                $dt->setTimestamp($time); //adjust the object to correct timestamp
                // echo $dt->format('d.m.Y,H:i:s')."<br>";
                echo $dt->format('d/m/Y');
                ?>
              </legend>

              <!-- Floating Action Button -->
              <div class="floating_actionButton">
                <button type="button" name="button" id="clearButton" class="btn btn-warning btn-fab"><i class="material-icons">clear_all</i></button>
                <!-- <a href="javascript:void(0)" class="btn btn-warning btn-fab"><i class="material-icons">clear_all</i></a> -->
              </div>
              <!-- Floating Action Button -->

              <!-- Nombre -->
              <div class="form-group">
                <label for="inputNombre" class="col-md-2 control-label" id="labelNombre">Nombre:</label>
                <div class="col-md-10 col-md-offset-1">
                  <input class="form-control" id="inputNombre" placeholder="Enrique Peña Nieto" type="text">
                </div>
              </div>
              <!-- Nombre -->

              <!-- Entrada -->
              <div class="form-group label-floating">
                <div class="col-md-10 col-md-offset-1">
                  <div class="form-group">
                    <label for="selectEntrada" class="col-md-1 control-label">Entrada:</label>
                    <!-- Horas -->
                    <div class="col-md-5 divEntradaHoras">
                      <select id="inputEntrHra" multiple="" class="form-control">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                      <p class="parrafoInputEntradaHra">Hra</p>
                    </div>
                    <!-- Horas -->
                    <!-- Minutos -->
                    <div class="col-md-5 divEntradaMinutos">
                      <select id="inputEntrMin" multiple="" class="form-control">
                        <option>01</option>
                        <option>05</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>30</option>
                        <option>35</option>
                        <option>40</option>
                        <option>45</option>
                        <option>50</option>
                        <option>55</option>
                      </select>
                      <p class="parrafoInputEntradaMins">Min</p>
                    </div>
                    <!-- Minutos -->
                    <!-- Radio Buttons -->
                    <div class="col-md-2 radioButtonsEntrada">
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="radioEntradaAM" name="radioEntrada" checked="" type="radio">
                          Am
                        </label>
                      </div>
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="radioEntradaPM" name="radioEntrada" type="radio">
                          Pm
                        </label>
                      </div>
                    </div>
                    <!-- Radio Buttons -->
                  </div>
                </div>
              </div>
              <!-- Entrada -->
            </fieldset>
          </form>
          <form class="form-horizontal">
            <fieldset>
              <!-- Salida -->
              <div class="form-group label-floating">
                <div class="col-md-10 col-md-offset-1">
                  <div class="form-group">
                    <label for="selectEntrada" class="col-md-1 control-label ">Salida:</label>
                    <!-- Horas -->
                    <div class="col-md-5 divSalidaHrs">
                      <select id="inputSaliHra" multiple="" class="form-control">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                      <p class="parrafoSalidaHrs">Hra</p>
                    </div>
                    <!-- Horas -->
                    <!-- Minutos -->
                    <div class="col-md-5 divSalidaMinutos">
                      <select id="inputSaliMin" multiple="" class="form-control">
                        <option>01</option>
                        <option>05</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>30</option>
                        <option>35</option>
                        <option>40</option>
                        <option>45</option>
                        <option>50</option>
                        <option>55</option>
                      </select>
                      <p class="parrafoSalidaMins">Min</p>
                    </div>
                    <!-- Minutos -->
                    <!-- Radio Buttons -->
                    <div class="col-md-2 radioButtonsSalida">
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="radioSalidaAM" name="radioSalida" type="radio">
                          Am
                        </label>
                      </div>
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="radioSalidaPM" name="radioSalida" checked="" type="radio">
                          Pm
                        </label>
                      </div>
                    </div>
                    <!-- Radio Buttons -->
                  </div>
                </div>
              </div>
              <!-- Salida -->
            </fieldset>
          </form>

          <form class="form-horizontal">
            <fieldset>
              <!-- Nombre Actividad-->
              <div class="form-group">
                <label for="inputNombre" class="col-md-2 control-label" id="labelActividad">Actividad:</label>
                <div class="col-md-10 col-md-offset-1">
                  <input class="form-control" id="inputActividad" placeholder="Creación de una macro en Excel para conteo de horas." type="text">
                </div>
              </div>
              <!-- Nombre Actividad-->

              <!-- Descripcion -->
              <div class="form-group">
                <label for="textArea" class="col-md-2 control-label" id="labelDescripcion">Descripción:</label>

                <div class="col-md-10 col-md-offset-1">
                  <textarea class="form-control" rows="5" id="inputDescripcion" placeholder="Se desarrollo una macro en excel con el objetivo de automatizar el conteo de horas por alumno. Se implemento una formula para obtener la diferencia de tiempo restando primero las horas y después los minutos, en caso de que la diferencia de minutos sea negativa se resta una unidad a las horas."></textarea>
                  <span class="help-block">Ingresa una descripción de la tarea consumada junto con el objetivo que se busca al realizarla.</span>
                </div>
              </div>
              <!-- Descripcion -->

              <!-- Nombre Encargado-->
              <div class="form-group">
                <label for="inputNombre" class="col-md-2 control-label" id="labelNombreEncargado">Encargado:</label>
                <div class="col-md-10 col-md-offset-1">
                  <input class="form-control" id="inputEncargado" value="L.C.C DAVID LIRA BARROETA" type="text">
                </div>
              </div>
              <!-- Nombre Encargado-->
            </fieldset>
          </form>

          <!-- RaisedButton Generar Reporte -->
          <div class="form-group">
            <div class="col-md-10 col-md-offset-1">
              <button type="submit" class="btn btn-raised btn-primary" id="generarReporte">Generar Reporte</button>
            </div>
          </div>
          <!-- RaisedButton Generar Reporte -->

        </div>
      </div>
    </div>
  </div>


  <span id="ComprobacionEnvioDatosPHP"></span>

      <!--Scripts-->
      <script src="node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
      <script src="js/code.js" charset="utf-8"></script>
      <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js" ></script>
      <script type="text/javascript" src="node_modules/bootstrap-material-design/dist/js/material.js"></script>
      <script type="text/javascript" src="node_modules/bootstrap-material-design/dist/js/ripples.js"></script>
      <script type="text/javascript">
        $.material.init();
      </script>
</body>
</html>
