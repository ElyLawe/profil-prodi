<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Profil Prodi</title>
</head>
<body>
    <nav>
    <a href="/">Home</a> |
    <a href="/tentang">Tentang</a> |
    <a href="/visi-misi">Visi & Misi</a> |
    <a href="/dosen">Dosen</a> |
    <a href="/mata-kuliah">Mata Kuliah</a> |
    <a href="/kontak">Kontak</a>
</nav>
    <hr>

    @yield('content')

    <hr>
    <footer>
        <p>&copy; 2026 Program Studi Teknologi Informasi</p>
    </footer>
</body>
</html>