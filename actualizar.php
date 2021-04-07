<?php
    include('include/inicio.php');
    include('crud/read.php');
    $id = $_GET['id'];
    // var_dump($result);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row['id'] == $id){
                $array = $row;
            }
        }
    }
?>
<div class="container mt-5">
    <h1>Actualizar...</h1>
    <hr>
    <div class="row">
        <div class="col-8">
            <form class="border rounded p-3" action="crud/update.php" method="POST">
            <input class="form-control" type="text" name="id" value="<?php echo $array['id'] ?>" hidden>
            Nombre: <input class="form-control" type="text" name="nombre" value="<?php echo $array['nombre'] ?>">
            Edad: <input class="form-control" type="number" name="edad" value="<?php echo $array['edad'] ?>">
            Deporte: <input class="form-control" type="text" name="deporte" value="<?php echo $array['deporte'] ?>">
            <div class="text-center">
                <button class="btn btn-success btn-block mt-3" type="submit">Actualizar</button>
            </div>
            </form>
        </div>
        <div class="col-4 text-center">
            <a class="btn btn-danger" href="index.php">Cancelar</a>
        </div>
    </div>
</div>


<?php
    include('include/fin.php')
?>