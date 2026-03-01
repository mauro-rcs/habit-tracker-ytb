<h1>
    Welcome to the Home Page

    Olá, {{ $name }}
</h1><br>
    Seus Hábitos
<ul>
    @foreach($habits as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
