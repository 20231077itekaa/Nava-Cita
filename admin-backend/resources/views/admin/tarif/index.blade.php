@extends('layouts.admin')

@section('title', 'Kelola Tarif')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-700">Daftar Item Tarif</h2>
        
        <a href="{{ route('admin.tarif.create') }}" class="inline-flex items-center bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-150">
            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Tambah Item Baru
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        @if ($tarifs->isEmpty())
            <div class="p-4 bg-white text-center text-gray-500">
                Belum ada data tarif yang tersimpan. Silakan tambahkan data baru.
            </div>
        @else
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-1/12">#</th>
                        <th scope="col" class="px-6 py-3 w-4/12">Item Tarif</th>
                        <th scope="col" class="px-6 py-3 w-3/12 text-right">Harga Hari Kerja</th>
                        <th scope="col" class="px-6 py-3 w-3/12 text-right">Harga Akhir Pekan</th>
                        <th scope="col" class="px-6 py-3 w-1/12 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarifs as $tarif)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            {{ $tarif->item_name }}
                        </td>
                        <td class="px-6 py-4 text-right font-medium text-gray-800">
                            {{ 'Rp ' . number_format($tarif->price_weekday, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 text-right font-medium text-gray-800">
                            {{ 'Rp ' . number_format($tarif->price_weekend, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 text-center flex justify-center space-x-2">
                            <a href="{{ route('admin.tarif.edit', $tarif->id) }}" class="text-blue-600 hover:text-blue-900 transition duration-150" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('admin.tarif.destroy', $tarif->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item tarif ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 transition duration-150" title="Hapus">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection