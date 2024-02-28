<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-gray-300 drop-shadow-md">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="">
            </div>

            <div class="gap-4 flex items-center">

                <div>
                    @auth
                        <h3>Olá {{ $user->name }}</h3>
                    @endauth
                </div>

                @guest
                    <div>

                        <h1>Login</h1>
                    </div>

                    <div>
                        <h1>Register</h1>
                    </div>
                @endguest

            </div>
        </nav>
    </header>
</body>

</html>
