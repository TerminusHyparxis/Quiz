<!-- filepath: /home/terminus/projects/laravel/note/resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    @livewireStyles
</head>
<body>
    {{ $slot }}
    @livewireScripts
</body>
</html>