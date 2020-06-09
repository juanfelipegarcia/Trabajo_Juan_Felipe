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