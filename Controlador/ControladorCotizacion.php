<?php

require_once('../Modelo/Cotizacion/Cotizacion.php');
require_once('../Modelo/Cotizacion/CrudCotizacion.php');

$Cotizacion = new Cotizacion();
$CrudCotizacion =new CrudCotizacion();

if (isset($_POST["Crear"])) {

     $Cotizacion->setIdCotizacion(null);
     $Cotizacion->setIdEmpresa($_POST["IdEmpresa"]);
     $Cotizacion->setEstado($_POST["Estado"]);
     $Cotizacion->setMetros_Cubicos($_POST["Metros_Cubicos"]);
     $Cotizacion->setValor_Metro($_POST["Valor_Metro"]);
     $Cotizacion->setIva($_POST["Iva"]);
     $Cotizacion->setValor_Total($_POST["Valor_Total"]);
     $Cotizacion->setObservaciones($_POST["Observaciones"]);

     $CrudCotizacion::InsertarCotizacion($Cotizacion);

}



?>