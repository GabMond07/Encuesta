<!doctype html>
<html lang="en">
    <head>
        <title>Forms</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    </head>
    <body>
    <div class="navform">
    <div class="container">
        <div class="img"><img src="img/Buap.png" class="logo" alt=""></div>
            <div class="titulo"><h1>Clima laboral</h1><hr></div>
            <div class="icons">
                <a href="#" class="link"><i class="ri-file-add-line"></i></a>    
            </div>
        </div>
    </div>

    <form action="Post" class="encuestas_form_client">
        <div class="Preguntas">
            <div class="contador-pregunta" id="contadorPregunta">Pregunta 1 de 2</div>
            <a href="#" class="btn btn-back" id="atras" style="display: none;"><i class="ri-arrow-left-line"></i></a>
            <div class="pregunta" id="pregunta1">
            <hr>
            <h3>Pregunta 1</h3>
            <ul class="list-group">
                <li class="list-group-item" onclick="seleccionarRespuesta(1)">
                <div class="input-group">
                    <input type="radio" id="respuesta1" name="respuesta" value="Respuesta 1">
                    <label for="respuesta1">Respuesta 1</label>
                </div>
                </li>
                <li class="list-group-item" onclick="seleccionarRespuesta(2)">
                <div class="input-group">
                    <input type="radio" id="respuesta2" name="respuesta" value="Respuesta 2">
                    <label for="respuesta2">Respuesta 2</label>
                </div>
                </li>
                <li class="list-group-item" onclick="seleccionarRespuesta(3)">
                <div class="input-group">
                    <input type="radio" id="respuesta3" name="respuesta" value="Respuesta 3">
                    <label for="respuesta3">Respuesta 3</label>
                </div>
                </li>
            </ul>
            <button class="btn btn-primary mt-3" id="siguiente1" onclick="siguientePregunta()">Siguiente</button>
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
            <div id="resultado" class="d-none">
                <h3>Resultado</h3>
                <p id="respuestasSeleccionadas"></p>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {

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



        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
