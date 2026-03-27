<header class="bg-blue-800 p-4 border-bottom border-2 flex items-center justify-between font-bold">
  {{--LOGO--}}
  <div class="">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-30">
  </div>

  {{--GITHUB--}}
  <div>
    <a href="https://github.com/mauro-rcs/habit-tracker-ytb" class="bg-teal-400 px-3 py-2 ml-2 shadow-2xl border-2">
      GitHub
    </a>

    @auth
    {{--logout--}}
      <form action="{{ route('auth.logout') }}" method="post" class="inline">
        @csrf
        <button type="submit"
                class="bg-teal-400 px-3 py-2 ml-2 shadow-2xl border-2">
          Sair</button>
      </form>
    @endauth

    @guest
    {{--login--}}
      <a href="{{ route('auth.login') }}"
         class="bg-teal-400 px-3 py-2 ml-2 shadow-2xl border-2">
        Login
      </a>
    @endguest
  </div>
</header>
