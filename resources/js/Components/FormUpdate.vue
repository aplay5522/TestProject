<script setup>
import JetInputError from "@/Components/InputError.vue";
</script>

<template>
  <div>
    <!-- component -->
    <div class="container max-w-full mx-auto px-6">
      <div class="max-w-sm mx-auto px-6">
        <div class="relative flex flex-wrap">
          <div class="w-full relative">
            <div class="md:mt-6">
              <div class="text-center font-semibold text-black">
                Lorem ipsum dolor
              </div>
              <div class="text-center font-base text-black">
                Sed ut perspiciatis unde?
              </div>
              <form @submit.prevent="submit" class="mt-8">
                <div class="mx-auto max-w-lg">
                  <div class="py-1">
                    <span class="px-1 text-sm text-gray-600">Nombre</span>
                    <input
                      placeholder=""
                      type="text"
                      v-model="form.name"
                      class="
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
                        focus:outline-none
                      "
                    />
                  </div>
                  <div class="py-1">
                    <span class="px-1 text-sm text-gray-600">Correo</span>
                    <input
                      placeholder=""
                      type="email"
                      v-model="form.email"
                      class="
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
                        focus:outline-none
                      "
                    />
                  </div>
                  <div class="py-1">
                    <span class="px-1 text-sm text-gray-600">Contrasenna</span>
                    <input
                      placeholder=""
                      type="password"
                      v-model="form.password"
                      class="
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
                        focus:outline-none
                      "
                    />
                  </div>
                  <div
                    v-if="errors.name"
                    class="flex justify-start mt-3 ml-4 p-1"
                  >
                    <ul>
                      <li class="flex items-center py-1">
                        <div
                          class="
                            rounded-full
                            p-1
                            fill-current
                            bg-green-200
                            text-green-700
                            bg-red-200
                            text-red-700
                          "
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"
                            />
                          </svg>
                        </div>
                        <span
                          class="
                            font-medium
                            text-sm
                            ml-3
                            text-red-700 text-green-700
                          "
                          >{{ errors.name }}</span
                        >
                      </li>
                    </ul>
                  </div>
                  <div
                    v-if="errors.email"
                    class="flex justify-start mt-3 ml-4 p-1"
                  >
                    <ul>
                      <li class="flex items-center py-1">
                        <div
                          class="
                            rounded-full
                            p-1
                            fill-current
                            bg-green-200
                            text-green-700
                            bg-red-200
                            text-red-700
                          "
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"
                            />
                          </svg>
                        </div>
                        <span
                          class="
                            font-medium
                            text-sm
                            ml-3
                            text-red-700 text-green-700
                          "
                          >{{ errors.email }}</span
                        >
                      </li>
                    </ul>
                  </div>
                  <div
                    v-if="errors.password"
                    class="flex justify-start mt-3 ml-4 p-1"
                  >
                    <ul>
                      <li class="flex items-center py-1">
                        <div
                          class="
                            rounded-full
                            p-1
                            fill-current
                            bg-green-200
                            text-green-700
                            bg-red-200
                            text-red-700
                          "
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"
                            />
                          </svg>
                        </div>

                        <span
                          class="
                            font-medium
                            text-sm
                            ml-3
                            text-red-700 text-green-700
                          "
                          >{{ errors.password }}</span
                        >
                      </li>
                    </ul>
                  </div>
                  <!-- <JetInputError v-if="errors.password" :message="errors.password"/> -->
                  <button
                    type="submit"
                    class="
                      mt-3
                      text-lg
                      font-semibold
                      bg-miazul-100
                      w-full
                      text-white
                      rounded-lg
                      px-6
                      py-3
                      block
                      shadow-xl
                      hover:text-white hover:bg-miazul-400
                      transition
                      ease-in-out
                      duration-500
                    "
                  >
                    Guardar
                  </button>
                </div>
              </form>

              <!-- <div
                class="
                  text-sm
                  font-semibold
                  block
                  sm:hidden
                  py-6
                  flex
                  justify-center
                "
              >
                <a
                  href="#"
                  class="
                    text-black
                    font-normal
                    border-b-2 border-gray-200
                    hover:border-teal-500
                  "
                  >You're already member?
                  <span class="text-black font-semibold"> Login </span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
  props: ["user","errors"],
  data() {
    return {
      form: {
        name: this.user.name,
        email: this.user.email,
        password: ""
      },
    };
  },
  methods: {
    submit() {
      Inertia.put(route("users.update", {'user': this.user }), this.form);
      this.form = '';
    },
  },
};
</script>