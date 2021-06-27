<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control</title>
    <livewire:styles />
    <x-css/>
</head>
<body>
    {{ $slot }}
    <x-javascript/>
    <livewire:scripts />
</body>
</html>