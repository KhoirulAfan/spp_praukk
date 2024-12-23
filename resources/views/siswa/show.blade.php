{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail || {{ $data['nama'] }}</title>
</head>
<body>
    <ul>
        <li>nama : {{ $data['nama'] }}</li>
        <li>nisn : {{ $data['nisn'] }}</li>
        <li>nis : {{ $data['nis'] }}</li>
        <li>alamat : {{ $data['alamat'] }}</li>
        <li>nomor telepon : {{ $data['no_telp'] }}</li>
        <li>id kelas : {{ $data['id_kelas'] }}</li>
    </ul>
</body>
</html> --}}
<x-layoutt>
    <x-header>Detail Siswa</x-header>
    <div class="mt-5">               
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('siswa.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="mt-4 bg-slate-400 rounded-sm">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 p-5">
                <div class="p-5 bg-slate-300">
                    <div class=" font-bold text-slate-900 text-xl">
                        <h1>{{ $data['nama'] }}</h1>

                    </div>
                    <ul>
                        <li>nama : {{ $data['nama'] }}</li>
                        <li>nisn : {{ $data['nisn'] }}</li>
                        <li>nis : {{ $data['nis'] }}</li>
                        <li>alamat : {{ $data['alamat'] }}</li>
                        <li>nomor telepon : {{ $data['no_telp'] }}</li>
                        <li>Kelas : {{ $data->kelas->nama_kelas.' '.$data->kelas->kompetensi_keahlian }}</li>
                    </ul>
                </div>
                <div class="p-5 bg-slate-300">
                    <div class="mb-2 font-bold text-slate-900 text-xl">
                        <h1>Spp</h1>

                    </div>
                    <table class="w-full text-center table-auto border-collapse border border-slate-500">
                        <thead>
                            <tr>
                                <td class="border border-slate-700 p-2 ">No</td>
                                <td class="border border-slate-700 p-2 ">Tahun</td>
                                <td class="border border-slate-700 p-2 ">Nominal</td>
                                <td class="border border-slate-700 p-2 " class="w-24">aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($spp as $item)
                            <tr>
                                <td class="border border-slate-700 p-2 ">{{ $no++ }}</td>
                                <td class="border border-slate-700 p-2 ">{{ $item['tahun'] }}</td>
                                <td class="border border-slate-700 p-2 ">{{ $item['nominal'] }}</td>
                                <td class="border border-slate-700 p-2 flex justify-center">
                                    @if ($item['status'] === 'dibayar')
                                    <small>
                                    <a href="" class="bg-slate-400 text-slate-900 border border-slate-900  px-2 py-1 rounded shadow-sm pointer-events-none text-xs">Sudah dibayar</a>
                                    </small>
                                    @else
                                    <small>
                                        <a href="{{ route('pembayaran.create') }}" class="bg-slate-900 text-white px-2 py-1 rounded shadow-sm  text-xs">Bayar</a>
                                        </small>
                                    @endif
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layoutt>