<x-layout>
    <x-slot:title>
        All Categories
    </x-slot:title>

    <h1>Daftar Kategori</h1>

    <ul>
    @foreach ($categories as $category)
        <li>
            {{-- Asumsi Anda memiliki route untuk menampilkan post berdasarkan kategori --}}
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
    @endforeach
    </ul>
</x-layout>