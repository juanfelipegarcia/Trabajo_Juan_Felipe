$(document).ready(function(){

     $(".solo_numeros").on("keyup",function(){
          this.value = this.value.replace(/[^0-9]/g,'');
     });


});

function valor_Total()
{
     var cantidad = document.getElementById('Metros_Cubicos').value;
     var valor = document.getElementById('Valor_Metro').value;

     
     document.getElementById('Iva').value=(cantidad*valor)*(0.19);
     document.getElementById('Valor_Total').value=(cantidad*valor)*(1.19);
     

}


$(document).ready(function(){
     $("#Crear").click(function(){

          let validado = 0;

                    if($("#IdEmpresa").val().length == 0 )
                    {
                         $("#validacion_empresa").text("*");
                         $("#validacion_empresa2").text("Debe ingresar la Empresa");
                    }else
                    {
                         $("#validacion_empresa").text("");
                         $("#validacion_empresa2").text("");
                         validado++;
                    }

                    if($("#Estado").val().length == 0 )
                    {
                         $("#validacion_Estado").text("*");
                         $("#validacion_Estado2").text("Debe ingresar la Clave");
                    }else
                    {
                         $("#validacion_Estado").text("");
                         $("#validacion_Estado2").text("");
                         validado++;
                    }

                    if (validado == 2) {
                         
                    

                    }
                    else {
                         alert("Campos pendientes por validar");
                    }



     });
});