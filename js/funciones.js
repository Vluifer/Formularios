 
/*funcion que nos permite llamar los formularios dentro del iframe*/
function show(nombreArchivo){
    
    let iframe = document.getElementById('formularios');
    iframe.src=nombreArchivo;   
}

