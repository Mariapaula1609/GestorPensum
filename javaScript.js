function enviarCodigo(){
       document.formulario1.submit()
  }
function enviarCodigoServer(codigo){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log("dasdsa");

           let datos = JSON.parse(this.responseText);
           cargarMaterias(datos);
      }
    };
    xhttp.open("GET", "mostrarMaterias.php?codigo="+codigo, true);
    xhttp.send();
}
function cargarMaterias(datos){
  let semestres =[];
  for(var i = 1;i<=10;i++){
    semestres.push(document.querySelector("#semestre"+i).querySelector("#materias"));
    semestres[i-1].innerHTML = '';
  }
  console.log(semestres);
  var n =0;
  for (let materia of datos){
    var semestre = materia['semestre'];
    /*
    if(semestre>5){

      n+=1;
      console.log("materia pifia: "+materia['semestre'],materia['nomMateria']);
    }
    */
    semestres[semestre-1].innerHTML+=`
    <div class="materia">
      <h3>${materia["nomMateria"]}</h3>
      <p> creditos:  ${materia["creditos"]}</p>
    </div>`;

    /*

      */
  }
  console.log("numero materias: "+n);

}
