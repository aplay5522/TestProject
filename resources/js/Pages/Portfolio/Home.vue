<script setup>
import JetNavbar from '@/Pages/Portfolio/Layouts/Navbar.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
<!--==============================================================================================-->
  <JetNavbar></JetNavbar>
<!--====================================================================================================================-->

  <div class="container mx-auto mt-10 flex max-w-3xl flex-wrap justify-center rounded-lg bg-white px-5 py-24 border border-miazul-100 shadow-lg shadow-blue-500/50">
    <!-- Info -->
    <div class="flex-wrap md:flex">
      <div class="mx-auto">
        <img class="mx-auto mt-12 h-52 w-52 rounded-lg border p-2 md:mt-0" src="../../../../public/img/icons8-usuario-512.png" alt="step" />
        <div>
          <h1 class="font-laonoto mt-4 text-center text-xl font-bold">Javier Lopez Requejo</h1>
          <p class="mt-2 text-center font-semibold text-gray-600">Ingeniero en Ciencias Informaticas</p>
          <p class="mt-1 text-center font-medium text-miazul-100 hover:text-miazul-300 font-bold"><a href="https://mail.google.com/mail/u/0/#inbox">javierlopezrequejo@gmail.com</a> </p>
        </div>
        <!-- component -->
        <div class="mx-auto w-52">
          <div class="m-4">
            <div class="flex w-full items-center justify-center">
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/icons8-laravel-96.png" alt="Error ..." />
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/icons8-vue-js-96.png" alt="Error ..." />
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/icons8-unidad-100.png" alt="Error ..." />
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/godot.png" alt="Error ..." />
            </div>
            <div class="flex w-full items-center justify-center mt-1">
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/icons8-visual-studio-code-2019-96.png" alt="Error ..." />
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/icons8-oreja-96.png" alt="Error ..." />
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/icons8-android-os-96.png" alt="Error ..." />
              <img class="mx-auto h-12 w-12 rounded-lg border p-2 md:mt-0 mr-1" src="../../../../public/img/icons8-tailwind-css-96.png" alt="Error ..."/>
            </div>
          </div>
        </div>
        <button class="
        mx-auto block rounded-md border bg-miazul-100 hover:bg-miazul-400 px-6 py-2 text-white outline-none
        transition
        ease-in-out
        duration-700
        ">Contactame</button>
      </div>
      <!-- Step Checkout -->
      <div class="mt-8 max-w-sm md:mt-0 md:ml-10 md:w-2/3">
        <div class="relative flex pb-12">
          <div class="absolute inset-0 flex h-full w-10 items-center justify-center">
            <div class="pointer-events-none h-full w-1 bg-gray-200"></div>
          </div>
          <div class="relative z-10 inline-flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>

          </div>
          <div class="flex-grow pl-4">
            <h2 class="title-font mb-1 text-xl font-black tracking-wider text-gray-900">Universidad</h2>
            <p class="font-laonoto leading-relaxed">
              Graduado de la Universidad de las Ciencias Informaticas<br />
              (Graduacion diciembre-2021)
            </p>
          </div>
        </div>
        <div class="relative flex pb-12">
          <div class="absolute inset-0 flex h-full w-10 items-center justify-center">
            <div class="pointer-events-none h-full w-1 bg-gray-200"></div>
          </div>
          <div class="relative z-10 inline-flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="title-font mb-1 text-xl font-black tracking-wider text-gray-900">Servicio Social</h2>
            <p class="font-laonoto leading-relaxed">Empresa Tecnoimport <br>
              (Enero 2022 - Enero 2024)
            </p>
          </div>
        </div>
        <div class="relative flex pb-12">
          <div class="relative z-10 inline-flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="title-font mb-1 text-xl font-black tracking-wider text-gray-900">Proyectos</h2>
            <p class="font-laonoto leading-relaxed">
              <a href="https://apklis.cu/applications?search=pentandra" class="text-miazul-100 hover:text-miazul-300 font-bold">Videojuegos - Apklis.cu</a><br>
              <a href="" class="text-miazul-100 hover:text-miazul-300 font-bold">Portafolio Personal</a><br>
              <a href="https://github.com/aplay5522/TestProject" class="text-miazul-100 hover:text-miazul-300 font-bold">TestProject (GitHub)</a>
            </p>
          </div>
        </div>

        <div class="container mx-auto text-center border-2 border-dashed border-sky-900 p-2">
            <p class="border-b mb-2">Pentandra Games</p>
            <div class="flex justify-center">
              <a href="https://mobile.twitter.com/pentandragames" class="flex justify-center">
                <img src="../../../../public/img/icons8-twitter-96.png" alt="Error ..." class="h-6 w-6 rounded">
              </a>
              <a href="https://github.com/aplay5522/aplay5522" class="flex justify-center">
                <img src="../../../../public/img/icons8-github-100.png" alt="Error ..." class="h-6 w-6 rounded">
              </a>
            </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ================================================================================= 
  Tecnologias
  -->

  <!-- <div class="p-2">
    <p class="ml-3 lettersSizex2"><strong>Portafolio personal</strong></p>

    <p class="text-center lettersSizex1"><strong>Tecnologias</strong></p>

    <div
      class="
        container
        mx-auto
        mt-20
        grid grid-cols-1
        gap-8
        md:grid-cols-4
        xl:grid-cols-5
      "
    >
      <div class="container-fluid">
        <div class="row">
          <div class="">
            <div class="card shadow-lg" style="width: 300px">
              <img
                src="https://logospng.org/download/laravel/logo-laravel-icon-1024.png"
                alt=""
                class="px-2"
              />
              <div class="card-body ml-2">
                <h4 class="card-title">Laravel</h4>
                <p class="card-text">Framework de php</p>
                <a href="#" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>
          </div>
          <div class="">
            <div class="card shadow-lg" style="width: 300px">
              <img
                src="https://logospng.org/download/vue.js/vue-js-4096.png"
                alt="Card image"
                class="px-2"
              />
              <div class="card-body">
                <h4 class="card-title">Vue</h4>
                <p class="card-text">Framework de JS</p>
                <a href="#" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>
          </div>
          <div class="">
            <div class="card shadow-lg" style="width: 300px">
              <img
                src="https://brandlogos.net/wp-content/uploads/2021/10/unity-logo.png"
                alt="Card image"
                class="px-2"
              />
              <div class="card-body">
                <h4 class="card-title">Unity</h4>
                <p class="card-text">Desarrollo de videojuegos</p>
                <a href="#" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>
          </div>
          <div class="">
            <div class="card shadow-lg" style="width: 300px">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Godot_icon.svg/2048px-Godot_icon.svg.png"
                alt=""
                class="px-2"
              />
              <div class="card-body">
                <h4 class="card-title">Godot</h4>
                <p class="card-text">Desarrollo de videojuegos</p>
                <a href="#" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="">
            <div class="card shadow-lg" style="width: 300px">
              <img
                src="https://logospng.org/download/android/logo-android-4096.png"
                alt=""
                class="px-2"
              />
              <div class="card-body">
                <h4 class="card-title">Android Studio</h4>
                <p class="card-text">Desarrollo de aplicaciones moviles</p>
                <a href="#" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>
          </div>

          <div class="">
            <div class="card shadow-lg" style="width: 300px">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/2048px-Visual_Studio_Code_1.35_icon.svg.png"
                alt=""
                class="px-2"
              />
              <div class="card-body">
                <h4 class="card-title">Visual Studio Code</h4>
                <p class="card-text">Desarrollo de aplicaciones moviles</p>
                <a href="#" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</template>

<style>
.specialColorBackground {
  background: rgba(0, 0, 0, 0.712);
}

.lettersSizex1 {
  font-family: cursive;
  font-size: 42px;
}

.lettersSizex2 {
  font-family: cursive;
  font-size: 64px;
  margin-left: 40px;
}

.color {
  color: rgb(153 246 228);
}
</style>
