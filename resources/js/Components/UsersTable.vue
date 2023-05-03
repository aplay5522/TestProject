<template>
  <div>
    <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
      <div class="py-8">
        <div>
          <h2 class="text-2xl font-semibold leading-tight">
            Lista de Usuarios
          </h2>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
          <div
            class="inline-block min-w-full shadow rounded-lg overflow-hidden"
          >

            <table class="table-auto min-w-full leading-normal">
              <thead>
                <tr>
                  <th
                    class="
                      px-5
                      py-3
                      border-b-2 border-gray-200
                      bg-gray-100
                      text-center text-xs
                      font-semibold
                      text-gray-600
                      uppercase
                      tracking-wider
                    "
                  >
                    ID
                  </th>
                  <th
                    class="
                      px-5
                      py-3
                      border-b-2 border-gray-200
                      bg-gray-100
                      text-center text-xs
                      font-semibold
                      text-gray-600
                      uppercase
                      tracking-wider
                    "
                  >
                    Nombre
                  </th>
                  <th
                    class="
                      px-5
                      py-3
                      border-b-2 border-gray-200
                      bg-gray-100
                      text-center text-xs
                      font-semibold
                      text-gray-600
                      uppercase
                      tracking-wider
                    "
                  >
                    Correo
                  </th>
                  <th
                    class="
                      px-5
                      py-3
                      border-b-2 border-gray-200
                      bg-gray-100
                      text-center text-xs
                      font-semibold
                      text-gray-600
                      uppercase
                      tracking-wider
                    "
                  >
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="user in users.data" :key="user.id">
                  <td
                    class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                  >
                    <p class="text-gray-900 whitespace-no-wrap text-center">
                      {{ user.id }}
                    </p>
                  </td>
                  <td
                    class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                  >
                    <p class="text-gray-900 whitespace-no-wrap text-center">
                      {{ user.name }}
                    </p>
                  </td>
                  <td
                    class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                  >
                    <p class="text-gray-900 whitespace-no-wrap text-center">
                      {{ user.email }}
                    </p>
                  </td>
                  <td
                    class="
                      px-5
                      py-5
                      border-b border-gray-200
                      bg-white
                      text-sm
                      flex
                      justify-center
                    "
                  >
                    <Link
                      :href="route('users.show', { user: user })"
                      class="
                        text-sm text-white
                        border border-transparent
                        hover:text-miazul-100 hover:bg-white hover:border
                        border-miazul-100
                        bg-miazul-100
                        rounded
                        px-4
                        py-2
                        transition
                        ease-in-out
                        duration-500
                        mr-1
                      "
                    >
                      Ver
                    </Link>
                    <Link
                      :href="route('users.edit', { user: user })"
                      class="
                        text-sm text-white
                        border border-transparent
                        hover:text-miazul-100 hover:bg-white hover:border
                        border-miazul-100
                        bg-miazul-100
                        rounded
                        px-4
                        py-2
                        transition
                        ease-in-out
                        duration-500
                        mr-1
                      "
                    >
                      Editar
                    </Link>
                    <button
                      @click="
                        modalOpen = true;
                        selectedUser = user;
                      "
                      class="
                        text-sm text-white
                        border border-transparent
                        hover:text-miazul-100 hover:bg-white hover:border
                        border-miazul-100
                        bg-miazul-100
                        rounded
                        px-4
                        py-2
                        transition
                        ease-in-out
                        duration-500
                        mr-1
                      "
                    >
                      Eliminar
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>

            <JetDialogModal :show="modalOpen">
              <template #title>
                <p>Eliminar Usuario</p>
              </template>
              <template #content>
                <p v-if="selectedUser">
                  Seguro que desea eliminar al usuario:
                  <strong>{{ selectedUser.email }}</strong> ?
                </p>
              </template>
              <template #footer>
                <button
                  @click="deleteUser()"
                  class="
                    text-sm text-white
                    border border-transparent
                    hover:text-red-500 hover:bg-white hover:border-red-500
                    border-bg-red-500
                    bg-red-500
                    rounded
                    px-4
                    py-2
                    transition
                    ease-in-out
                    duration-500
                    mr-1
                  "
                >
                  Eliminar
                </button>
                <button
                  @click="modalOpen = false"
                  class="
                    text-sm text-white
                    border border-transparent
                    hover:text-miazul-100 hover:bg-white hover:border
                    border-miazul-100
                    bg-miazul-100
                    rounded
                    px-4
                    py-2
                    transition
                    ease-in-out
                    duration-500
                    mr-1
                  "
                >
                  Cerrar
                </button>
              </template>
            </JetDialogModal>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";
import JetDialogModal from "@/Components/DialogModal.vue";


export default {
  props: ["users"],
  components: {
    Link,
    JetDialogModal,
  },
  data() {
    return {
      modalOpen: false,
      selectedUser: Object,
    };
  },
  methods: {
    deleteUser() {
      // if (!confirm("Seguro que desea eliminar al usuario " + data.name + " ?"))
      //   return;

      Inertia.delete(route("users.destroy", { user: this.selectedUser }));

      this.modalOpen = false;
    },
  },
};
</script>