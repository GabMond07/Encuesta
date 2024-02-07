<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sección de Preguntas con Check List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<style>
  .containerr {
    max-width: 600px;
    margin: auto;
  }
  .contador-pregunta {
    position: absolute;
    top: 0;
    right: 0;
    margin: 10px;
  }
  .btn-back {
    position: absolute;
    top: 5%;
    left: 10%;
    margin: 5px;
    font-size: 2.2rem;
  }

  .pregunta {
    margin-bottom: 20px;
  }

  .list-group-item {
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .list-group-item:hover {
    background-color: #f0f0f0;
  }

  .list-group-item.active {
    background-color: #007bff;
    color: #fff;
  }
</style>
</head>
<body>

<div class="container mt-5">
  <div class="contador-pregunta" id="contadorPregunta">Pregunta 1 de 2</div>
  <a href="#" class="btn btn-back" id="atras" style="display: none;"><i class="ri-arrow-left-line"></i></a>

  <div class="pregunta" id="pregunta1">
    <h3>Pregunta 1</h3>
    <ul class="list-group">
      <li class="list-group-item">
        <input type="checkbox" id="respuesta1">
        <label for="respuesta1">Respuesta 1</label>
      </li>
      <li class="list-group-item">
        <input type="checkbox" id="respuesta2">
        <label for="respuesta2">Respuesta 2</label>
      </li>
      <li class="list-group-item">
        <input type="checkbox" id="respuesta3">
        <label for="respuesta3">Respuesta 3</label>
      </li>
    </ul>
    <button class="btn btn-primary mt-3" id="siguiente1">Siguiente</button>
  </div>

  <div class="pregunta" id="pregunta2" style="display: none;">
    <h3>Pregunta 2</h3>
    <ul class="list-group">
      <li class="list-group-item">
        <input type="checkbox" id="respuesta4">
        <label for="respuesta4">Respuesta 4</label>
      </li>
      <li class="list-group-item">
        <input type="checkbox" id="respuesta5">
        <label for="respuesta5">Respuesta 5</label>
      </li>
      <li class="list-group-item">
        <input type="checkbox" id="respuesta6">
        <label for="respuesta6">Respuesta 6</label>
      </li>
    </ul>
    <button class="btn btn-primary mt-3" id="siguiente2">Siguiente</button>
  </div>


  <div class="pregunta" id="pregunta2">
  <hr>
  <h3>Pregunta 2</h3>
  <ul class="list-group">
    <li class="list-group-item" onclick="seleccionarRespuesta(4)">
      <label>
        <input type="radio" id="respuesta4" name="respuesta" value="Respuesta 4">
        Respuesta 4
      </label>
    </li>
    <li class="list-group-item" onclick="seleccionarRespuesta(5)">
      <label>
        <input type="radio" id="respuesta5" name="respuesta" value="Respuesta 5">
        Respuesta 5
      </label>
    </li>
    <li class="list-group-item" onclick="seleccionarRespuesta(6)">
      <label>
        <input type="radio" id="respuesta6" name="respuesta" value="Respuesta 6">
        Respuesta 6
      </label>
    </li>
  </ul>
  <button class="btn btn-primary mt-3" id="siguiente2" onclick="siguientePregunta()">Siguiente</button>
</div>


  <div id="resultado" class="d-none">
    <h3>Resultado</h3>
    <p id="respuestasSeleccionadas"></p>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

function seleccionarRespuesta(numeroRespuesta) {
    // Seleccionar el radio button correspondiente
    var radioSeleccionado = document.getElementById('respuesta' + numeroRespuesta);
    radioSeleccionado.checked = true;

    // Limpiar la clase "active" de todas las opciones
    var opciones = document.querySelectorAll('.list-group-item');
    opciones.forEach(function(opcion) {
      opcion.classList.remove('active');
    });

    // Agregar la clase "active" a la opción seleccionada
    var respuestaSeleccionada = radioSeleccionado.closest('.list-group-item');
    respuestaSeleccionada.classList.add('active');
  } 

  $(document).ready(function() {
    // Oculta el resultado y muestra la primera pregunta
    $('#resultado').hide();
    $('.pregunta').first().show();

    // Maneja el click en el botón Siguiente para la primera pregunta
    $('#siguiente1').click(function() {
      mostrarSiguientePregunta($('#pregunta1'));
    });

    // Maneja el click en el botón Siguiente para la segunda pregunta
    $('#siguiente2').click(function() {
      mostrarSiguientePregunta($('#pregunta2'));
    });

    // Maneja el click en el botón Atrás
    $('#atras').click(function() {
      var preguntaActual = $('.pregunta:visible');
      var preguntaAnterior = preguntaActual.prev('.pregunta');
      preguntaActual.hide();
      preguntaAnterior.show();
      actualizarContador(preguntaAnterior);
      actualizarVisibilidadBotonAtras();
    });

    function mostrarSiguientePregunta(preguntaActual) {
      // Obtiene las respuestas seleccionadas
      var respuestasSeleccionadas = preguntaActual.find('input[type="checkbox"]:checked').map(function() {
        return $(this).next('label').text();
      }).get().join(', ');

      // Actualiza el resultado
      $('#respuestasSeleccionadas').text(respuestasSeleccionadas);

      // Oculta la pregunta actual
      preguntaActual.hide();

      // Muestra la siguiente pregunta o el resultado si no hay más preguntas
      var siguientePregunta = preguntaActual.next('.pregunta');
      if (siguientePregunta.length) {
        siguientePregunta.show();
        actualizarContador(siguientePregunta);
        actualizarVisibilidadBotonAtras();
      } else {
        $('#resultado').show();
      }
    }

    function actualizarContador(preguntaActual) {
      var totalPreguntas = $('.pregunta').length;
      var indicePreguntaActual = $('.pregunta').index(preguntaActual) + 1;
      $('#contadorPregunta').text('Pregunta ' + indicePreguntaActual + ' de ' + totalPreguntas);
    }

    function actualizarVisibilidadBotonAtras() {
      var preguntaActual = $('.pregunta:visible');
      var esPrimeraPregunta = $('.pregunta').index(preguntaActual) === 0;
      $('#atras').toggle(!esPrimeraPregunta);
    }
  });
</script>
</body>
</html>
