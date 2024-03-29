<?php
/*
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
*/
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Dashboard</title>
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
    <form action="post.php" method="post" class="form_admin">
        <div class="container">
            <div class="img"><img src="img/Buap.png" class="logo" alt=""></div>
            <div class="titulo"><h1>Informe de resultados</h1><hr></div>
            <div class="icons">
                <a href="users.php" class="link"><i class="ri-user-settings-fill"></a></i>
                <a href="Encuestas.php" class="link"><i class="ri-list-check-2"></a></i>
            </div>
        </div>
        <div class="estadisticas">
            <dl class="row">
                <dt class="col-sm-3">Encuestas</dt>
                <dd class="col-sm-9"></dd>
                <dt class="col-sm-3">% Avance</dt>
                <dd class="col-sm-9">Departamentos</dd>
                <dt class="col-sm-3 text-truncate">
                    Departamentos
                </dt>
                <dd class="col-sm-9">Term</dd>
                <dt class="col-sm-3">Nesting</dt>
                <dd class="col-sm-9">
                    <dl class="row">
                        <dt class="col-sm-4">Nested title</dt>
                        <dd class="col-sm-8">Nested definition</dd>
                    </dl>
                </dd>
            </dl>
        </div>
    </form>
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
