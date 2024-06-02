<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama</th>
                <th>Nama Kecamatan</th>
            </tr>
            @foreach ($kelurahans as $kelurahan)
            <tr>
                <td>{{ $kelurahan->id }}</td>
                <td>{{ $kelurahan->nama }}</td>
                <td>{{ $kelurahan->nama_kecamatan }}</td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>