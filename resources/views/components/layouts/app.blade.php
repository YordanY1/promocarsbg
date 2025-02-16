<!DOCTYPE html>
<html lang="bg">

<head>
    <style>
        .botman-chat-button {
            position: fixed !important;
            bottom: 20px !important;
            right: 20px !important;
            z-index: 99999 !important;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@1,300&display=swap"
        rel="stylesheet">

    <!--- Meta -->
    <title>{{ $metaTitle ?? 'PromoCars BG' }}</title>
    <meta name="description"
        content="{{ $metaDescription ?? 'Открийте най-добрите оферти за автомобили в България.' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'автомобили, коли, продажба на коли, авто оферти' }}">
    <meta name="author" content="{{ $metaAuthor ?? 'PromoCars BG' }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/brand/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/brand/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/brand/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/brand/logo.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $metaTitle ?? 'PromoCars BG' }}">
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Открийте най-добрите оферти за автомобили в България.' }}">
    <meta property="og:image" content="{{ asset('images/brand/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="PromoCars BG">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="flex flex-col h-auto antialiased bg-bgColor">
    <x-header />

    <main class="flex flex-1 flex-col">
        {{ $slot }}
    </main>

    @livewire('components.footer')

    @livewireScripts

    <script>
        var botmanWidget = {
            title: "Чат с нас",
            mainColor: "#b01e45",
            bubbleBackground: "#b01e45",
            headerTextColor: "#ffffff",
            aboutText: "PromoCars BG ChatBot",
            introMessage: "👋 Здравейте! Как мога да помогна?",
        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>

</html>
