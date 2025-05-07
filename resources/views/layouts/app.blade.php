<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Surat Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #f1f5f9);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen text-gray-800 font-sans">
    @include('components.navbar')

    <main class="flex-grow flex items-center justify-center">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>


