<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolfolio</title>

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div>
        {{-- Header --}}
        <header class="navbar navbar-dark sticky-top flex-md-nowrap p-2 shadow ms_navbar">
            <div class="row justify-content-between">
                <a class="navbar-brand ms-3 col-md-3 col-lg-2 me-0 px-3" href="/"> <i
                        class="fa-solid fa-book"></i>

                    <span class="d-none d-sm-inline-block">BoolFolio</span>
                </a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap ms-2 me-3">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </header>
        {{-- /Header --}}

        <div class="container-fluid vh-100">
            <div class="row h-100 d-flex justify-content-start flex-row">
                {{-- Sidebar --}}
                <nav id="sidebarMenu" class="d-md-inline-block navbar-dark sidebar collapse ms_sidebar">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex justify-content-between align-items-center text-white {{ Route::currentRouteName() === 'admin.dashboard' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.dashboard') }}">

                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>
                                    <span>Dashboard</span>
                                    <span></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex justify-content-between align-items-center text-white {{ Route::currentRouteName() === 'admin.projects.index' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.projects.index') }}">
                                    <i class="fa-solid fa-diagram-project"></i>
                                    Progetti
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                {{-- /Sidebar --}}

                <main class="ms_admin-content">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
