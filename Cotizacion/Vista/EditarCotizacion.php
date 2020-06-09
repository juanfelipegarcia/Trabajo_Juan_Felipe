<?php

session_start();

if (!(isset($_SESSION["Nombre"]))) {
 header("location:../../Index.php");    
}

require_once('../../conexion.php');
require_once('../Modelo/Cotizacion.php');
require_once('../Modelo/CrudCotizacion.php');


$CrudCotizacion = new CrudCotizacion();
$Cotizacion = $CrudCotizacion::ObtenerCotizacion($_GET['IdCotizacion']);

$mysqli = new mysqli('localhost', 'root', '', 'bdphp_jf');

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     <div class="container col-md-6">
          <ul class="nav justify-content-end">
               <li class="nav-item">
               <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="../../CerrarSeccion.php">Cerrar Seccion</a></button>
               </li>
          </ul>
          <h1 align="center">EDITAR Cotizacion</h1>
          <form action="../Controlador/ControladorCotizacion.php" method="post">
               <div class="form-row" >
                    <div class="form-group col-md-2">
                         <label for="">Cotización N°</label>
                         <input type="text" class="form-control" name="IdCotizacion" id="IdCotizacion" value="<?php echo $Cotizacion->getIdCotizacion();?>" readonly>
                    </div>
               </div>

               <div class="form-row" >
                    <div class="form-group col-md-4">
                         <label for="">Empresa</label>
                         <select id="IdEmpresa"  name= "IdEmpresa" class="form-control">
                              <option value="0"  >Seleccione una Empresa</option>
                              <?php
                              $query = $mysqli -> query ("SELECT * FROM empresa");
                              while ($valores = mysqli_fetch_array($query)) {
                              echo '<option value="'.$valores[IdEmpresa].'">'.$valores[Empresa].'</option>';
                              }
                              ?>
                         </select>
                    </div>
                    <div class="form-group col-md-4">
                         <label for="inputState">Estado</label>
                         <input type="text" class="form-control" id="Estado" name="Estado" value="<?php echo $Cotizacion->getEstado();?>">
                    </div>
                    <div class="form-group col-md-4">
                         <label for="inputPassword4">Metros cubicos</label>
                         <input type="text" class="form-control solo_numeros" id="Metros_Cubicos" name="Metros_Cubicos" value="<?php echo $Cotizacion->getMetros_Cubicos();?>">
                    </div>
               </div>
               <div class="form-row">
                    <div class="form-group col-md-4">
                         <label for="">Valor Metro Cubico</label>
                         <input type="text" class="form-control solo_numeros" id="Valor_Metro" name="Valor_Metro" onchange="valor_Total()" value="<?php echo $Cotizacion->getValor_Metro();?>">
                    </div>
                    <div class="form-group col-md-4">
                         <label for="">IVA</label>
                         <input type="text" class="form-control solo_numeros" id="Iva" name="Iva" value="<?php echo $Cotizacion->getIva();?>" readonly>
                    </div>
                    <div class="form-group col-md-4">
                         <label for="inputPassword4">Valor Total</label>
                         <input type="text" class="form-control solo_numeros" id="Valor_Total" name="Valor_Total" value="<?php echo $Cotizacion->getValor_Total();?>" readonly>
                    </div>
               </div>
               <div class="mb-3">
                    <label for="validationTextarea">Observaciones</label>
                         <textarea class="form-control " id="Observaciones" name="Observaciones" placeholder="<?php echo $Cotizacion->getObservaciones();?>"></textarea>
               </div>
               <input type="hidden" name="Editar" id="Editar">
               <button type="submit" class="btn btn-primary">Editar Cotizacion</button>
               </form>
               <br>
               <div class="form-row" align="center">
               <button  type="" class="btn btn-primary"><a href="ListarCotizacion.php"><font color="#ffffff">Volver</font></a></button>
               </div>

     </div>
</body>
<script src="../js/validaciones.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>