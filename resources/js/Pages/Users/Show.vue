<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import JetTable from "@/Components/UsersTable.vue";
import JetForm from "@/Components/Form.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head title="Crear Usuario" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <h2
              class="
                text-2xl
                font-semibold
                leading-tight
                container
                mx-auto
                px-4
                sm:px-8
                py-8
              "
            >
              Usuario ({{user.id}})
            </h2>
            <span class="px-1 text-sm text-gray-600">Nombre</span>
            <label class="
                text-md
                block
                px-3
                py-2
                rounded-lg
                w-full
                bg-white
                border-2 border-gray-300
                placeholder-gray-600
                shadow-md
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none">
                {{user.name}}
              </label>

            <span class="px-1 text-sm text-gray-600">Email</span>
            <label class="
                text-md
                block
                px-3
                py-2
                rounded-lg
                w-full
                bg-white
                border-2 border-gray-300
                placeholder-gray-600
                shadow-md
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none">
                {{user.email}}
              </label>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
  props: ["user"],
};
</script>