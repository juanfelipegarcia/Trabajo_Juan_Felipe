<?php

require_once('../conexion.php');

class CrudCotizacion{

     public function __construct(){
     }

     public function InsertarCotizacion($Cotizacion){
          $Db = Db::Conectar();// conectar a la base de Datos
          //definir la insercion a realizar
          $Insert = $Db->prepare('INSERT INTO cotizacion VALUES(:IdCotizacion,:IdEmpresa,:Estado,:Metros_Cubicos,:Valor_Metro,:Iva,:Valor_Total,:Observaciones)');
          $Insert->bindValue('IdCotizacion', $Cotizacion->getIdCotizacion());
          $Insert->bindValue('IdEmpresa', $Cotizacion->getIdEmpresa());
          $Insert->bindValue('Estado', $Cotizacion->getEstado());
          $Insert->bindValue('Metros_Cubicos', $Cotizacion->getMetros_Cubicos());
          $Insert->bindValue('Valor_Metro', $Cotizacion->getValor_Metro());
          $Insert->bindValue('Iva', $Cotizacion->getIva());
          $Insert->bindValue('Valor_Total', $Cotizacion->getValor_Total());
          $Insert->bindValue('Observaciones', $Cotizacion->getObservaciones());
          try {
               $Insert->execute();//ejecutar el insert
               //Echo " Registro exitoso";
               ?>
               <script>
          //header("location:../../index.php");
               alert("Registro exitoso");
               document.location.href="CrearCotizacion.php";
               </script>
               <?php

          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion

               die();
          }

     }

     public function ListarCotizacion(){
          $Db = Db::Conectar();
          $ListaCotizacion = [];
          $Sql = $Db->query('SELECT * FROM cotizacion');
          $Sql->execute();

          foreach($Sql->fetchAll() as $Cotizacion){
               $MyCotizacion = new Cotizacion();

               $MyCotizacion->setIdCotizacion($Cotizacion['IdCotizacion']);
               $MyCotizacion->setIdEmpresa($Cotizacion['IdEmpresa']);
               $MyCotizacion->setEstado($Cotizacion['Estado']);
               $MyCotizacion->setMetros_Cubicos($Cotizacion['Metros_Cubicos']);
               $MyCotizacion->setValor_Metro($Cotizacion['Valor_Metro']);
               $MyCotizacion->setIva($Cotizacion['Iva']);
               $MyCotizacion->setValor_Total($Cotizacion['Valor_Total']);
               $MyCotizacion->setObservaciones($Cotizacion['Observaciones']);

               $ListaCotizacion[]=$MyCotizacion;
          }
          return $ListaCotizacion;
     }

}


?>