<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Resep</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            🍔 ResepKu
        </a>

        <a href="/reseps/create" class="btn btn-light rounded-pill px-4">
            + Tambah Resep
        </a>
    </div>
</nav>

<div class="container py-5">
    @yield('content')
</div>
    
</body>
</html>