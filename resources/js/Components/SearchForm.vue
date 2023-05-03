<template>
  <div class="container mx-auto px-4 sm:px-8 grid grid-cols-2">
    <div>
      <form method="GET" @submit.prevent="submit">
        <input
          placeholder="Buscar por nombre o email ..."
          type="text"
          v-model="form.name"
          class="
            text-md
            px-3
            py-2
            mr-2
            rounded-lg
            w-2/3
            bg-white
            border-2 border-gray-300
            placeholder-gray-600
            shadow-md
            focus:placeholder-gray-500
            focus:bg-white
            focus:border-gray-600
            focus:outline-none
          "
        />
        <button
          type="submit"
          class="
            mt-3
            text-lg
            font-semibold
            bg-miazul-100
            text-white
            rounded-lg
            px-3
            py-2
            shadow-xl
            hover:text-white hover:bg-miazul-400
            transition
            ease-in-out
            duration-500
          "
        >
          Buscar
        </button>
      </form>
    </div>
  
    <div class="flex justify-end items-center mr-10">
      <Link :href="route('users.create')">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="
            w-12
            h-12
            rounded-full
            bg-miazul-100
            hover:bg-miazul-200
            transition
            ease-in-out
            duration-300
          "
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 4.5v15m7.5-7.5h-15"
          />
        </svg>
      </Link>
    </div>
  </div>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia';

export default {
  props: ["name"],
  components: {
    Link,
  },
  data() {
    return {
      form:{
        name: this.name
      },
    };
  },
  methods: {
    submit(){
      Inertia.get(route('users.index', this.form));
    }
  },
};
</script>