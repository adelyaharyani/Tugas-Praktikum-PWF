<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Produk
        </h2>
    </x-slot>
                    <div class="mt-4">
                        @if ($type === 'success')
                            <div class="p-3 rounded bg-green-100 text-green-700 border border-green-300">
                                ✅ {{ $message }}
                            </div>
                        @elseif ($type === 'warning')
                            <div class="p-3 rounded bg-yellow-100 text-yellow-700 border border-yellow-300">
                                ⚠️ {{ $message }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
