function validarAlo(){
    if(!document.getElementById("habitantes").isInteger()){
        alert("Los habitantes deben ser un numro entero")
        return false
    }

    else if(!document.getElementById("mCuad").isInteger()){
        alert("Los habitantes debe ser un numro entero")
        return false
    }
    else if(!document.getElementById("precio").isInteger()){
        alert("El precio debe ser un numro entero")
        return false
    }
    return true
}