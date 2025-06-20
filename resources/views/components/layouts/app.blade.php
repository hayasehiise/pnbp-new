<!DOCTYPE html>
<html class="bg-gray-200" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="winter">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'PNBP Website' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <div class="flex flex-col">
        <livewire:components.navbar>
            <div class="flex flex-row">
                <livewire:components.sidebar>
                    <div class="grow p-5">{{ $slot }}</div>
            </div>
    </div>
</body>

</html>
