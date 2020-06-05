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
          <h1 align="center">Crear Cotizacion</h1>

          <form action="" method="post">

               <div class="form-row" >
                    <div class="form-group col-md-4">
                         <label for="">Empresa</label>
                         <select id="IdEmpresa"  name= "IdEmpresa" class="form-control">
                              <option value="" >Seleccione una Empresa</option>
                              <option value="1" >Empresa A</option>
                              <option value="2" >Empresa B</option>
                              <option value="3" >Empresa C</option>
                         </select>
                         
                    </div>
                    <div class="form-group col-md-4">
                         <label for="inputState">Estado</label>
                         <input type="text" class="form-control" id="Estado" name="Estado">
                    </div>
                    <div class="form-group col-md-4">
                         <label for="inputPassword4">Metros cubicos</label>
                         <input type="text" class="form-control" id="Metros_Cubicos" name="Metros_Cubicos">
                    </div>
               </div>
               <div class="form-row">
                    <div class="form-group col-md-4">
                         <label for="">Valor Metro Cubico</label>
                         <input type="text" class="form-control" id="Valor_Metro" name="Valor_Metro">
                    </div>
                    <div class="form-group col-md-4">
                         <label for="">IVA</label>
                         <input type="text" class="form-control" id="Iva" name="Iva">
                    </div>
                    <div class="form-group col-md-4">
                         <label for="inputPassword4">Valor Total</label>
                         <input type="text" class="form-control" id="Valor_Total" name="Valor_Total">
                    </div>
               </div>
               <div class="mb-3">
                    <label for="validationTextarea">Observaciones</label>
                         <textarea class="form-control " id="Observaciones" name="Observaciones" placeholder="Ingresa las observaciones" ></textarea>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>