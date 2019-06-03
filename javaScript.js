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
  var maxMaterias = 0;
  for (let materia of datos){
    var semestre = materia['semestre'];
    if(semestres[semestre-1].childElementCount>maxMaterias){
      maxMaterias  = semestres[semestre-1].childElementCount;
    }
    /*
    if(semestre>5){

      n+=1;
      console.log("materia pifia: "+materia['semestre'],materia['nomMateria']);
    }
    */

    var clase = "materia";
    if(!materia["estadoMateria"]){
      clase = "materiaDesactivada";
    }
    semestres[semestre-1].innerHTML+=`
    <div class="${clase}" onClick="cambiarEstadoMateria(this);">
      <p id= codigo> codigo: ${materia["codMateria"]} </p>
      <h3>${materia["nomMateria"]}</h3>
      <p> creditos:  ${materia["creditos"]}</p>
    </div>`;

    /*

      */
  }
  /*
  for(let semestre of semestres){
   let nemptyDivs = maxMaterias-semestre.childElementCount;
   for(var i = 0;i<=nemptyDivs;i++){
     semestre.innerHTML+=`
     <div class="emptyMateria"></div>`;

   }

  }
  */
  console.log("max materias: "+maxMaterias);

}
function cambiarEstadoMateria(elementoHtml){
     let codigoMateria = Number( (elementoHtml.querySelectorAll("p")[0]).innerHTML.substring(8) );

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
         console.log("dasdsa");

          let datos = JSON.parse(this.responseText);
          cargarMaterias(datos);
     }
   };
   xhttp.open("GET", "mostrarMaterias.php?codMateria="+codigoMateria, true);
   xhttp.send();
}
