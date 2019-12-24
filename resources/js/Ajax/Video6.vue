<template>
  <div>
    <main>
      <header>
        <h1 class="title">Mi componente</h1>
      </header>
      <aside>Izquierda</aside>
      <article>
        Buscar persona:
        <input type="text" onkeyup="ajax_get_json(this.value)" />
        <div id="info"></div>
      </article>
      <aside>Derecha 1</aside>
      <aside>Derecha 2</aside>
      <footer>Footer</footer>
    </main>
  </div>
</template>

<script>
function ajax_get_json(usuarioIngresado) {
  var resultado = document.getElementById("info");
  var xmlhttp;

  if (window.XMLHttpRequest) {
    xmlhttp = XMLHttpRequest();
  } else {
    xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
  }

  if (usuarioIngresado.length === 0) {
    resultado.innerHTML = "";
  } else {
    xmlhttp.readyStatchange = function() {
      if (xmlhttp.readyState === 4 && xmlhttp.state === 200) {
        var datos = JSON.parse(xmlhttp.responseText);
        var x = encontrarPersona(datos, usuarioIngresado);
        var mensaje =
          x === true
            ? "<span class = 'encontrado'> Si fue encontrado</span>"
            : "<span class = 'no-encontrado'> No fue encontrado</span>";

        resultado.innerHTML = mensaje;
      }
    };
    xmlhttp.open("GET", url("pruebaX"), true);
    xmlhttp.send();
  }
}

function encontrarpersona(objetoJSON, usuario) {
  var arreglo = [];

  for (var i in objetoJSON) {
    var persona = objetoJSON[i];
    arreglo.push(persona.name);
  }

  return arreglo.indexOf(usuario) > -1;
}
</script>

<style>
main {
  height: 100vh;
  display: grid;
  grid-gap: 10px;
  font-family: sans-serif;

  grid-template:
                /* Filas*/
    [inicio] "header header header" 1fr
    [contenido-start] "izquierda contenido derecha1" 2fr
    "izquierda contenido derecha2" 1fr
    "footer footer footer" 1fr [fin]
    /
    /* Columnas*/
    [inicio] 1fr [contenido-start] 2fr 1fr [fin];
}

main > * {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgb(182, 182, 185);
}

header {
  grid-area: header;
}
aside:first-of-type {
  grid-area: izquierda;
}
article {
  grid-area: contenido;
}
aside:nth-of-type(2) {
  grid-area: derecha1;
}
aside:last-of-type {
  grid-area: derecha2;
}
footer {
  grid-area: footer;
}
</style>
