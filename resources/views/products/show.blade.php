<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Halaman Produk
        </h2>
    </x-slot>

    <div class="p-6">
        <p>Parameter yang dikirim: {{ $angka }}</p>

        {{-- Panggil komponen alert --}}
        <x-alert type="{{ $type }}">
            {{ $message }}
        </x-alert>
    </div>
</x-app-layout>
