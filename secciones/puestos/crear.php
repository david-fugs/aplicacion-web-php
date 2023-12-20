
<?php
include("../../db.php");

if ($_POST) {

    print_r($_POST);

    //datos metodo post
    $nombredelpuesto = (isset($_POST["nombredelpuesto"])?$_POST["nombredelpuesto"]:"");

    //insercion de datos

    $sentencia = $conexion->prepare("INSERT INTO tbl_puestos(id,nombredelpuesto)VALUES(null,:nombredelpuesto)");

    //asignar valores 
    $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
    $sentencia->execute();
    header("Location:index.php");
}
?> 


<?php
include("../../templates/header.php");
?>
<br>

<div class="card">
    <div class="card-header">Puestos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
                <input type="text" class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="Nombre del puesto" />
            </div>

            <button type="submit" class="btn btn-success">
                agregar
            </button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted"></div>
</div>




<?php
include("../../templates/footer.php");
?>