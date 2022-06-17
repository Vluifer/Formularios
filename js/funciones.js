 /* function ocultarForm(){

    if(document.getElementById('primer-formulario').style.display="none"){
        document.getElementById('segundo-formulario').style.display="block"
    }
    else if(document.getElementById('segundo-formulario').style.display="block"){
        document.getElementById('primero-formulario').style.display="none"
    }
    

    let frm = document.getElementById('primer-formulario');
    
if(frm.style.displey =="block"){frm.style.displey =="none"}

else if(frm.style.displey =="none"){frm.style.displey =="block"}
} */


 
function show(nombreArchivo){
    
    
    
    let iframe = document.getElementById('formularios');
    iframe.src=nombreArchivo;

    
     
  /*   document.getElementById('primer-formulario').classList.remove("hidden");
    document.getElementById('segundo-formulario').classList.add("hidden"); */
    
}

function show2(){
    document.getElementById('primer-formulario').style.display="none";
    document.getElementById('segundo-formulario').style.display="block";
    
/* 
    document.getElementById('primer-formulario').classList.add("hidden");
    document.getElementById('segundo-formulario').classList.remove("hidden"); */
} 

