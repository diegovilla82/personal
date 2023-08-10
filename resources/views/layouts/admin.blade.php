<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script
      src="{{ asset('/resources/js/app.js') }}"
      defer
    ></script> --}}
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    {{-- <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script> --}}
    @livewireStyles
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('layouts.slider-desk')
        <!-- Mobile sidebar -->
        @include('layouts.slider-mobile')
        <div class="flex flex-col flex-1 w-full">

            @include('layouts.header')

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">

                    <!-- Page Heading -->
                    @if (isset($header))
                        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            {{ $header }}
                        </h2>
                    @endif
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @livewireScripts
    @stack('js')
</body>

</html>
