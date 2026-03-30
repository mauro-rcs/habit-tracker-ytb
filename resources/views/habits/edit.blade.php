<x-layout>
  <main class="py-10 text-white">
    <h1 class="font-bold text-2xl text-center">
      Editar Hábito
    </h1>
    {{--habits.store--}}
    <form action="{{route('habit.update', $habit->id)}}"
          method="post"
          class="bg-white text-black max-w-[600px] mx-auto p-10 border-2 mt-4 items-center">
          @csrf
          @method('PUT')

      <p>
        <label for="name" class="font-bold">Nome do Hábito</label><br>
        <input type="text"
               name="name"
               placeholder="Exemplo: Ler 10 páginas"
               class="bg-white p-2 border-2 w-full font-bold @error('name') border-red-500 @enderror"
               value="{{ $habit->name }}">
      </p>

      <p>
        <button
          type="submit"
          class="bg-teal-400 mt-4 font-bold w-full px-3 py-2 shadow-2xl border-2 hover:bg-teal-500"
        >
          Editar
        </button>
      </p>
    </form>
  </main>
</x-layout>
