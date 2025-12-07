<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? 'Default Title' }}</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* Gaya tambahan jika diperlukan */
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body class="bg-pink-100 min-h-screen flex flex-col text-gray-800"> 

    <nav class="bg-pink-300 shadow-md p-4 flex justify-center space-x-4">
    <a href="/" class="text-white hover:text-pink-100 font-bold">Home</a>
    <a href="/about" class="text-white hover:text-pink-100 font-bold">About</a>
    <a href="/blog" class="text-white hover:text-pink-100 font-bold">Blog</a>
    <a href="/contact" class="text-white hover:text-pink-100 font-bold">Contact</a>
    <a href="/categories" class="text-white hover:text-pink-100 font-bold">Categories</a>
    </nav>

    <main class="container mx-auto p-8 flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-pink-600 text-white p-4 text-center">
        &copy; 2025 Modul Praktikum Web.
    </footer>
</body>
</html>