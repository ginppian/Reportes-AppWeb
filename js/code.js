$(document).ready(function(){
  /*Nombre: Limpiar*/
  /*Descripcion: La accion del FloatButton es LIMPIAR la mayoria de los campso excepto: los RadioButton y el input de encargado*/
  $("#clearButton").click(function(){
    //Nombre
    $("#inputNombre").val("");
    //entrHra
    $("#inputEntrHra").val("");
    //entrMin
    $("#inputEntrMin").val("");
    //saliHra
    $("#inputSaliHra").val("");
    //saliMin
    $("#inputSaliMin").val("");
    //actividad
    $("#inputActividad").val("");
    //descripcion
    $("#inputDescripcion").val("");
  });

  /*Nombre: GenerarReporte*/
  /*Descripcion: Al hacer click en el RaisedButton obtenemos los valores de todos los campos y los enviamos por POST a reporte.php para generar el reporte de actividades en PDF*/
  $("#generarReporte").click(function(){
    var nombre  = $("#inputNombre").val().toUpperCase();
    var entrHra = $("#inputEntrHra").val();
    var entrMin = $("#inputEntrMin").val();
    //RadioButtonsEntrada
    //En el caso de los Radio Buttons por las complicaciones de crear diversos formularios obtenemos su valor comparando con is(":checked")
    var entrZon = "";

    if ($("#radioEntradaAM").is(":checked")) {
          entrZon = "AM";
       }
    else if ($("#radioEntradaPM").is(":checked")){
          entrZon = "PM";
    }
    //RadioButtonsEntrada

    //RadioButtonsSalida
    var saliHra = $("#inputSaliHra").val();
    var saliMin = $("#inputSaliMin").val();
    var saliZon = "";

    if ($("#radioSalidaAM").is(":checked")) {
          saliZon = "AM";
       }
    else if ($("#radioSalidaPM").is(":checked")){
          saliZon = "PM";
    }
    //RadioButtonsSalida

    var actividad = $("#inputActividad").val();
    var descripcion = $("#inputDescripcion").val();
    var encargado = $("#inputEncargado").val();

    console.log(nombre, entrHra, entrMin, entrZon, saliHra, saliMin, saliZon, actividad, descripcion, encargado);

    /*Checamos que los valores sean diferentes de NULO*/
    if(nombre == '' || entrHra.lenght <= 0 || entrMin <= 0 || entrZon == '' || saliHra <= 0 || saliMin <= 0 || saliZon == '' || actividad == '' || descripcion == '' || encargado == ''){
      alert("<<Por favor completa todos los campos>>");
      return;
    }

    /*Enviamos los resultados por POST*/
    /*Este codigo es para hacer pruebas y enviar los resultados a un SPAN en la misma hoja del HTML*/
    // $.post('borrar.php', {
    //   nombre: nombre,
    //   entrHra: entrHra,
    //   entrMin: entrMin,
    //   entrZon: entrZon,
    //   saliHra: saliHra,
    //   saliMin: saliMin,
    //   saliZon: saliZon,
    //   actividad: actividad,
    //   descripcion: descripcion,
    //   encargado: encargado
    //   }, function(data){
    //   $('#ComprobacionEnvioDatosPHP').html(data);
    // });

    // console.log(nombre, entrHra, entrMin, entrZon, saliHra, saliMin, saliZon, actividad, descripcion, encargado);

    var expresion =
    "nombre="+nombre+"&"+
    "entrHra="+entrHra+"&"+
    "entrMin="+entrMin+"&"+
    "entrZon="+entrZon+"&"+
    "saliHra="+saliHra+"&"+
    "saliMin="+saliMin+"&"+
    "saliZon="+saliZon+"&"+
    "actividad="+actividad+"&"+
    "descripcion="+descripcion+"&"+
    "encargado="+encargado;
    // console.log(expresion);

    window.open("https://nut.com.mx/ginppian/estoma/reportes/reporte.php?"+expresion);
  });
});
