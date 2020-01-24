<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light" style="width: 100%; box-sizing: content-box; margin: 0">
            <ul class="navbar-nav flex-row mr-auto" style="margin-left: 10%">
                <li class="nav-item">
                    <a style="padding: 0" class="navbar-expand-lg navbar-brand logo_h" href="{{url('/')}}"><img style="width: 3em; height: 2.9em" src="{{asset('storage/images/logo.png')}}" alt=""></a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 10%">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent" style="margin-right: 10%">
                <ul class="nav navbar-nav menu_nav justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/posts')}}">Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/categories')}}">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Me</a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/home" class="dropdown-item nav-link">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>
