<?php


$Empresa = new Empresa();
$CrudEmpresa =new CrudEmpresa();

if (isset($_POST["Crear"])) {

     $Empresa->setIdEmpresa(null);
     $Empresa->setEmpresa($_POST["Empresa"]);
     $Empresa->setCiudad($_POST["Ciudad"]);
     $Empresa->setDireccion($_POST["Direccion"]);
   

     $CrudEmpresa::InsertarEmpresa($Empresa);
}
elseif(isset($_POST["Editar"])) {

     $Empresa->setIdEmpresa(null);
     $Empresa->setEmpresa($_POST["Empresa"]);
     $Empresa->setCiudad($_POST["Ciudad"]);
     $Empresa->setDireccion($_POST["Direccion"]);

     $CrudEmpresa::ModificarEmpresa($Empresa);

}
elseif ($_GET['Accion']== "EliminarEmpresa") {
     
     $CrudEmpresa::EliminarEmpresa($_GET["IdEmpresa"]);
}



?>