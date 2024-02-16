<!doctype html>
<html lang="en">
    <head>
        <title>Encuestas</title>
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
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <form action="Post" class="encuestas_form">
        <div class="container">
        <div class="img"><img src="img/Buap.png" class="logo" alt=""></div>
            <div class="titulo"><h1>Encuestas</h1><hr></div>
            <div class="icons">
                <a href="#" class="link" onclick="showForm()"><i class="ri-file-add-line"></i></a>    
            </div>
            <div class="cards">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Encuestas</h3>
                                <h1 class="card-text">4</h1>
                                <p>Encuestas creadas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Estadísticas</h3>
                                <a href="#" class="grafica"><i class="ri-bar-chart-grouped-fill"></i></a>
                                <p class="card-text">Ver mis estadísticas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Preguntas</h3>
                                <a href="#" class="grafica"><i class="ri-question-mark"></i></a>
                                <p class="card-text">ver</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-encuesta">
                    <div class="title-table"><h3>Encuestas recientes</h3></div>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-striped table-hover table-borderless table-primary align-middle"
                        >
                            <thead class="table-light">
                                <caption>
                                    Mis encuestas
                                </caption>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Preguntas</th>
                                    <th>Fecha</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="table-primary">
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" onclick="confirmarEliminacion(Item)">
                                        <i class="ri-delete-bin-5-line"></i>
                                        </button>
                                        </td>
                                        <td>
                                        <button type="button" class="btn btn-blue" onclick="showForm()">
                                        <i class='ri-edit-2-fill'></i>
                                        </button>
                                        </td>
                                </tr>
                                <tr class="table-primary">
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" onclick="confirmarEliminacion(Item)">
                                        <i class="ri-delete-bin-5-line"></i>
                                        </button>
                                        </td>
                                        <td>
                                        <button type="button" class="btn btn-blue" onclick="showForm()">
                                        <i class="ri-edit-2-fill"></i>
                                        </button>
                                        </td>
                                </tr>
                            </tbody>
                            <div id="overlay" onclick="hideForm()">
                            <div id="form-container">
                                <h2>Nueva encuesta</h2>
                                <form>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="username" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Fecha inicio</label>
                                        <input type="date" class="form-control" id="password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Fecha fin</label>
                                        <input type="date" class="form-control" id="type" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="department" class="form-label">Departamento</label>
                                        <input type="text" class="form-control" id="department" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                    </div>
                    
                </div>
            </div>
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
        <script>
        function showForm() {
            document.getElementById("overlay").style.display = "flex"; // Mostrar el overlay
        }
    </script>
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
