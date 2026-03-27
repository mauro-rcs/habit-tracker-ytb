<x-layout class="">
  <main class="py-10">
    <div class="flex flex-col justify-center items-center">
      <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-50">
      <h1 class="text-center font-bold text-2xl mt-3 bg-teal-400 border-2 p-4">
          Veja seus hábitos ganharem vida!
      </h1>
    </div>



    @auth
        <p>Bem vindo, {{ auth()->user()->name }}!</p>
    @endauth
  </main>
</x-layout>
