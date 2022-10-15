function confirmacion(){
    var confirmacion = confirm("¿Está seguro que desea eliminar el registro?")
    if(confirmacion){
        return true
    }
    else{
        alert('La eliminación se ha cancelado')
        return false
    }
}
