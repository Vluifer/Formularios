
/* validamos que el formulario no se envie si alguno de sus campos es requerido */

function vacio(){

   let nombre = document.getElementById('nombref1');
   if(nombre.value == null || nombre.value =='' ){
     alert("campo rerquerido");
   }
}

/* validamos que el formulario no se envie si alguno de sus campos es requerido */

function send(form){

      let codigo = document.getElementById('codigo');
      let clave = document.getElementById('clave');
      let correo = document.getElementById('correo');
      let telefono = document.getElementById('telefono');   


   if(form.codigo.value == null || form.codigo.value ==''){
      alert("campo codigo es requerido");
   } else if(form.clave.value == null || form.clave.value ==''){
      alert("campo  clave es requerido");
   } else if(form.correo.value == null || form.correo.value ==''){
      alert("campo correo es requerido");
   } else if(form.telefono.value == null || form.telefono.value ==''){
      alert("campo telefono es requerido");
   } 
   
   form.submit();
}

