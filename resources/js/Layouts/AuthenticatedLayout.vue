<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <nav
        class="bg-white border-b bg-gradient-to-r from-miazul-400 to-miazul-100"
      >
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <!-- Logo -->
              <div class="shrink-0 flex items-center">
                <Link :href="route('dashboard')">
                  <ApplicationLogo class="block h-9 w-auto" />
                </Link>
              </div>

              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <NavLink
                  :href="route('dashboard')"
                  :active="route().current('dashboard')"
                >
                  Dashboard
                </NavLink>
                <NavLink
                  :href="route('portfolio')"
                  :active="route().current('portfolio')"
                >
                  Portafolio
                </NavLink>
                <NavLink
                  :href="route('users.index')"
                  :active="route().current('users.index')"
                >
                  Gestionar Usuarios
                </NavLink>
                <NavLink
                  :href="route('notes.index')"
                  :active="route().current('notes.index')"
                >
                  Notas
                </NavLink>

                <NavLink
                  :href="route('quizzs.index')"
                  :active="route().current('quizzs.index')"
                >
                  Quizzs
                </NavLink>
              </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
              <!-- Settings Dropdown -->
              <div class="ml-3 relative">
                <Dropdown align="right" width="48">
                  <template #trigger>
                    <span class="inline-flex rounded-md">
                      <button
                        type="button"
                        class="
                          inline-flex
                          items-center
                          px-3
                          py-2
                          border border-transparent
                          text-sm
                          leading-4
                          font-medium
                          rounded-md
                          text-white
                          bg-miazul-300
                          hover:text-slate-400
                          focus:outline-none
                          transition
                          ease-in-out
                          duration-150
                        "
                      >
                        {{ $page.props.auth.user.name }}

                        <svg
                          class="ml-2 -mr-0.5 h-4 w-4"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                    </span>
                  </template>

                  <template #content>
                    <DropdownLink
                      :href="route('logout')"
                      method="post"
                      as="button"
                    >
                      Log Out
                    </DropdownLink>
                  </template>
                </Dropdown>
              </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
              <button
                @click="showingNavigationDropdown = !showingNavigationDropdown"
                class="
                  inline-flex
                  items-center
                  justify-center
                  p-2
                  rounded-md
                  text-white
                  hover:text-miazul-300 hover:bg-gray-100
                  focus:outline-none focus:bg-gray-100 focus:text-miazul-300
                  transition
                  duration-150
                  ease-in-out
                "
              >
                <svg
                  class="h-6 w-6"
                  stroke="currentColor"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    :class="{
                      hidden: showingNavigationDropdown,
                      'inline-flex': !showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                  <path
                    :class="{
                      hidden: !showingNavigationDropdown,
                      'inline-flex': showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
          :class="{
            block: showingNavigationDropdown,
            hidden: !showingNavigationDropdown,
          }"
          class="sm:hidden"
        >
          <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink
              :href="route('dashboard')"
              :active="route().current('dashboard')"
            >
              Dashboard
            </ResponsiveNavLink>
            <ResponsiveNavLink
              :href="route('portfolio')"
              :active="route().current('portfolio')"
            >
              Portafolio
            </ResponsiveNavLink>
            <ResponsiveNavLink
              :href="route('users.index')"
              :active="route().current('users.index')"
            >
              Gestionar Usuarios
            </ResponsiveNavLink>

            <ResponsiveNavLink
              :href="route('notes.index')"
              :active="route().current('notes.index')"
            >
              Notas
            </ResponsiveNavLink>

            <ResponsiveNavLink
              :href="route('quizzs.index')"
              :active="route().current('quizzs.index')"
            >
              Quizzs
            </ResponsiveNavLink>
          </div>

          <!-- Responsive Settings Options -->
          <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
              <div class="font-medium text-base text-white">
                {{ $page.props.auth.user.name }}
              </div>
              <div class="font-medium text-sm text-white">
                {{ $page.props.auth.user.email }}
              </div>
            </div>

            <div class="mt-3 space-y-1">
              <ResponsiveNavLink
                :href="route('logout')"
                method="post"
                as="button"
              >
                Log Out
              </ResponsiveNavLink>
            </div>
          </div>
        </div>
      </nav>

      <!-- Page Heading -->
      <!-- <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header> -->

      <!-- Page Content -->
      <main>
        <div
          class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5"
          v-if="$page.props.flash.message"
        >
          <div
            class="
              font-regular
              relative
              rounded-md
              bg-miazul-100
              p-4
              text-base
              leading-5
              text-white
              opacity-100
            "
          >
            {{ $page.props.flash.message }}
          </div>
        </div>

        <slot />
      </main>
    </div>
  </div>
</template>
