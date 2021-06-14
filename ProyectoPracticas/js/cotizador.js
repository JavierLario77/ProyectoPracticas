(function() {
    "use strict";
    //var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {

      // Campos Datos Usuario
      var nombre =document.getElementById('nombre');
      var apellido =document.getElementById('apellido');
      var email =document.getElementById('email');

      // Campos Pases
      //var pase_dia =document.getElementById('pase_dia');
      //var pase_dosdias =document.getElementById('pase_dosdias');
      var pase_completo1 =document.getElementById('300');
      var pase_completo2 =document.getElementById('301');
      var pase_completo3 =document.getElementById('302');
      var pase_completo4 =document.getElementById('303');
      var pase_completo5 =document.getElementById('304');
      var precioPase1=document.getElementById('300P');
      var precioPase2=document.getElementById('301P');
      var precioPase3=document.getElementById('302P');
      var precioPase4=document.getElementById('303P');
      var precioPase5=document.getElementById('304P');
      var nombrePase1=document.getElementById('300N');
      var nombrePase2=document.getElementById('301N');
      var nombrePase3=document.getElementById('302N');
      var nombrePase4=document.getElementById('303N');
      var nombrePase5=document.getElementById('304N');
      var stock1=document.getElementById('300S');
      var stock2=document.getElementById('301S');
      var stock3=document.getElementById('302S');
      var stock4=document.getElementById('303S');
      var stock5=document.getElementById('304S');

      // Botones y Divs
      var calcular=document.getElementById('calcular');
      var errorDiv=document.getElementById('error');
      var errorDiv2=document.getElementById('error2');
      var errorDiv3=document.getElementById('error3');
      var botonRegistro=document.getElementById('btnRegistro');
      var lista_productos=document.getElementById('lista-productos');
      var suma = document.getElementById('suma-total');

      // extras
      //var camisas=document.getElementById('camisa_evento');
      //var etiquetas=document.getElementById('etiquetas');

      //botonRegistro.disabled = true;

      if(document.getElementById('calcular')){
      calcular.addEventListener('click', calcularMontos);
      //pase_dia.addEventListener('blur',mostrarDias);
      //pase_dosdias.addEventListener('blur',mostrarDias);
      //pase_completo.addEventListener('blur',mostrarDias);

      function validarCampos(){
        if(this.value==''){
          errorDiv.style.display='block';
          errorDiv.innerHTML="Este campo es obligatorio";
          this.style.border='1px solid red';
          errorDiv.style.border='1px solid red';
        } else {
          errorDiv.style.display='none';
          this.style.border='1px solid #cccccc';
        }
      }

      function validarMail(){
        if(this.value.indexOf("@")>-1){
          errorDiv.style.display='none';
          this.style.border='1px solid #cccccc';
        } else {
          errorDiv.style.display='block';
          errorDiv.innerHTML="Debe tener una @";
          this.style.border='1px solid red';
          errorDiv.style.border='1px solid red';
        }
      }
      
      var stockF1=parseInt(stock1.value,10)||0;
      var stockF2=parseInt(stock2.value,10)||0;
      var stockF3=parseInt(stock3.value,10)||0;
      var stockF4=parseInt(stock4.value,10)||0;
      var stockF5=parseInt(stock5.value,10)||0;

      function validarPases1(){
        if(pase_completo1.value > stockF1){
          errorDiv2.style.display="block";
          errorDiv2.innerHTML="La cantidad deseada no debe ser mayor que el stock disponible, ajusta la cantidad deseada a la cantidad disponible y después haz click en la ventana del navegador para que el sistema procese los datos.";
          this.style.border='1px solid red';
          errorDiv2.style.border='1px solid red';
          calcular.disabled=true;
          //botonRegistro.disabled=true;
        }else{
          errorDiv2.style.display='none';
          this.style.border='1px solid #cccccc';
          calcular.disabled=false;
        };
      };
      function validarPases2(){
        if(pase_completo2.value > stockF2){
          errorDiv2.style.display="block";
          errorDiv2.innerHTML="La cantidad deseada no debe ser mayor que el stock disponible, ajusta la cantidad deseada a la cantidad disponible y después haz click en la ventana del navegador para que el sistema procese los datos.";
          this.style.border='1px solid red';
          errorDiv2.style.border='1px solid red';
          calcular.disabled=true;
          //botonRegistro.disabled=true;
        }else{
          errorDiv2.style.display='none';
          this.style.border='1px solid #cccccc';
          calcular.disabled=false;
        };
      };
      function validarPases3(){
        if(pase_completo3.value > stockF3){
          errorDiv2.style.display="block";
          errorDiv2.innerHTML="La cantidad deseada no debe ser mayor que el stock disponible, ajusta la cantidad deseada a la cantidad disponible y después haz click en la ventana del navegador para que el sistema procese los datos.";
          this.style.border='1px solid red';
          errorDiv2.style.border='1px solid red';
          calcular.disabled=true;
          //botonRegistro.disabled=true;
        }else{
          errorDiv2.style.display='none';
          this.style.border='1px solid #cccccc';
          calcular.disabled=false;
        };
      };
      function validarPases31(){
        if(pase_completo4.value > stockF4){
          errorDiv2.style.display="block";
          errorDiv2.innerHTML="La cantidad deseada no debe ser mayor que el stock disponible, ajusta la cantidad deseada a la cantidad disponible y después haz click en la ventana del navegador para que el sistema procese los datos.";
          this.style.border='1px solid red';
          errorDiv2.style.border='1px solid red';
          calcular.disabled=true;
          //botonRegistro.disabled=true;
        }else{
          errorDiv2.style.display='none';
          this.style.border='1px solid #cccccc';
          calcular.disabled=false;
        };
      };
      function validarPases32(){
        if(pase_completo5.value > stockF5){
          errorDiv2.style.display="block";
          errorDiv2.innerHTML="La cantidad deseada no debe ser mayor que el stock disponible, ajusta la cantidad deseada a la cantidad disponible y después haz click en la ventana del navegador para que el sistema procese los datos.";
          this.style.border='1px solid red';
          errorDiv2.style.border='1px solid red';
          calcular.disabled=true;
          //botonRegistro.disabled=true;
        }else{
          errorDiv2.style.display='none';
          this.style.border='1px solid #cccccc';
          calcular.disabled=false;
        };
      };

      function validarPases4(){
        if(pase_completo1.value == 0 && pase_completo2.value == 0 && pase_completo3.value == 0 && pase_completo4.value == 0 && pase_completo5.value == 0){
          errorDiv3.style.display="block";
          errorDiv3.innerHTML="Si dejas la cantidad de todos los artículos a cero se deshabilita el botón de calcular, para volver a habilitar el botón de calcular tienes que introducir la cantidad del artículo deseada y luego hacer click en la ventana del navegador para que el sistema procese los datos.";
          errorDiv3.style.border='1px solid red';
          //botonRegistro.disabled=true;
          calcular.disabled=true;
      }else if(pase_completo1.value > 0 || pase_completo2.value > 0 || pase_completo3.value > 0 || pase_completo4.value > 0 || pase_completo5.value > 0){
        errorDiv3.style.display='none';
      }
    };
    

      nombre.addEventListener('blur',validarCampos);
      apellido.addEventListener('blur',validarCampos);
      email.addEventListener('blur',validarCampos);
      email.addEventListener('blur',validarMail);
      pase_completo1.addEventListener('blur',validarPases1);
      pase_completo2.addEventListener('blur',validarPases2);
      pase_completo3.addEventListener('blur',validarPases3);
      pase_completo4.addEventListener('blur',validarPases31);
      pase_completo5.addEventListener('blur',validarPases32);
      pase_completo1.addEventListener('blur',validarPases4);
      pase_completo2.addEventListener('blur',validarPases4);
      pase_completo3.addEventListener('blur',validarPases4);
      pase_completo4.addEventListener('blur',validarPases4);
      pase_completo5.addEventListener('blur',validarPases4);


      function calcularMontos(event) {
        event.preventDefault();
        if(pase_completo1.value >= 0){
            var boletoCompleto1=parseInt(pase_completo1.value,10)||0,
                boletoCompleto2=parseInt(pase_completo2.value,10)||0,
                boletoCompleto3=parseInt(pase_completo3.value,10)||0,
                boletoCompleto4=parseInt(pase_completo4.value,10)||0,
                boletoCompleto5=parseInt(pase_completo5.value,10)||0,
                precio1=parseInt(precioPase1.value),
                precio2=parseInt(precioPase2.value),
                precio3=parseInt(precioPase3.value),
                precio4=parseInt(precioPase4.value),
                precio5=parseInt(precioPase5.value);

          //console.log(precio3);

        var cantidadProductos=[];
        var PrecioProductos=[];

          if(pase_completo1.value >= 0){
              cantidadProductos.push(boletoCompleto1);
              cantidadProductos.push(boletoCompleto2);
              cantidadProductos.push(boletoCompleto3);
              cantidadProductos.push(boletoCompleto4);
              cantidadProductos.push(boletoCompleto5);
          };
          if(pase_completo1.value >= 0){
            PrecioProductos.push(precio1);
            PrecioProductos.push(precio2);
            PrecioProductos.push(precio3);
            PrecioProductos.push(precio4);
            PrecioProductos.push(precio5);
        };

        //console.log(PrecioProductos);
        
        var totalPagar= (cantidadProductos[0]*PrecioProductos[0])+(cantidadProductos[1]*PrecioProductos[1])+(cantidadProductos[2]*PrecioProductos[2])+(cantidadProductos[3]*PrecioProductos[3])+(cantidadProductos[4]*PrecioProductos[4]);
        

        console.log(totalPagar);

        var listadoProductos=[];

        if(boletoCompleto1>=1){
            listadoProductos.push(boletoCompleto1+nombrePase1.value);
        }
        if(boletoCompleto2>=1){
            listadoProductos.push(boletoCompleto2+nombrePase2.value);
        }
        if(boletoCompleto3>=1){
            listadoProductos.push(boletoCompleto3+nombrePase3.value);
        }
        if(boletoCompleto4>=1){
          listadoProductos.push(boletoCompleto4+nombrePase4.value);
        }
        if(boletoCompleto5>=1){
          listadoProductos.push(boletoCompleto5+nombrePase5.value);
        }
        
          
            

          /*var totalPagar=(boletosDia*30)+(boletos2Dias*45)+(boletoCompleto*50)+((cantCamisas*10)*.93)+(cantEtiquetas*2);

          var listadoProductos=[];

          if(boletosDia>=1){
            listadoProductos.push(boletosDia+'Pases por dia');
          }
          if(boletos2Dias>=1){
            listadoProductos.push(boletos2Dias+'Pases por dos dias');
          }
          if(boletoCompleto>=1){
            listadoProductos.push(boletoCompleto+'Pases completos');
          }
          if(cantCamisas>=1){
            listadoProductos.push(cantCamisas+'Camisas');
          }
          if(cantEtiquetas>=1){
            listadoProductos.push(cantEtiquetas+'Etiquetas');
          }*/

          lista_productos.style.display="block";
          lista_productos.innerHTML='';
          for(var i=0;i<listadoProductos.length;i++){
            lista_productos.innerHTML+=listadoProductos[i]+'<br/>';
          }
          suma.innerHTML="€ "+ totalPagar.toFixed(2);
          if(pase_completo1.value > 0 || pase_completo2.value > 0 || pase_completo3.value > 0 || pase_completo4.value > 0 || pase_completo5.value > 0) {
            //botonRegistro.disabled = false;
          }
          document.getElementById('total_pedido').value=totalPagar;
        }
      }
      /*function mostrarDias(){
        var boletosDia=parseInt(pase_dia.value,10)||0,
              boletos2Dias=parseInt(pase_dosdias.value,10)||0,
              boletoCompleto=parseInt(pase_completo.value,10)||0;

              var diasElegidos=[];

              if(boletosDia>0){
                diasElegidos.push('viernes');
              }
              if(boletos2Dias>0){
                diasElegidos.push('viernes','sabado');
              }
              if(boletoCompleto>0){
                diasElegidos.push('viernes','sabado','domingo');
              }
              for(var i=0; i<diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display='block';
              }
      }*/
      }
    }); // DOM CONTENT LOADED
})();