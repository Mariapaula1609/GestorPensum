function enviarCodigo(){
       document.formulario1.submit()
  }
function enviarCodigoServer(codigo){
  alert("mostrarMaterias.php? codigo="+codigo);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
           alert(this.responseText);
      }
    };
    xhttp.open("GET", "mostrarMaterias.php?codigo="+codigo, false);
    xhttp.send();
}
