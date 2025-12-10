@extends('layouts.admin')

{{-- Menggunakan item_name --}}
@section('title', 'Edit Tarif: ' . $tarif->item_name) 

@section('content')

<h2 class="text-2xl font-bold text-gray-700 mb-6">Edit Item Tarif: {{ $tarif->item_name }}</h2>

<div class="bg-white p-6 rounded-xl shadow-lg max-w-xl mx-auto">
    
    {{-- Action ke update dengan Method PUT --}}
    <form action="{{ route('admin.tarif.update', $tarif->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div class="space-y-4">
            
            {{-- INPUT ITEM NAME --}}
            <div>
                <label for="item_name" class="block text-sm font-medium text-gray-700">Nama Item Tarif (e.g., Perorangan, Roda 4)</label>
                {{-- Menggunakan item_name --}}
                <input type="text" name="item_name" id="item_name" 
                       value="{{ old('item_name', $tarif->item_name) }}"
                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 @error('item_name') border-red-500 @enderror" 
                       required autocomplete="off">
                @error('item_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- INPUT HARGA WEEKDAY --}}
            <div>
                <label for="price_weekday" class="block text-sm font-medium text-gray-700">Harga Hari Kerja (Weekday)</label>
                <div class="relative mt-1 rounded-lg shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">Rp</span>
                    </div>
                    {{-- Menggunakan price_weekday --}}
                    <input type="number" name="price_weekday" id="price_weekday" 
                           value="{{ old('price_weekday', $tarif->price_weekday) }}"
                           class="block w-full pl-10 pr-3 border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500 @error('price_weekday') border-red-500 @enderror" 
                           required min="0">
                </div>
                @error('price_weekday')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- INPUT HARGA WEEKEND --}}
            <div>
                <label for="price_weekend" class="block text-sm font-medium text-gray-700">Harga Akhir Pekan/Libur (Weekend)</label>
                <div class="relative mt-1 rounded-lg shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">Rp</span>
                    </div>
                    {{-- Menggunakan price_weekend --}}
                    <input type="number" name="price_weekend" id="price_weekend" 
                           value="{{ old('price_weekend', $tarif->price_weekend) }}"
                           class="block w-full pl-10 pr-3 border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500 @error('price_weekend') border-red-500 @enderror" 
                           required min="0">
                </div>
                @error('price_weekend')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('admin.tarif.index') }}" class="py-2 px-4 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-150">Batal</a>
            <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-150">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection