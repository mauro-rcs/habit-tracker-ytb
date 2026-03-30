<x-layout class="">
  <main class="py-10 text-white">
    <a href="{{ route('habit.create') }}"
       class="p-2 border-2 bg-white text-black font-bold">
      Cadastrar Hábito
    </a>

    @session('success')
    <div class="flex justify-center">
      <p class="bg-green-300 border-2 border-green-400 text-black font-bold px-3 py-2">
        {{session('success')}}
      </p>
    </div>
    @endsession

    <h1 class="text-3xl text-center font-bold">
      Dashboard
    </h1>

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

          <a class="bg-white p-1 hover:opacity-50" href="{{ route('habit.edit', $item->id) }}"}}>
            <x-icons.edit />
          </a>

          <form action="{{route('habit.destroy', $item)}}" method="post">
            @csrf
            @method('DELETE')
          <button type="submit" class="cursor-pointer bg-red-500 hover:opacity-50 transition text-white p-2">
            <x-icons.trash/>
          </button>
          </form>
        </div>
      </li>
      @empty
        <p>
          Ainda não tem nenhum hábito cadastrado.
        </p>
        <a href="{{ route('habit.create') }}"
        class="bg-blue-700 p-2 border-2 text-black">
          Cadastre um novo hábito agora
        </a>
      @endforelse
    </ul>
  </main>
</x-layout>
