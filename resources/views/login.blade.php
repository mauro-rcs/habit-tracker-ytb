<x-layout class="">
  <main class="py-10">
    <div class="flex justify-center">
      <h1 class="font-bold text-3xl bg-white px-8 py-3 rounded-3xl shadow-md">
        Faça Login
      </h1>
    </div>

    <div>
      {{--se der erro do email:--}}
      @error('email')
      <p class="text-red-500 text-xl mt-1">
        {{ $message }}
      </p>
      @enderror
    </div>

    <section class="mt-5">
      <form action="/login" method="POST">
        @csrf
        <p>
          <label for="email">Email</label><br>
          <input type="email"
                 name="email"
                 placeholder="seuemail@gmail.com"
                 required
                 class="bg-white p-2 border-2">
        </p>

        <p class="mb-3">
        <label for="password">Senha</label><br>
        <input type="password"
               name="password"
               required
               placeholder="******"
               class="bg-white p-2 border-2">
        </p>

        <p>
          <input type="submit"
                 value="Enviar"
                 class="bg-white px-3 py-2 shadow-2xl rounded-xl border-2"
          >
        </p>
      </form>
    </section>
  </main>
</x-layout>
