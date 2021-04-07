<?php
include_once('crud/read.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elias arreglar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Reservar</h1>
<hr>
<div class="container">
    <div class="row">
        <div class="col">
            <form class="border border-dark rounded p-3" action="crud/reservar.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <select class="form-control" name="tiempo" id="tiempo">
                    <option value="12:00:00">12:00:00</option>
                    <option value="12:20:00">12:20:00</option>
                    <option value="12:40:00">12:40:00</option>
                    <option value="13:00:00">13:00:00</option>
                    <option value="13:20:00">13:20:00</option>
                    <option value="13:40:00">13:40:00</option>
                    <option value="14:00:00">14:00:00</option>
                    <option value="14:20:00">14:20:00</option>
                    <option value="14:40:00">14:40:00</option>
                    <option value="15:00:00">15:00:00</option>
                    <option value="15:20:00">15:20:00</option>
                    <option value="15:40:00">15:40:00</option>
                    <option value="16:00:00">16:00:00</option>
                    <option value="16:20:00">16:20:00</option>
                    <option value="16:40:00">16:40:00</option>
                    <option value="17:00:00">17:00:00</option>
                    <option value="17:20:00">17:20:00</option>
                    <option value="17:40:00">17:40:00</option>
                    <option value="18:00:00">18:00:00</option>
                    <option value="18:20:00">18:20:00</option>
                    <option value="18:40:00">18:40:00</option>
                    <option value="19:00:00">19:00:00</option>
                    <option value="19:20:00">19:20:00</option>
                    <option value="19:40:00">19:40:00</option>
                    <option value="20:00:00">20:00:00</option>
                    <option value="20:20:00">20:20:00</option>
                    <option value="20:40:00">20:40:00</option>
                    <option value="21:00:00">21:00:00</option>
                    <option value="21:20:00">21:20:00</option>
                    <option value="21:40:00">21:40:00</option>
                    <option value="22:00:00">22:00:00</option>
                    <option value="22:20:00">22:20:00</option>
                    <option value="22:40:00">22:40:00</option>
                    <option value="23:00:00">23:00:00</option>
                    <option value="23:20:00">23:20:00</option>
                    <option value="23:40:00">23:40:00</option>
                </select>
                <hr>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Reservar</button>
                </div>
            </form>
            <br>
            <br>
            <hr>
            <form class="border border-dark rounded p-3" action="crud/amigo.php" method="POST">
                <div class="form-group">
                    <label for="nombre2">Nombre</label>
                    <input class="form-control" type="text" name="nombre2">
                </div>
                <hr>
                <div class="text-center">
                    <button class="btn btn-warning" type="submit">Agregar Amigo</button>
                </div>
            </form>
        </div>
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Hora inicio reserva</th>
                        <th>Hora fin reserva</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['hora_reserva']; ?></td>
                            <td><?php echo $row['fin_hora_reserva']; ?></td>
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
    
</body>
</html>