<?PHP 

include("db.php");

if (isset($_POST['save_task'])){
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
    
    $query = "INSERT INTO task(cui, nombre, apellido, fechanac, correo, direccion, nacionalidad, deptonac, cel, profesion, pretsalario) 
    VALUES ('$cui', '$nombre', '$apellido', '$fechanac', '$correo', '$direccion', '$nacionalidad', '$deptonac', '$cel', '$profesion', '$pretsalario')";
}   $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Consulta fallida");
}


    $_SESSION['message'] = 'Guardado correctamente';
    $_SESSION['message_type'] = 'success';

    header ("Location: index.php");
?>