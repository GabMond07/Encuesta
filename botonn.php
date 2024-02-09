<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f0f0;
    }
    .question-container {
      margin-top: 50px;
    }
    .answer-option {
      border: 2px solid #dddddd;
      padding: 20px;
      margin-top: 20px;
      cursor: pointer;
    }
    .answer-option.selected {
      border-color: #007bff;
    }
    .answer-option input[type="radio"] {
      display: none;
    }
    .answer-option .fa-check {
      display: none;
    }
    .answer-option.selected .fa-check {
      display: inline-block;
      color: #007bff;
      position: absolute;
      top: 10px;
      left: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col text-start">
        <a href="#" class="btn btn-primary">Atrás</a>
      </div>
      <div class="col text-end">
        <span class="badge bg-primary">1/25</span>
      </div>
    </div>
    <div class="row question-container">
      <div class="col">
        <h3 class="text-center">¿Cuál es tu color favorito?</h3>
        <div class="answer-option" onclick="selectAnswer(this)">
          <input type="radio" id="option1" name="color" value="azul">
          <i class="fas fa-check"></i>
          <label for="option1">Azul</label>
        </div>
        <div class="answer-option" onclick="selectAnswer(this)">
          <input type="radio" id="option2" name="color" value="rojo">
          <i class="fas fa-check"></i>
          <label for="option2">Rojo</label>
        </div>
        <div class="answer-option" onclick="selectAnswer(this)">
          <input type="radio" id="option3" name="color" value="verde">
          <i class="fas fa-check"></i>
          <label for="option3">Verde</label>
        </div>
        <div class="answer-option" onclick="selectAnswer(this)">
          <input type="radio" id="option4" name="color" value="amarillo">
          <i class="fas fa-check"></i>
          <label for="option4">Amarillo</label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button class="btn btn-primary btn-lg btn-block mt-3">Continuar</button>
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>
    function selectAnswer(answerDiv) {
      // Desactiva todas las respuestas
      document.querySelectorAll('.answer-option').forEach(function(el) {
        el.classList.remove('selected');
      });
      
      // Activa la respuesta seleccionada
      answerDiv.classList.add('selected');
    }
  </script>
</body>
</html>

