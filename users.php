<!doctype html>
<html lang="en">
    <head>
        <title>Users</title>
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
    <form method="post" class="users_form">
        <div class="container">
        <div class="img"><img src="img/Buap.png" class="logo" alt=""></div>
            <div class="titulo"><h1>Usuarios</h1><hr></div>
            <div class="icons">
                <a href="#" class="link"><i class="ri-user-add-line"></a></i>
                <a href="#" class="link"><i class="ri-add-circle-fill"></i></a>    
            </div>
        </div>
        <div class="search">
                <input type="text" class="form-control" name="inputID" Required id="inputID" aria-describedby="helpId" placeholder="Buscar usuario.">
            </div>
            <?php
            include 'Backend/API/BD/DB.php';
            $sql = "SELECT * , departamentos.NombreDepartamento
            FROM usuarios
            INNER JOIN usuariodepartamento ON usuarios.UsuarioID = usuariodepartamento.UsuarioID
            INNER JOIN departamentos ON usuariodepartamento.DepartamentoID = departamentos.DepartamentoID;";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo"
                <div class='table_user'>
                <div class='table-responsive'>
                <table class='table table-striped table-hover table-borderless table-primary align-middle' >
                <thead class='table-light'>
                    <caption>
                        Lista de usuarios
                    </caption>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Contrasena</th>
                            <th>Tipo</th>
                            <th>Departamento</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    ";
                    while ($row = $result->fetch_assoc()) {
                    echo"
                        <tr class='table-primary'>
                            <td scope='row'>". $row['UsuarioID'] . "</td>
                            <td>".$row['Username']."</td>
                            <td>".$row['Password']."</td>
                            <td>".$row['TipoUsuario']."</td>
                            <td>".$row['NombreDepartamento']."</td>
                            <td>
                            <button type='button' class='btn btn-danger' onclick='confirmarEliminacion({$row['UsuarioID']})'>
                            <i class='ri-delete-bin-5-line'></i>
                            </button>
                            </td>
                            <td>
                            <button type='button' class='btn btn-blue' onclick='confirmarEliminacion({$row['UsuarioID']})'>
                            <i class='ri-edit-2-fill'></i>
                            </button>
                            </td>
                        </tr>
                    ";
                }   
                echo "</table>";
            } else {
                echo "No hay usuarios en la base de datos.";
            }   
            ?>
        </div>
    </form>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYT F4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function confirmarEliminacion(id) {
                Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });
                }
                });
            }
        </script>
    </body>
</html>
