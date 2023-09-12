<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Community</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/app.js')}}"></script>

    @stack('head')

    @livewireStyles
    @livewire('datatables-styles')
</head>

<body>
    <div class="flex min-h-screen test bg-gray-100" :class="{ 'overflow-hidden': isSideMenuOpen}">
        @include('components.sidebar-desktop')
        @include('components.sidebar-mobile')

        <div class="flex flex-col flex-1 w-full z-10">

            @include('components.navigation')

            <main class="h-full pb-16 overflow-y-auto">
                <div class="container grid px-6 mx-auto mt-12">
                    @yield('content')
                </div>
            </main>
            
        </div>
    </div>

    @stack('js')

    @livewireScripts
    @livewire('jquery-cdn')
    @livewire('datatables-scripts')
    @livewire('datatables-function')
</body>
</html>
