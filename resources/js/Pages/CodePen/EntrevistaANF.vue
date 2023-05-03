<template>
  <div class="container mx-auto my-2">
    <form class="border container mx-auto p-10 w-full">
      <div class="grid grid-cols-2 gap-2">
        <div class="border">
          <label>Nombre: </label>
          <input class="w-full" type="text" v-model="user.nombre" />
        </div>
        <div class="border">
          <label>Apellidos: </label>
          <input class="w-full" type="text" v-model="user.apellidos" />
        </div>
        <div class="border">
          <label>Edad: </label>
          <input class="w-full" type="number" v-model="user.edad" />
        </div>
        <div class="border">
          <label>Sexo: </label>
          <select name="sexo" class="w-full" v-model="user.sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>
        <div class="border">
          <label>Correo: </label>
          <input class="w-full" type="email" v-model="user.correo" />
        </div>
        <div class="border">
          <label>Nacionalidad: </label>
          <input class="w-full" type="text" v-model="user.country_id" />
        </div>
        <div class="border flex justify-center col-span-2">
          <button
            @click="agregarUsuario()"
            type="button"
            class="border border-black rounded-lg p-2 mx-auto mt-6"
          >
            Agregar
          </button>
        </div>
      </div>
    </form>

    <div class="grid grid-cols-2 border">
      <div class="border">
        <table @submit.prevent="submit" class="table-auto w-full">
          <tr class="bg-slate-300 border-b text-left">
            <th>Nombre</th>
            <th v-if="mostrar_edad_apellidos">Apellidos</th>
            <th v-if="mostrar_edad_apellidos">Edad</th>
            <th>Sexo</th>
            <th>Correo</th>
            <th>Nacionalidad</th>
          </tr>
          <tr v-for="user in users" :key="user.id">
            <td>
              {{ user.nombre }}
            </td>
            <td v-if="mostrar_edad_apellidos">
              {{ user.apellidos }}
            </td>
            <td v-if="mostrar_edad_apellidos">
              {{ user.edad }}
            </td>
            <td>
              {{ user.sexo }}
            </td>
            <td>
              {{ user.correo }}
            </td>
            <td>
              {{ user.country_id }}
            </td>
          </tr>
        </table>
      </div>
      <div class="border w-full text-center grid-cols-1 gap-1 p-3">
        <div>
          <label>Edad Promedio: {{ edadPromedio }}</label>
        </div>
        <div>
          <label>Cantidad de hombres: {{ usuarios_masculinos }}</label>
        </div>
        <div>
          <label>Cantidad de mujeres: {{ usuarios_femeninos }}</label>
        </div>
        <div>
          <label>Persona de mayor edad: {{ personaMayor }}</label>
        </div>
        <div>
          <label>Persona de menor edad: {{ personaMenor }}</label>
        </div>
        <div>
          <label>Pantalla: {{ anchoVentana }} </label> <br />
        </div>
      </div>
    </div>
    
    <label>Nacionalidades: {{ nacionalidad_probable }}</label> <br />

    <div class="row">
      <div class="col m12">
        <table class="w-1/2 border-collapse bg-white text-left text-sm text-gray-500">
          <thead class="bg-gray-50">
            <tr>
              <th>Id Pais</th>
              <th>Probabilidad</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <tr v-for="nacionalidad in nacionalidades.country" :key="nacionalidad.id">
              <td>{{ nacionalidad.country_id }}</td>
              <td>{{ nacionalidad.probability }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
  
  <script>
export default {
  data() {
    return {
      users: [],
      //user: Object,
      user: {
        nombre: "",
        apellidos: "",
        edad: 0,
        sexo: "",
        correo: "",
        country_id: "",
      },
      anchoVentana: document.documentElement.clientWidth,
      nacionalidades: [],
      regiones: [],
    };
  },
  created() {
    window.addEventListener("resize", this.manejarezise);
  },
  destroyed() {
    window.removeEventListener("resize", this.manejarezise);
  },
  mounted() {
    window.addEventListener("resize", this.manejarezise);
  },
  methods: {
    httpGet(theUrl) {
      let xmlHttp = new XMLHttpRequest();
      xmlHttp.open("GET", theUrl, false); // false for synchronous request
      xmlHttp.send(null);
      return xmlHttp.responseText;
    },
    manejarezise() {
      this.anchoVentana = document.documentElement.clientWidth;
    },
    agregarUsuario() {
      this.users.push(this.user);
      this.user = {};
    },
    cantPorSexo: function (value) {
      return this.users.reduce(
        (sum, element) => (element.sexo == value ? sum + 1 : sum),
        0
      );
    },
    calcular_probabilidad(paises) {
      const max = paises.country.reduce((max, val) => {
        return val.probability > max.probability ? val : max;
      }, paises.country[0]);

      if (typeof max === "undefined") {
        return max;
      }

      this.user.country_id = max.country_id;
    },
  },
  computed: {
    edadPromedio: function () {
      return (
        this.users.reduce((sum, value) => sum + value.edad, 0) /
        this.users.length
      );
    },
    usuarios_femeninos: function () {
      return this.cantPorSexo("F");
    },
    usuarios_masculinos: function () {
      return this.cantPorSexo("M");
    },
    personaMayor() {
      const max = this.users.reduce((max, val) => {
        return val.edad > max.edad ? val : max;
      }, this.users[0]);
      if (typeof max === "undefined") {
        return max;
      }
      return max.nombre + " " + max.apellidos + " [edad: " + max.edad + "]";
    },
    personaMenor() {
      const min = this.users.reduce((min, val) => {
        return val.edad < min.edad ? val : min;
      }, this.users[0]);
      if (typeof min === "undefined") {
        return min;
      }
      return min.nombre + " " + min.apellidos + " [edad: " + min.edad + "]";
    },
    mostrar_edad_apellidos: function () {
      return this.anchoVentana < 600 ? false : true;
    },
    nacionalidad_probable: function () {
      fetch("https://api.nationalize.io/?name=" + this.user.nombre)
        .then((response) => response.json())
        .then((data) => {
          this.nacionalidades = data;
          this.calcular_probabilidad(data);
        });
    },
  },
};
</script>
  
  <style>
</style>