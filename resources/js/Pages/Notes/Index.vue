<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import JetDialogModal from "@/Components/DialogModal.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
</script>

<template>
  <Head title="Notas" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <JetDialogModal :show="modalOpen">
              <template #title>
                <div class="flex flex-row justify-between">
                  <p>Agregar Nota</p>
                  <button
                    @click="modalOpen = false"
                    class="
                      border
                      w-8
                      h-8
                      border-red-500
                      bg-red-500
                      text-white
                      rounded-md
                      hover:bg-white hover:text-red-500
                      transition
                      ease-in-out
                      duration-300
                    "
                  >
                    X
                  </button>
                </div>
              </template>
              <template #content>
                <textarea
                  v-model="newNote.text_note"
                  name="note"
                  id="note"
                  cols="30"
                  rows="10"
                  class="w-full"
                ></textarea>
              </template>
              <template #footer>
                <button
                  @click="addNote()"
                  type="submit"
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
                    w-full
                  "
                >
                  Agregar
                </button>
              </template>
            </JetDialogModal>

            <div class="flex row justify-between">
              <h1 class="text-5xl">Notas</h1>
              <button
                @click="modalOpen = true"
                class="
                  text-white
                  rounded-full
                  w-12
                  h-12
                  float-end
                  bg-miazul-100
                  hover:bg-miazul-200
                  transition
                  ease-in-out
                  duration-300
                "
              >
                +
              </button>
            </div>
            <div
              class="container mx-auto mt-3 flex flex-wrap p-2 justify-center"
            >
              <div
                v-for="note in notes"
                :key="note.id"
                class="
                  w-64
                  h-64
                  border
                  shadow-lg
                  p-3
                  bg-slate-200
                  rounded-lg
                  flex flex-col
                  justify-between
                  mr-3
                  mb-4
                "
              >
                <div class="flex justify-end">
                  <button
                    @click="deleteNote(note)"
                    class="
                      border
                      w-6
                      h-6
                      border-red-500
                      bg-red-500
                      text-white
                      rounded-md
                      hover:bg-red-200 hover:text-red-500
                      transition
                      ease-in-out
                      duration-300
                    "
                  >
                    X
                  </button>
                </div>

                <div>
                  <p class="text-center grow h-36">{{ note.text_note }}</p>
                </div>

                <div>
                  <p class="font-bold">Fecha: {{ note.date_note }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
  props: ["notes"],
  data() {
    return {
      modalOpen: false,
      newNote: {
        text_note: "",
        date_note: "",
      },
    };
  },
  methods: {
    addNote() {
      this.newNote.date_note = new Date();
      // this.notes.push({
      //   text: this.newNote.text,
      //   date: new Date(),
      // });
      Inertia.post(route("notes.store"), this.newNote);
      this.newNote = "";
    },
    getRandomColor() {},
    deleteNote($note){
        Inertia.delete(route("notes.destroy", $note ));
    },
  },
};
</script>


