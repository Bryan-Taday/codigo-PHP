<?php
    include_once('crud/read.php');
    include('include/inicio.php');
?>
    <div class="container mt-5">
        <h1 class="text-center">CRUD - PHP (mysqli)</h1>
        <hr>
        <div class="row">
            <div class="col-4">
                <form class="border border-dark rounded p-2" action="crud/create.php" method="POST">
                    Nombre: <input class="form-control" type="text" name="nombre">
                    Edad: <input class="form-control" type="number" name="edad">
                    Deporte: <input class="form-control" type="text" name="deporte">
                    <div class="text-center m-2">
                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Deporte</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['edad']; ?></td>
                                <td><?php echo $row['deporte']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="actualizar.php?id=<?php echo $row['id']; ?>">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="crud/delete.php?id=<?php echo $row['id']; ?>">
                                        <i class="far fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include('include/fin.php'); ?>