<x-layout class="">
  <main class="py-10 text-white">
    <h1 class="">
      Dashboard
    </h1>

    <p>
      Bem Vindo(a), {{ auth()->user()->name }}!
    </p>

    <h2 class="text-xl mt-4 ">
      Listagem dos Hábitos
    </h2>

    <ul class="flex flex-col gap-2">
      @forelse($habits as $item)
      <li class="pl-4">
        <div class="flex gap-2 items-center">
          <p class="font-bold text-xl">
            - {{ $item->name }}
          </p>
          <p>
            [{{ $item->habitLogs->count() }}]
          </p>
        </div>
      </li>
      @empty
        <p>
          Ainda não tem nenhum hábito cadastrado.
        </p>
        <a href="/habits/cadastrar"
        class="bg-blue-700 p-2 border-2 text-black">
          Cadastre um novo hábito agora
        </a>
      @endforelse
    </ul>
  </main>
</x-layout>
