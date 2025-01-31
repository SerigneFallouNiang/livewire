<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Light App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="flex items-center justify-center mt-8 font-bold text-4xl">
            <div class="content">
                <div class="title m-b-md mt-8">Light</div>
            </div>
        </div>

            <div class="light font-bold text-xl flex items-center justify-center mt-8">
                @livewire('light')
            </div>
           
        </div>
        @livewireScripts
    </body>
</html>
