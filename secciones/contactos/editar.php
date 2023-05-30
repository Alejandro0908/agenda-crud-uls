


<?php 
//Lllamar el archivo de conexión
include("../../conexion.php");

//Enviar el parámetro a través de la URL
if(isset($_GET["txtID"])){
  //Almacenar el ID
  $txtID = (isset($_GET["txtID"]))?$_GET["txtID"]:"";
  //Preparar la sentencia SQL
  $sentencia = $conexion -> prepare ("SELECT * FROM contactos WHERE id=:id");
  //Pasar el parámetro
  $sentencia->bindParam(":id", $txtID);
  $sentencia->execute();

  $registro = $sentencia -> fetch(PDO::FETCH_LAZY);

  $nombre = $registro ["nombre"];
  $telefono = $registro ["telefono"];
  $correo = $registro ["correo"];
  $departamento = $registro ["departamento"];
  $municipio = $registro ["municipio"];
  $casa = $registro ["casa"];
  $parentesco = $registro ["parentesco"];
  $nombre_trabajo = $registro ["nombre_trabajo"];
  $departamento_trabajo = $registro ["departamento_trabajo"];
  $municipio_trabajo = $registro ["municipio_trabajo"];
  $casa_trabajo = $registro ["casa_trabajo"];
  $telefono_trabajo = $registro ["telefono_trabajo"];
  $referente_nombre = $registro ["referente_nombre"];
  $telefono_referente = $registro ["telefono_referente"];

}


include("../../templates/header.php");
?>

</br>
    <div class="card">
        <div class="card-header">
            Datos del Contacto
        </div>
        <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="txtID" class="form-label">ID:</label>
            <input type="text"
            value = "<?php echo $txtID  ?>"
            class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text"
          value = "<?php echo $nombre  ?>"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono:</label>
          <input type="text"
          value = "<?php echo $telefono  ?>"
            class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email"
            value = "<?php echo $correo  ?>"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
          <label for="departamento" class="form-label">Departamento:</label>
          <input type="text"
          value = "<?php echo $departamento  ?>"
            class="form-control" name="departamento" id="departamento" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
          <label for="municipio" class="form-label">Municipio:</label>
          <input type="text"
          value = "<?php echo $municipio  ?>"
            class="form-control" name="municipio" id="municipio" aria-describedby="helpId" placeholder="">
        </div>
        
        <div class="mb-3">
          <label for="casa" class="form-label"># de Casa:</label>
          <input type="text"
          value = "<?php echo $casa  ?>"
            class="form-control" name="casa" id="casa" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
          <label for="parentesco" class="form-label">Parentesco:</label>
          <input type="text"
          value = "<?php echo $parentesco  ?>"
            class="form-control" name="parentesco" id="parentesco" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
          <label for="nombre_trabajo" class="form-label">Lugar donde trabaja:</label>
          <input type="text"
          value = "<?php echo $nombre_trabajo  ?>"
            class="form-control" name="nombre_trabajo" id="nombre_trabajo" aria-describedby="helpId" placeholder="nombre de la empresa">
        </div>

        <div class="mb-3">
          <label for="departamento_trabajo" class="form-label">Departamento donde trabaja:</label>
          <input type="text"
          value = "<?php echo $departamento_trabajo  ?>"
            class="form-control" name="departamento_trabajo" id="departamento_trabajo" aria-describedby="helpId" placeholder="Departamento">
        </div>

        <div class="mb-3">
          <label for="municipio_trabajo" class="form-label">Municipio donde trabaja:</label>
          <input type="text"
          value = "<?php echo $municipio_trabajo  ?>"
            class="form-control" name="municipio_trabajo" id="municipio_trabajo" aria-describedby="helpId" placeholder="Municipio">
        </div>

        <div class="mb-3">
          <label for="casa_trabajo" class="form-label"> # De casa donde trabaja:</label>
          <input type="text"
          value = "<?php echo $casa_trabajo  ?>"
            class="form-control" name="casa_trabajo" id="casa_trabajo" aria-describedby="helpId" placeholder="Col. N° Casa">
        </div>

        <div class="mb-3">
          <label for="telefono_trabajo" class="form-label">Telefono donde trabaja:</label>
          <input type="text"
          value = "<?php echo $telefono_trabajo  ?>"
            class="form-control" name="telefono_trabajo" id="telefono_trabajo" aria-describedby="helpId" placeholder="N° de Telefono Trabajo">
        </div>

        <div class="mb-3">
          <label for="referente_nombre" class="form-label">Nombre del Referente:</label>
          <input type="text"
          value = "<?php echo $referente_nombre  ?>"
            class="form-control" name="referente_nombre" id="referente_nombre" aria-describedby="helpId" placeholder="Nombre Completo">
        </div>

        <div class="mb-3">
          <label for="telefono_referente" class="form-label">Telefono de referente:</label>
          <input type="text"
          value = "<?php echo $telefono_referente  ?>"
            class="form-control" name="telefono_referente" id="telefono_referente" aria-describedby="helpId" placeholder="N° de Telefono">
        </div>

        
        <button type="submit" class="btn btn-success bi bi-arrow-counterclockwise"> Actualizar registro</button>
        <a name="" id="" class="btn btn-danger bi bi-backspace-reverse-fill" href="index.php" role="button"> Cancelar</a>

        </form>


        </div>
        <div class="card-footer text-muted"></div>
    </div>

    
<?php include("../../templates/footer.php");?>