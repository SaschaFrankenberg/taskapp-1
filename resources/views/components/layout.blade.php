@props(['title' => 'TaskApp'])

<!DOCTYPE html>
<html lang="en" data-theme="caramellatte">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - TaskApp</title>
    
</head>
<body>
    <x-nav />
    <main>
        {{ $slot }}
    </main>
    {{-- Footer --}}
</body>
</html>