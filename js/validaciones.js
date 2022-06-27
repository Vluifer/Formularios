


function vacio(){

   let nombre = document.getElementById('nombref1');
   if(nombre.value === null || nombre.value ==='' ){
      /* document.getElementById('titulo').innerHTML ="* campo obligatorio"; */
     alert("campo rerquerido");
     nombre.onfocus();
   }
}



   function form(){
   
      let codigo = document.getElementById('codigo');
      let clave = document.getElementById('clave');
      let correo = document.getElementById('correo');
      let telefono = document.getElementById('telefono');   

   if(codigo.value === null || codigo.value ===''){
      alert("campo rerquerido");
      codigo.onfocus();
   }  if(clave.value === null || clave.value ===''){
      alert("campo rerquerido");
      clave.onfocus();
   }if(correo.value === null || correo.value ===''){
      alert("campo rerquerido");
      correo.onfocus();
   }if(telefono.value === null || telefono.value ===''){
      alert("campo rerquerido");
      telefono.onfocus();
   }
   
}
