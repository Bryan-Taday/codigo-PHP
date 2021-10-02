<?php
    include_once('crud/read.php');
    var_dump($result);
    include('include/inicio.php');
?>
    <div class="container mt-5">
        <h1 class="text-center">Paquetes resolver elias - PHP (mysqli)</h1>
        <hr>
        <div class="row">
            <div class="col-12">
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
                                <td><?php echo $row['titulo']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['estado']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="actualizar.php?id=<?php echo $row['cod_paquete']; ?>">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="crud/delete.php?id=<?php echo $row['cod_paquete']; ?>">
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