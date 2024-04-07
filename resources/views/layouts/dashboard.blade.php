<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    @stack('styles')
</head>

<body>
    <div class="bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-600 h-screen flex overflow-hidden text-sm">
        @include('layouts.partials.sidebar')
        <div class="flex-grow overflow-hidden h-full flex flex-col">
            @include('layouts.partials.top-header')
            <div class="flex-grow flex overflow-x-hidden">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts
    @stack('scripts')
    <script>
        Alpine.data('counter', () => {
            return {
                count: 0,
                increment() {
                    this.count++
                },
            }
        })
    </script>
</body>

</html>