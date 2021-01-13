<template>
  <div>
    <main>
      <header>
        <h1 class="title">Mi componente</h1>
      </header>
      <aside></aside>
      <article>
        <div class="card" id="main">
          <div class="card-body">
            <form action>
              <div class="form-group">
                <input type="text" placeholder="Nombre" class="form-control" />
              </div>

              <div class="form-group">
                <input type="number" placeholder="Edad" class="form-control" />
              </div>

              <div class="form-group">
                <input type="text" placeholder="Sexo" class="form-control" />
              </div>

              <div class="form-group">
                <input type="email" placeholder="Correo-e" class="form-control" />
              </div>

              <button type="submit" class="btn btn-info float-md-right">Enviar datos</button>
            </form>
          </div>
          <pre>
              {{ $data }}
          </pre>
        </div>
      </article>
      <aside>Derecha 1</aside>
      <aside>Derecha 2</aside>
      <footer>Footer</footer>
    </main>
  </div>
</template>


<script>
myObject = new Vue({
  el: "main",
  data: {
    todos: [
      { text: "Learn JavaScript" },
      { text: "Learn Vue.js" },
      { text: "Build Something Awesome" }
    ]
  }
});
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
