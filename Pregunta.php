<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .header-container {
            position: relative;
        }

        .atras {
            position: absolute;
            left: 5%;
            top: 2%;
        }

        .atras .btn-back {
            text-decoration: none;
            color: inherit;
            font-size: 2rem;
        }

        .contador {
            position: absolute;
            right: 5%;
            top: 2%;
        }

        .contador p {
            font-size: 1.5rem;
        }

        .separador{
            width: 95%;
            justify-content: center;
            align-items: center;
        }

        .line{
            position: relative;
            top: 3rem;
            width: 100%; 
            left: 3%; 
        }

        .main{
            display: flex;
            justify-content: center;
            margin-top: 5rem;
            flex-direction: column; /* Alinea los elementos verticalmente */
            align-items: center;
        }

        .preguntas{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center; /* Alinea verticalmente los elementos */
            margin-bottom: 2rem; /* Espacio entre div1 y div2 */
        }

        .preguntas .titulo {
            margin-bottom: .5rem; /* Agrega espacio entre la pregunta y el texto */
        }

        .text{
            display: flex;
            justify-content: center;
        }

        /* Preguntas */

        .card {
            margin-bottom: 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.5s; /* Agrega transición para el cambio de color */
            border-radius: 20px;

        }

        .option-text {
            margin-right: 10px;
        }

        .continue-button {
            width: 100%;
            margin-top: 20px;
        }   
        .card:hover .card-body {
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        }

        img{
            width: 5vh;
            margin-right:10px
        }

        .card.selected {
            background-color: lightblue;
        }   
        .card.selected .card-body {
            border: 2px solid blue;
        }

    </style>
</head>
<body>
    <div class="header-container">
        <header>
            <div class="atras"><a href="#" class="btn-back" ><i class="ri-arrow-left-line"></i></a></div>
            <div class="contador"><p>2/45</p></div>
            <div class="separador" ><hr class="line"></div>
        </header>
    </div>
        <main class="main">
            <div class="preguntas">
                <div class="titulo"><h3>¿Por qué?</h3></div>
            <div class="text"><p class="form-text text-muted">Selecciona un opcion</p></div>
            </div>
            <div class="container">
                <div class="card" onclick="toggleRadioButton('radioButton1')">
                <div class="card-body">
                    <label class="option-text"><img src="img/feliz.png" alt="">Opción 1</label>
                    <input type="radio" class="option-input" id="radioButton1" name="radioButtons">
                    </div>
                </div>
                <div class="card" onclick="toggleRadioButton('radioButton2')">
                <div class="card-body">
                    <label class="option-text"><img src="img/cara-sonriente.png" alt="">Opción 2</label>
                    <input type="radio" class="option-input" id="radioButton2" name="radioButtons">
                </div>
                </div>
                <div class="card" onclick="toggleRadioButton('radioButton3')">
                <div class="card-body">
                    <label class="option-text"><img src="img/cara-seria.png" alt="">Opción 3</label>
                    <input type="radio" class="option-input" id="radioButton3" name="radioButtons">
                </div>
                </div>
                <div class="card">
                <div class="card-body" onclick="toggleRadioButton('radioButton4')">
                    <label class="option-text"><img src="img/triste.png" alt="">Opción 2</label>
                    <input type="radio" class="option-input" id="radioButton4" name="radioButtons">
                </div>
                </div>
                <button class="btn btn-primary continue-button">Continuar</button>
            </div>
        </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <script>
        function toggleRadioButton(radioButtonId) {
            var radioButton = document.getElementById(radioButtonId);
            var cards = document.querySelectorAll('.card');
        
            // Remover la clase 'selected' de todas las cartas
            cards.forEach(function(card) {
                card.classList.remove('selected');
            });
        
            if (radioButton.checked) {
                radioButton.checked = false;
            } else {
                radioButton.checked = true;
                radioButton.parentNode.parentNode.classList.add('selected');
            }
        }

    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
