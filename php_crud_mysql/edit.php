<?php
    include("db.php");

    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $cui = $row['cui'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $fechanac = $row['fechanac'];
        $correo = $row['correo'];
        $direccion = $row['direccion'];
        $nacionalidad = $row['nacionalidad'];
        $deptonac = $row['deptonac'];
        $cel = $row['cel'];
        $profesion = $row['profesion'];
        $pretsalario = $row['pretsalario'];
}

}

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $cui = $_POST['cui'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fechanac = $_POST['fechanac'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $nacionalidad = $_POST['nacionalidad'];
        $deptonac = $_POST['deptonac'];
        $cel = $_POST['cel'];
        $profesion = $_POST['profesion'];
        $pretsalario = $_POST['pretsalario'];
        
        $query = "UPDATE task set cui = '$cui', nombre = '$nombre', apellido = '$apellido', fechanac = '$fechanac', correo = '$correo', 
        direccion = '$direccion', nacionalidad = '$nacionalidad', deptonac = '$deptonac', cel = '$cel', profesion = '$profesion', pretsalario = '$pretsalario' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Actualizado correctamente';
        $_SESSION['message_type'] = 'danger';  
        header("Location: index.php");  
}

?>

<?php include("header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <div class="form-group">
                        <input type="number" name="cui" value="<?php echo $cui; ?>"
                         class="form-control" placeholder="Actualizar cui" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>"
                         class="form-control" placeholder="Actualizar nombre" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellido" value="<?php echo $apellido; ?>"
                         class="form-control" placeholder="Actualizar apellido" required>
                    </div> 

                    <div class="form-group">
                        <input type="date" name="fechanac" value="<?php echo $fechanac; ?>"
                         class="form-control" placeholder="Actualizar fechanac">
                    </div> 

                    <div class="form-group">
                        <input type="email" name="correo" value="<?php echo $correo; ?>"
                         class="form-control" placeholder="Actualizar correo" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="direccion" value="<?php echo $direccion; ?>"
                         class="form-control" placeholder="Actualizar direccion">
                    </div>

                    <div class="form-group">
                        <input type="text" name="nacionalidad" value="<?php echo $nacionalidad; ?>"
                         class="form-control" placeholder="Actualizar nacionalidad">
                    </div>

                    <div class="form-group">
                        <input type="text" name="deptonac" value="<?php echo $deptonac; ?>"
                         class="form-control" placeholder="Actualizar departamento" required>
                    </div>

                    <div class="form-group">
                        <input type="number" name="cel" value="<?php echo $cel; ?>"
                         class="form-control" placeholder="Actualizar Celular" required>
                    </div>

                     <div class="form-group">
                        <input type="text" name="profesion" value="<?php echo $profesion; ?>"
                         class="form-control" placeholder="Actualizar Profesion" required>
                    </div>

                     <div class="form-group">
                        <input type="number" name="pretsalario" value="<?php echo $pretsalario; ?>"
                         class="form-control" placeholder="Actualizar Pretension salarial" required>
                    </div>

                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php") ?>