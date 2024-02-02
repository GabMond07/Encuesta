<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="Style.css">
  </head>

  <body>
    <form action="Login.php" method="post" class="form">
      <div class="container">
          <div class="Login">
              <h1>¡Bienvenido!</h1>
          </div>
          <div class="insert">
              <div class="form-group">
                  <label for="">Usuario</label>
                  <input type="text" class="form-control" name="inputID" Required id="inputID" aria-describedby="helpId" placeholder="usuario.">
              </div>
              <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="PasswordID"  Required id="PasswordID" placeholder="contraseña" require>
              </div>
                <button type="submit" class="btn btn-primary">Login</button>
              <div class="error">
              <?php
                  if (isset($_GET['error'])) {
                    echo "<p style='color: red;'>" ."Credenciales incorrectas. Intentelo de nuevo". "</p>";
                  }
              ?>
              </div>
            </div>
      </div>
    </form>

    <!-- Bootstrap JavaScript Libraries -->
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
