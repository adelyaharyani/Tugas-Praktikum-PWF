<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produk — Hasil Perhitungan
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p><strong>Angka masukan:</strong> {{ $angka }}</p>
                    <p><strong>Penambahan:</strong> {{ $tambah }}</p>
                    <hr class="my-3">
                    <p><strong>Hasil:</strong> {{ $hasil }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
