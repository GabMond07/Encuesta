<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro semi-transparente */
            display: none; /* Ocultar inicialmente */
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Asegura que esté en la parte superior */
        }

        #form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Sombra */
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

    <button onclick="showForm()">Mostrar Formulario</button>

    <div id="overlay" onclick="hideForm()">
        <div id="form-container">
            <h2>Formulario de Usuario</h2>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" required>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="department" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

    <script>
        function showForm() {
            document.getElementById("overlay").style.display = "flex"; // Mostrar el overlay
        }

    </script>
</body>
</html>
