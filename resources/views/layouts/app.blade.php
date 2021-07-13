<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control</title>
    <livewire:styles />
    <x-css />
</head>

<body>

    <div>
        <livewire:header.header />
        <div class="container-fluid">
            <div class="row">
                <livewire:sidebar.sidebar />
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    <x-javascript />
    <livewire:scripts />
</body>

</html>