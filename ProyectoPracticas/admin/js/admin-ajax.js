$(function(){
    $('#guardar-registro').on('submit',function(e){
        e.preventDefault();

        var datos=$(this).serializeArray();

        $.ajax({
            type:$(this).attr('method'),
            data:datos,
            url:$(this).attr('action'),
            dataType:'json',
            success:function(data){
                console.log(data);
                var resultado=data;
                if(resultado.respuesta=='éxito'){
                    Swal.fire(
                        'Correcto',
                        'Se guardó correctamente',
                        'success'
                      )
                }else{
                    Swal.fire(
                        'Error!',
                        'Hubo un error',
                        'error'
                      )
                }
            }
        })
    });
    $('#guardar-registro-archivo').on('submit',function(e){
        e.preventDefault();

        var datos=new FormData(this);

        $.ajax({
            type:$(this).attr('method'),
            data:datos,
            url:$(this).attr('action'),
            dataType:'json',
            contentType:false,
            processData:false,
            async:true,
            cache:false,
            success:function(data){
                console.log(data);
                var resultado=data;
                if(resultado.respuesta=='éxito'){
                    Swal.fire(
                        'Correcto',
                        'Se guardó correctamente',
                        'success'
                      )
                }else{
                    Swal.fire(
                        'Error!',
                        'Hubo un error',
                        'error'
                      )
                }
            }
        })
    });
    $('.borrar_registro').on('click',function(e){
        e.preventDefault();
        var id=$(this).attr('data-id');
        var tipo=$(this).attr('data-tipo');
          $.ajax({
            type:'post',
            data: {
                id:id,
                registro:'eliminar'
            },
            url:'borrar-'+tipo+'.php',
            success:function(data){
                console.log(data);
                var resultado=JSON.parse(data);
                if(resultado.respuesta=='éxito'){
                    Swal.fire(
                        'Eliminado!',
                        'Registro Eliminado.',
                        'success'
                      )
                    jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
                }else{
                    Swal.fire({
                        icon: 'Error!',
                        title: 'No se pudo eliminar',
                        text: 'Something went wrong!',
                        footer: '<a href>Why do I have this issue?</a>'
                      })
                }
                
            }
        })
            
          
                
    });
    $('#login-admin').on('submit',function(e){
        e.preventDefault();

        var datos=$(this).serializeArray();

        $.ajax({
            type:$(this).attr('method'),
            data:datos,
            url:$(this).attr('action'),
            dataType:'json',
            success:function(data){
                console.log(data);
                var resultado=data;
                if(resultado.respuesta=='exitoso'){
                    Swal.fire(
                        'Login Correcto',
                        'Bienvenid@'+resultado.usuario+' !!',
                        'success'
                      )
                      setTimeout(function(){
                        window.location.href='admin-area.php';
                      },2000);
                }else{
                    Swal.fire(
                        'Error!',
                        'Usuario o password Incorrectos',
                        'error'
                      )
                }
            
            }
        })
    });
});