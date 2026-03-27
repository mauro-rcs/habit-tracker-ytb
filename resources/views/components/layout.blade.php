<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('app.name') }}
    </title>
    @vite('resources/css/app.css')
</head>
{{--gradiente, sei que fica ruim no código...--}}
<body
  class="min-h-screen"
  style="background: linear-gradient(
      to bottom,
      #020617 0%, #020617 55%,
      #1e3a8a 55%, #1e3a8a 75%,
      #3b82f6 75%, #3b82f6 90%,
      #93c5fd 90%, #93c5fd 100%
      );"
>
{{--<body class="bg-gradient-to-b from-pink-700 via-purple-700 to-blue-700 ">--}}
    <!--Aqui começa o slot-->
    <x-header/>
    {{ $slot }}
    <x-footer/>
</body>
</html>
