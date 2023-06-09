@php
    use App\Models\SistemaGlobal;
    $menu = SistemaGlobal::$Menu;
    $itens = $menu['itens'];
    $icons = $menu['icons'];
    $rotas = $menu['rotas'];
@endphp

<nav class="blue">
    <div class="nav-warpper container">
        {{-- Menu Hamburger --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons small-text">menu</i></a>

        <a href="{{ route($rotas[0]) }}" class="brand-logo light">{{ config('app.name') }}</a>
        {{-- Menu para desktop --}}
        <ul class="right hide-on-med-and-down">
            @foreach ($itens as $key => $item)
                <li>
                    <a href="{{ route($rotas[$key]) }}">
                        <i class="{{ $icons[$key] }} fa-1x"></i>
                        {{ $item }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- Menu Mobile --}}
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('images/slide/sidenav-imagem.jpg') }}" alt="[imagem]"
                            title='{{ config('app.name') }}'>
                    </div>
                    {{-- <ahref="#user"><imgclass="circle"src="images/yuna.jpg"></a> --}}
                    <a href="#name"><span class="white-text name"><b>{{ config('app.name') }}</b></span></a>
                    {{--  <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>--}}
                </div>
             </li>

            <li><a href="#!">Menu</a></li>
            <li><div class="divider"></div></li>
            @foreach ($itens as $key => $item)
                <li>
                    <a href="{{ route($rotas[$key]) }}">
                        <i class="{{ $icons[$key] }} fa-1x blue-text text-lighten-4 "></i><b>
                        {{ $item }}</b> <br>
                    </a>
                </li>
            @endforeach

        </ul>

    </div>
</nav>
