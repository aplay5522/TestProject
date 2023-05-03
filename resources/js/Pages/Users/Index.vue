<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import JetTable from "@/Components/UsersTable.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

</script>

<template>
  <Head title="Gestion de Usuarios" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <JetSearchForm :name="name" class="mt-3"></JetSearchForm>
            <JetTable :users="users"></JetTable>
            <JetSimplePaginator :paginator="users"></JetSimplePaginator>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
import JetSimplePaginator from "@/Components/SimplePaginator.vue";
import JetSearchForm from "@/Components/SearchForm.vue";

export default {
  props: {
    users: Object,
    name: String
  },
  components: {
    JetSimplePaginator,
    JetSearchForm,
  },
  data() {
    return {};
  },
};
</script>
