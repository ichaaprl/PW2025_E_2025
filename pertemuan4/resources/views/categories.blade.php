<x-layout>
    <x-slot:title>
        Daftar Kategori
    </x-slot:title>

    <h1 class="text-2xl font-bold mb-4">Daftar Kategori</h1>

    <div class="space-y-4">
        @foreach ($categories as $category)
            <div class="bg-white p-4 rounded-lg shadow-md hover:bg-pink-50 transition duration-150">
                <p class="text-lg text-pink-600 font-semibold">
                    {{ $category->name }}
                </p>
            </div>
        @endforeach
    </div>
</x-layout>