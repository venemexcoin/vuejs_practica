<template>
  <div>
    <main>
      <header>
        <h1 class="title">Mi componente</h1>
      </header>
      <aside>Izquierda</aside>
      <article>
        <form v-on:submit.prevent="createIdea">
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input
                type="text"
                class="form-control"
                v-model="newIdea"
                maxlength="256"
                id="inlineFormInputGroup"
                placeholder="¿En que pensando?"
              />
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary float-right">Agregar</button>
              </span>
            </div>
          </div>
        </form>
      </article>
      <aside>
        <ul class="list-unstyled">
          <li v-for="idea in ideas">
            <p>
              <small class="text-muted">
                <em>{{since(idea.created_at)}}</em>
              </small>
              {{idea.description}}
            </p>
          </li>
        </ul>
      </aside>
      <aside>Derecha 2</aside>
      <footer>Footer</footer>
    </main>
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";
import toastr from "toastr";

moment.lang("es");

export default {
  data() {
    return {
      ideas: [],
      newIdea: ""
    };
  },
  created: function() {
    this.getIdeas();
  },
  methods: {
    since: function(d) {
      return moment(d).fromNow();
    },
    getIdeas: function() {
      var urlIdeas = "mis-ideas";
      axios.get(urlIdeas).then(response => {
        this.ideas = response.data;
      });
    },
    createIdea: function() {
      var url = "guardar-idea";
      axios
        .post(url, {
          description: this.newIdea
        })
        .then(response => {
          this.getIdeas();
          this.newIdea = "";
          toastr.success("Nueva idea registrada");
        })
        .catch(error => {
          toastr.error("Error");
        });
    }
  }
};
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
  background-color: white;
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

.title {
  text-align: center;
  font-size: 30px;
}
</style>
