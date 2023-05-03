<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import q from "./data/quizzes.json";
</script>

<template>
  <Head :title="this.actualQuizz.name + ' - Quizz'" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
          <div class="p-6 bg-white">
            <p class="text-5xl mb-5">{{ actualQuizz.name }}</p>
            <p class="text-2xl mb-5">
              Pregunta {{ actualQuestion + 1 }} /
              {{ actualQuizz.questions.length }}
            </p>
            <div
              class="overflow-hidden h-4 mb-4 text-xs flex rounded w-1/4 bg-blue-200"
            >
              <div
                :style="'width:' + progressBar + '%'"
                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-miazul-100"
              ></div>
            </div>

            <p class="text-5xl" v-if="!finishQuizz">
              {{ actualQuizz.questions[actualQuestion].text }}
            </p>

            <!-- ========== Start Selection Section ========== -->
            <div class="grid grid-cols-1 gap-3 mt-8" v-if="!finishQuizz">
              <button
                type="button"
                class="inline-flex border"
                @click="
                  next(actualQuizz.questions[actualQuestion].options[0].text)
                "
              >
                <div
                  class="w-1/12 flex justify-center bg-blue-400 rounded-l text-4xl"
                >
                  {{ actualQuizz.questions[actualQuestion].options[0].label }}
                </div>
                <div class="w-11/12 grid content-center bg-blue-100">
                  <p class="h-full text-2xl pl-4 flex justify-start">
                    {{ actualQuizz.questions[actualQuestion].options[0].text }}
                  </p>
                </div>
              </button>

              <button
                type="button"
                class="inline-flex border"
                @click="
                  next(actualQuizz.questions[actualQuestion].options[1].text)
                "
              >
                <div
                  class="w-1/12 flex justify-center bg-blue-400 rounded-l text-4xl"
                >
                  {{ actualQuizz.questions[actualQuestion].options[1].label }}
                </div>
                <div class="w-11/12 grid content-center bg-blue-100">
                  <p class="h-full text-2xl pl-4 flex justify-start">
                    {{ actualQuizz.questions[actualQuestion].options[1].text }}
                  </p>
                </div>
              </button>

              <button
                type="button"
                class="inline-flex border"
                @click="
                  next(actualQuizz.questions[actualQuestion].options[2].text)
                "
              >
                <div
                  class="w-1/12 flex justify-center bg-blue-400 rounded-l text-4xl"
                >
                  {{ actualQuizz.questions[actualQuestion].options[2].label }}
                </div>
                <div class="w-11/12 grid content-center bg-blue-100">
                  <p class="h-full text-2xl pl-4 flex justify-start">
                    {{ actualQuizz.questions[actualQuestion].options[2].text }}
                  </p>
                </div>
              </button>

              <button
                type="button"
                class="inline-flex border"
                @click="
                  next(actualQuizz.questions[actualQuestion].options[3].text)
                "
              >
                <div
                  class="w-1/12 flex justify-center bg-blue-400 rounded-l text-4xl"
                >
                  {{ actualQuizz.questions[actualQuestion].options[3].label }}
                </div>
                <div class="w-11/12 grid content-center bg-blue-100">
                  <p class="h-full text-2xl pl-4 flex justify-start">
                    {{ actualQuizz.questions[actualQuestion].options[3].text }}
                  </p>
                </div>
              </button>
            </div>

            <div v-else class="mt-8 grid grid-cols-1 gap-2">
              <div class="flex justify-center">
                <p class="text-2xl">Tus Resultados ...</p>
              </div>
              <div class="flex justify-center">
                <p class="text-5xl">
                  {{ cantQuestionCorrects }} /
                  {{ actualQuizz.questions.length }}
                </p>
              </div>
              <div class="flex justify-center">
                <Link
                  :href="route('quizzs.index')"
                  type="button"
                  class="mt-3 text-lg font-semibold bg-miazul-100 text-white rounded-lg px-3 py-2 shadow-xl hover:text-white hover:bg-miazul-400 transition ease-in-out duration-500"
                >
                  Finalizar
                </Link>
              </div>
            </div>
            <!-- ========== End Selection Section ========== -->
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
  props: ["quizz"],
  data() {
    return {
      actualQuestion: 0,
      actualQuizz: this.q[this.quizz - 1],
      progressBar: 0,
      correct: false,
      cantQuestionCorrects: 0,
      finishQuizz: false,
    };
  },
  methods: {
    next(selection) {

      if (this.actualQuizz.id == 1) {
        if (this.actualQuestion == 0 && selection == 16) {
          this.correct = true;
        }
  
        if (this.actualQuestion == 1 && selection == 3) {
          this.correct = true;
        }
      }

      if (this.actualQuizz.id == 2) {
        if (this.actualQuestion == 0 && selection == "de") {
          this.correct = true;
        }
      }

      if (this.actualQuizz.id == 3) {
        if (this.actualQuestion == 0 && selection == "1914") {
          this.correct = true;
        }
      }

      if (this.actualQuizz.id == 4) {
        if (this.actualQuestion == 0 && selection == "Mamifero") {
          this.correct = true;
        }
  
        if (this.actualQuestion == 1 && selection == 78) {
          this.correct = true;
        }
      }

      if (this.actualQuestion < this.actualQuizz.questions.length) {
        if (this.correct) {
          console.log("Correcto");
          this.cantQuestionCorrects++;
        } else {
          console.log("Incorrecto");
        }
        if (this.actualQuestion < this.actualQuizz.questions.length - 1) {
          this.correct = false;
          this.actualQuestion++;
          this.progressBar =
            (this.actualQuestion / this.actualQuizz.questions.length) * 100;
        } else {
          this.finishQuizz = true;
          this.progressBar = 100;
        }
      } else {
        console.log(
          "Cuestionario terminado con " +
            this.cantQuestionCorrects +
            " respuestas correctas."
        );
      }
    },
  },
};
</script>
