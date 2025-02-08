<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PromoCars BG</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="flex flex-col min-h-screen antialiased bg-bgColor">

    <x-header />

    <main class="flex flex-1 flex-col">
        {{ $slot }}
    </main>


    @livewireScripts
</body>
</html>
