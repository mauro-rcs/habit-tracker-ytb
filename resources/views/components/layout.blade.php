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
<body class="bg-[#eabc28] ">
    <!--Aqui começa o slot-->
    <x-header/>
    {{ $slot }}
    <x-footer/>
</body>
</html>
