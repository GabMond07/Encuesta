<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffffff;
      color: #000000;
    }
    .question-container {
      margin-top: 50px;
      text-align: center;
    }
    .options-container {
      width: 80%;
      margin: auto;
      border: 2px solid #007bff;
      border-radius: 10px;
      padding: 20px;
    }
    .option-checkbox {
      margin-bottom: 10px;
    }
    .option-checkbox input[type="checkbox"] {
      display: none;
    }
    .option-checkbox label {
      cursor: pointer;
    }
    .option-checkbox input[type="checkbox"]:checked + label::before {
      content: "\2713";
      display: inline-block;
      font-size: 20px;
      margin-right: 10px;
      color: #007bff;
    }
    .counter {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 18px;
    }
    .back-button {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 18px;
    }
    .continue-button {
      width: 100%;
      margin-top: 20px;
      padding: 10px 0;
      background-color: #007bff;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .continue-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="counter">Pregunta 1 de 5</div>
    <a href="#" class="back-button">Atrás</a>
    <div class="question-container">
      <h2>Pregunta 1: ¿Cuál es tu color favorito?</h2>
      <div class="options-container">
        <div class="option-checkbox">
          <input type="checkbox" id="option1" name="option1">
          <label for="option1">Azul</label>
        </div>
        <div class="option-checkbox">
          <input type="checkbox" id="option2" name="option2">
          <label for="option2">Rojo</label>
        </div>
        <div class="option-checkbox">
          <input type="checkbox" id="option3" name="option3">
          <label for="option3">Verde</label>
        </div>
        <div class="option-checkbox">
          <input type="checkbox" id="option4" name="option4">
          <label for="option4">Blanco</label>
        </div>
      </div>
    </div>
    <button class="continue-button">Continuar</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


