
/* validamos que el formulario no se envie si alguno de sus campos es requerido */

function vacio(){

   let nombre = document.getElementById('nombref1');
   if(nombre.value === null || nombre.value ==='' ){
     alert("campo rerquerido");
     nombre.onfocus();
   }
}

/* validamos que el formulario no se envie si alguno de sus campos es requerido */

   function form(){

      let codigo = document.getElementById('codigo');
      let clave = document.getElementById('clave');
      let correo = document.getElementById('correo');
      let telefono = document.getElementById('telefono');   

   if(codigo.value == null || codigo.value ==''){
      alert("campo requerido")
      codigo.onfocus();
      return true;
   }  if(clave.value == null || clave.value ==''){
      alert("campo requerido");
      clave.onfocus();
      return true;
   }if(correo.value == null || correo.value ==''){
      alert("campo requerido");
      correo.onfocus();
      return true;
   }if(telefono.value == null || telefono.value ==''){
      alert("campo requerido");
      telefono.onfocus();
      return true;
   } 
   
}

