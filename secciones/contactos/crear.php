

<?php 
//Incluyo la conexión a la base de datos
include("../../conexion.php");
//Recolectamos la información del formulario
if ($_POST){
  $nombre=(isset($_POST["nombre"])?$_POST["nombre"]:"");
  $telefono=(isset($_POST["telefono"])?$_POST["telefono"]:"");
  $correo=(isset($_POST["correo"])?$_POST["correo"]:"");
  $departamento=(isset($_POST["departamento"])?$_POST["departamento"]:"");
  $municipio=(isset($_POST["municipio"])?$_POST["municipio"]:"");
  $casa=(isset($_POST["casa"])?$_POST["casa"]:"");
  $parentesco=(isset($_POST["parentesco"])?$_POST["parentesco"]:"");
  $nombre_trabajo=(isset($_POST["nombre_trabajo"])?$_POST["nombre_trabajo"]:"");
  $departamento_trabajo=(isset($_POST["departamento_trabajo"])?$_POST["departamento_trabajo"]:"");
  $municipio_trabajo=(isset($_POST["municipio_trabajo"])?$_POST["municipio_trabajo"]:"");
  $casa_trabajo=(isset($_POST["casa_trabajo"])?$_POST["casa_trabajo"]:"");
  $telefono_trabajo=(isset($_POST["telefono_trabajo"])?$_POST["telefono_trabajo"]:"");
  $referente_nombre=(isset($_POST["referente_nombre"])?$_POST["referente_nombre"]:"");
  $telefono_referente=(isset($_POST["telefono_referente"])?$_POST["telefono_referente"]:"");

  //Preparamos la sentencia para guardar los datos en SQL
  $sentencia=$conexion->prepare("INSERT INTO contactos (id, nombre, telefono, correo, departamento, municipio,
  casa, parentesco, nombre_trabajo, departamento_trabajo, municipio_trabajo, casa_trabajo, telefono_trabajo,
  referente_nombre, telefono_referente)
  VALUE (null, :nombre, :telefono, :correo, :departamento, :municipio, :casa, :parentesco, :nombre_trabajo,
  :departamento_trabajo, :municipio_trabajo, :casa_trabajo, :telefono_trabajo, :referente_nombre, :telefono_referente)");

  //Asignamos los valores que vienen del formulario
  $sentencia->bindParam(":nombre", $nombre);
  $sentencia->bindParam(":telefono", $telefono);
  $sentencia->bindParam(":correo", $correo);
  $sentencia->bindParam(":departamento", $departamento);
  $sentencia->bindParam(":municipio", $municipio);
  $sentencia->bindParam(":casa", $casa);
  $sentencia->bindParam(":parentesco", $parentesco);
  $sentencia->bindParam(":nombre_trabajo", $nombre_trabajo);
  $sentencia->bindParam(":departamento_trabajo", $departamento_trabajo);
  $sentencia->bindParam(":municipio_trabajo", $municipio_trabajo);
  $sentencia->bindParam(":casa_trabajo", $casa_trabajo);
  $sentencia->bindParam(":telefono_trabajo", $telefono_trabajo);
  $sentencia->bindParam(":referente_nombre", $referente_nombre);
  $sentencia->bindParam(":telefono_referente", $telefono_referente);
  //Ejecutar la sentencia
  $sentencia->execute();

  //Mandamos un mensaje
  $mensaje="Registro realizado con éxito";
  //Redireccionamos
  header("Location:index.php?mensaje=".$mensaje);

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
          <label for="nombre" class="form-label">Nombre Completo</label>
          <input type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre Completo">
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="text"
            class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="N° de Telefono">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escriba su correo">
        </div>

        <div class="mb-3">
          <label for="departamento" class="form-label">Departamento</label>
          <input type="text"
            class="form-control" name="departamento" id="departamento" aria-describedby="helpId" placeholder="Departamento">
        </div>

        <div class="mb-3">
          <label for="municipio" class="form-label">Municipio</label>
          <input type="text"
            class="form-control" name="municipio" id="municipio" aria-describedby="helpId" placeholder="Municipio">
        </div>

        <div class="mb-3">
          <label for="casa" class="form-label">Casa</label>
          <input type="text"
            class="form-control" name="casa" id="casa" aria-describedby="helpId" placeholder="Col. N° Casa">
        </div>

        <div class="mb-3">
            <label for="parentesco" class="form-label">Parentesco :</label>
            <select class="form-select form-select-sm" name="parentesco" id="parentesco">
              <option>Hijo/a</option>
              <option>Tios/as</option>
              <option>Compañero/a</option>
            </select>
        </div>

        <div class="mb-3">
          <label for="nombre_trabajo" class="form-label">Trabajo</label>
          <input type="text"
            class="form-control" name="nombre_trabajo" id="nombre_trabajo" aria-describedby="helpId" placeholder="nombre de la empresa">
        </div>

        <div class="mb-3">
          <label for="departamento_trabajo" class="form-label">Departamento</label>
          <input type="text"
            class="form-control" name="departamento_trabajo" id="departamento_trabajo" aria-describedby="helpId" placeholder="Departamento">
        </div>

        <div class="mb-3">
          <label for="municipio_trabajo" class="form-label">Municipio</label>
          <input type="text"
            class="form-control" name="municipio_trabajo" id="municipio_trabajo" aria-describedby="helpId" placeholder="Municipio">
        </div>

        <div class="mb-3">
          <label for="casa_trabajo" class="form-label">Casa</label>
          <input type="text"
            class="form-control" name="casa_trabajo" id="casa_trabajo" aria-describedby="helpId" placeholder="Col. N° Casa">
        </div>

        <div class="mb-3">
          <label for="telefono_trabajo" class="form-label">Telefono</label>
          <input type="text"
            class="form-control" name="telefono_trabajo" id="telefono_trabajo" aria-describedby="helpId" placeholder="N° de Telefono Trabajo">
        </div>
        
        <div class="mb-3">
          <label for="referente_nombre" class="form-label">Nombre del Referente</label>
          <input type="text"
            class="form-control" name="referente_nombre" id="referente_nombre" aria-describedby="helpId" placeholder="Nombre Completo">
        </div>

        <div class="mb-3">
          <label for="telefono_referente" class="form-label">Telefono</label>
          <input type="text"
            class="form-control" name="telefono_referente" id="telefono_referente" aria-describedby="helpId" placeholder="N° de Telefono">
        </div>


        
        <button type="submit" class="btn btn-success">Agregar Contacto</button>
        <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>

        </form>


        </div>
        <div class="card-footer text-muted"></div>
    </div>
    
<?php include("../../templates/footer.php");?>