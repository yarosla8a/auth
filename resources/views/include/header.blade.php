<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="{{route('main')}}">Главная    </a>
            @auth()
            <a class="text-muted" href="{{route('users')}}"> + </a>
                @endauth
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Blog</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
            </a>

            @guest()
            <a class="btn btn-sm btn-outline-secondary" href="{{route('register')}}">Реистрация</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">login</a>
            @endguest
            @auth()
                <a href="{{route('setting')}}" class="btn btn-sm btn-outline-secondary">Настройки профиля</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-secondary" onclick ="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                exit
            </a>
            @endauth
        </div>
    </div>
</header>
