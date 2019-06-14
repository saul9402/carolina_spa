// Add Your Scripts here
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
            event.stopPropagation();
          }else{
            let nombre = document.getElementById('nombre').value,
                email = document.getElementById('email').value,
                mensaje = document.getElementById('mensaje').value;

            // crear objeto
            let xhr = new XMLHttpRequest();
            // abrir la conexion
            xhr.open('POST','http://localhost/carolina_spa/inc/enviar.php', true);

            //siempre que se usa el formulariose debe agregar un header

            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            // revisar el estado
            xhr.onload = function(){
                if(xhr.status === 200){
                  let respuesta = JSON.parse( xhr.responseText );
                  console.log(respuesta);
                  //hardcode del true para ver el mensaje.
                  respuesta.respuesta = true;
                  if(respuesta.respuesta === true){
                    let div = document.createElement('div');
                    div.appendChild(document.createTextNode('Se envio correctamente'));
                    div.classList.add('alert', 'alert-success','mt-4', 'text-center');
                    document.querySelector('form').appendChild(div);
                    setTimeout(() => {
                        document.querySelector('.alert').remove();
                    }, 3000);
                  }
                }
            }
            //enviar los datos
            xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
   
