@extends('layout.Layout')

@section('title', 'Ini adalah Judul')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Daftar Produk</h1>
    <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="min-w-full bg-white text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                <tr>
                    <th scope="col" class="px-6 py-4">Id</th>
                    <th scope="col" class="px-6 py-4">Nama</th>
                    <th scope="col" class="px-6 py-4">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $d['id'] }}</td>
                        <td class="px-6 py-4">{{ $d['nama'] }}</td>
                        <td class="px-6 py-4">{{ $d['harga'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
