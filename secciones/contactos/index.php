

<?php 
    //Llamar el archivo conexion.php
    include ("../../conexion.php");

    //Enviar los parametros a traves de la URL
    if(isset($_GET["txtID"])){
        //Almacenar ID
        $txtID = (isset($_GET["txtID"]))?$_GET["txtID"]:"";
        //Preparar sentencia SQL
        $sentencia = $conexion -> prepare ("DELETE FROM contactos WHERE id=:id");
        //Pasar el parametro
        $sentencia->bindParam(":id", $txtID);
        $sentencia->execute();

        //Mandar el mensaje que se realizó el registro
        $mensaje = "Registro eliminado exitosamente";
        //Redireccionar
        header ("Location:index.php?mensaje=" .$mensaje);


    }


    //Utilizaremos una sentencia para llamar los datos de la tabla SQL
    $sentencia = $conexion->prepare("SELECT * FROM contactos");
    //Ejecutamos las variables para mostrar los datos
    $sentencia->execute();
    //Creamos una variable tipo array para cargar todos los datos
    $lista_contactos = $sentencia->fetchALL(PDO::FETCH_ASSOC);

    //Comprobamos que nos manda los datos
    //print_r ($lista_contactos); 



include("../../templates/header.php");
?>

    
</br>
    <h3>Contactos</h3>
    <div class="card">
        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Registrar Nuevo</a>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table" id="tabla_id">
                    <thead>
                        <tr>
                       
                            <th scope="col">N*</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Parentesco</th>
                            <th scope="col">Trabajo</th>
                            <th scope="col">Dirección Trabajo</th>
                            <th scope="col">Telefono Trabajo</th>
                            <th scope="col">Contacto Alterno</th>
                            <th scope="col">Telefono Referente</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista_contactos as $registro){   ?>
                            <tr class="">
                                <td><?php echo $registro["id"];  ?></td>
                                <td><?php echo $registro["nombre"];  ?></td>
                                <td><?php echo $registro["telefono"];  ?></td>
                                <td><?php echo $registro["correo"];  ?></td>
                                <td>
                                <?php echo $registro["departamento"];  ?>,
                                <?php echo $registro["municipio"];  ?>,
                                <?php echo $registro["casa"];  ?>
                                </td>
                                <td><?php echo $registro["parentesco"];  ?></td>
                                <td><?php echo $registro["nombre_trabajo"];  ?></td>
                                <td>
                                <?php echo $registro["municipio_trabajo"];  ?>,
                                <?php echo $registro["casa_trabajo"];  ?>,
                                <?php echo $registro["departamento_trabajo"];  ?>
                                </td>
                                <td><?php echo $registro["telefono_trabajo"];  ?></td>
                                <td><?php echo $registro["referente_nombre"];  ?></td>
                                <td><?php echo $registro["telefono_referente"];  ?></td>
                                <td>
                                    <a class="btn btn-success bi bi-pencil-square" href="editar.php?txtID=<?php echo $registro['id']; ?>" role="button"></a>
                                    <p></p>
                                    <a class="btn btn-danger bi bi-trash3-fill" href="javascript:borrar(<?php echo $registro['id']; ?>);" role="button"></a>
                                </td>
                            </tr>
                        <?php }  ?>
                        <div class="card-footer text-muted"></div>
                    </tbody>
                    
                </table>
            </div>
        </div>    
    </div>
    
<?php include("../../templates/footer.php");?>