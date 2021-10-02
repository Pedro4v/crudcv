<?php  include("db.php") ?>   

<?php include("header.php") ?>

<?php include("footer.php") ?>

<div class="container p-4"></div>

<div class="row">

    <div class="cool-md-4 mx-auto">

        <?php if(isset($_SESSION['message'])) { ?>
              <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
              <?= $_SESSION['message'] ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>


        <div class"card card-body">
            <form action="save_task.php" method="POST">

                <div class="form-group">
                    <input type="number" name="cui" class="form-control"
                    placeholder="Ingresar cui" required>
                </div>
                
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control"
                    placeholder="Ingresar nombre " required>                   
                </div>

                <div class="form-group">
                    <input type="text" name="apellido" class="form-control"
                    placeholder="Ingresar apellido " required>
                </div>
           

                <div class="form-group">
                    <input type="date" name="fechanac" class="form-control"
                    placeholder="Ingresar fecha nacimiento " autofocus>
                </div>

                <div class="form-group">
                    <input type="email" name="correo" class="form-control"
                    placeholder="Ingresar correo " required>
                </div>

                <div class="checkbox">
                <label><input type="checkbox"> Recuerdame</label>
                </div>

                 <div class="form-group">
                    <input type="text" name="direccion" class="form-control"
                    placeholder="Ingresar direccion de domicilio" autofocus>
                </div>

                <div class="form-group">
                    <input type="text" name="nacionalidad" class="form-control"
                    placeholder="Ingresar nacionalidad" autofocus>
                </div>

                <div class="form-group">
                    <input type="text" name="deptonac" class="form-control"
                    placeholder="Ingresar departamento de nacimiento" required>
                </div>

                <div class="form-group">
                    <input type="number" name="cel" class="form-control"
                    placeholder="Ingresar celular" required>
                </div>

                <div class="form-group">
                    <input type="text" name="profesion" class="form-control"
                    placeholder="Ingresar profesion universitaria" required>
                </div>

                <div class="form-group">
                    <input type="number" name="pretsalario" class="form-control"
                    placeholder="Ingresar pretension salarial" required>
                    <small id="Help" class="form-text text-muted">No compartiremos su informacion con nadie mas.</small>

                </div>

                <input type="submit" class="btn btn-success btn-block"
                name="save_task" value="Enviar curriculum vitae">
            </form>
        </div>

    </div>
    <div class="col-md-8">
        <table class="table table-">
            <thead>
                <tr>
                    <th>CUI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha nacimiento</th>
                    <th>Correo electronico</th>
                    <th>Direccion</th>
                    <th>Nacionalidad</th>
                    <th>Departamento de nacimiento</th>
                    <th>Celular</th>
                    <th>Profesion universitaria</th>
                    <th>Pretension salarial</th>
                    <th>Acciones</th>
                </tr>

            </thead>

            <tbody>
                <?php 
                $query = "SELECT * FROM task";
                $result_tasks = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_tasks)){ ?>
                <tr>
                    <td><?php echo $row['cui'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['apellido'] ?></td>
                    <td><?php echo $row['fechanac'] ?></td>
                    <td><?php echo $row['correo'] ?></td>
                    <td><?php echo $row['direccion'] ?></td>
                    <td><?php echo $row['nacionalidad'] ?></td>
                    <td><?php echo $row['deptonac'] ?></td>
                    <td><?php echo $row['cel'] ?></td>
                    <td><?php echo $row['profesion'] ?></td>
                    <td><?php echo $row['pretsalario'] ?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $row['id']?>">
                           Editar 
                        </a>
                        <a href="delete_task.php?id=<?php echo $row['id']?>">
                            Borrar
                        </a>
                    </td>

                </tr>
                
                <?php } ?>

            </tbody>

        </table>

    </div>
 </div>








