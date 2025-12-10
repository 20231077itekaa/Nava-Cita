@extends('layouts.admin')

@section('title', 'Galeri Foto')

@section('header')
    <h2 class="text-xl font-semibold text-gray-800 leading-tight">Manajemen Galeri Foto</h2>
@endsection

@section('content')
<div class="p-6">
    {{-- Notifikasi Sukses --}}
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    {{-- Notifikasi Error --}}
    @if (session('error'))
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Galeri Foto Pantai</h1>
            <p class="text-sm text-gray-600 mt-1">Total Foto: {{ $fotos->count() }}</p>
        </div>
        <a href="{{ route('admin.foto.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-150">
            + Unggah Foto Baru
        </a>
    </div>

    @if ($fotos->isEmpty())
        <div class="text-center py-10 text-gray-500 italic bg-gray-50 rounded-lg">
            <p>Belum ada foto yang dimasukkan ke galeri.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($fotos as $foto)
                {{-- Mulai Kartu Foto --}}
                <div class="border border-gray-200 rounded-lg shadow-sm overflow-hidden flex flex-col">
                    
                    {{-- Blok Tampilan Gambar (KOREKSI VARIABEL DAN PATH) --}}
                    @php
                        // Cukup gunakan $foto->path (yang seharusnya berisi 'fotos/namafile.ext')
                        // dan gabungkan langsung dengan asset('storage/')
                        $imagePath = $foto->path ? asset('storage/' . $foto->path) : null;
                    @endphp

                    @if($imagePath)
                        <img src="{{ $imagePath }}" alt="{{ $foto->judul }}" class="w-full h-48 object-cover">
                    @else
                        {{-- Placeholder jika path kosong atau tidak valid --}}
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                            <div class="text-center p-4">
                                {{-- Pastikan Anda sudah mengimport Font Awesome untuk ikon ini --}}
                                <i class="fas fa-image text-3xl mb-2"></i> 
                                <p class="text-sm font-semibold">Gambar Tidak Ditemukan</p>
                                {{-- Menampilkan path yang tersimpan di DB untuk debugging --}}
                                <p class="text-xs mt-1">Path Database: {{ $foto->path ?: 'Kosong' }}</p>
                            </div>
                        </div>
                    @endif
                    
                    {{-- Blok Informasi dan Aksi --}}
                    <div class="p-4 flex flex-col justify-between flex-grow">
                        <div>
                            <h3 class="font-semibold text-gray-800 text-sm mb-1">{{ $foto->judul ?: 'Tanpa Judul' }}</h3>
                            <p class="text-xs text-gray-600 mb-3">{{ Str::limit($foto->caption ?: 'Tanpa keterangan', 50) }}</p>
                        </div>

                        <div class="flex justify-between items-center border-t pt-3 mt-auto">
                            <a href="{{ route('admin.foto.edit', $foto) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Edit
                            </a>

                            <form action="{{ route('admin.foto.destroy', $foto) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    class="text-red-600 hover:text-red-800 text-sm font-medium"
                                    onclick="return confirm('Hapus foto {{ $foto->judul }}?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- Akhir Kartu Foto --}}
            @endforeach
        </div>
    @endif
</div>

<script>
// Debug: Tampilkan info penting di console untuk pengecekan jalur URL
document.addEventListener('DOMContentLoaded', function() {
    console.log("--- DEBUG INFO: Galeri Foto (Koreksi) ---");
    @foreach($fotos as $foto)
        @php
            // Menggunakan path yang sudah bersih dari DB
            $urlAkses = $foto->path ? asset('storage/' . $foto->path) : 'TIDAK ADA PATH';
        @endphp
        console.log({
            id: "{{ $foto->id }}",
            judul: "{{ $foto->judul }}",
            pathDatabase: "{{ $foto->path }}", // Menggunakan $foto->path
            urlAksesFinal: "{{ $urlAkses }}"
        });
    @endforeach
    console.log("---------------------------------------");
    console.log("Pastikan nilai 'urlAksesFinal' bisa dibuka langsung di browser.");
});
</script>
@endsection