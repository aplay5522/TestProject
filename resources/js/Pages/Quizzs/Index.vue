<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import JetQuizzCard from "@/Components/QuizzCard.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { ref, watch } from "vue";
import q from "./data/quizzes.json"

const quizzes = ref(q)
const search = ref("")

watch(search, () => {
  quizzes.value = q.filter(quiz => quiz.name.toLowerCase().includes(search.value.toLowerCase()))
})

</script>

<template>
  <Head title="Quizzs" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-5xl">Quizzs</h1>
            <div class="ml-6 w-1/2 mt-5">
              <form method="GET" @submit.prevent="submit">
                <input
                  placeholder="Buscar por nombre ..."
                  v-model.trim="search"
                  type="text"
                  class="text-md px-3 py-2 mr-2 rounded-lg w-2/3 bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                />
              </form>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-5">
              <JetQuizzCard v-for="quizz in quizzes" :key=quizz.id :quizz="quizz"></JetQuizzCard>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
