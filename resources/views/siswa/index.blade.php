{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siswa</title>
</head>
<body>
    <a href="{{ route('siswa.create') }}">Tambah Data siswa</a>
    @if (@session('success'))
        {{ session('success') }}
        
    @endif
    <table>
        <tr>            
            <td>nama</td>
            <td>nisn</td>
            <td>Aksi</td>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nisn }}</td>        
            <td>
                <a href="{{ route('siswa.show',$item['id']) }}">show</a>
                <a href="{{ route('siswa.edit',$item['id']) }}">edit</a>
                <form action="{{ route('siswa.destroy',$item['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="alert('apakah anda yakin anda ingin menghapus ini ?')">delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html> --}}
<x-layoutt>
    <x-header>Data Siswa</x-header>
    <div class="mt-5">
        <a class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('siswa.create') }}">
            <i class=" fa fa-plus mr-1"></i>
            Tambah Data siswa
        </a>
        <div>
            
            @if (@session('success'))
            
            <p class="bg-slate-300 border border-slate-900 mt-3 rounded-sm p-4">
                {{ session('success') }}
            </p>
            
             @endif
        </div>
        <div class="mt-4">
            <table border="0" class="w-full text-center  border border-slate-500 table-auto">
                <tr class="font-semibold bg-slate-200 uppercase">            
                    <td class="w-12 border border-slate-600 px-4 py-2">No</td>
                    <td class="border border-slate-600 px-4 py-2">nama</td>
                    <td class="border border-slate-600 px-4 py-2">nisn</td>
                    <td class="w-32 border border-slate-600 px-4 py-2">Aksi</td>
                </tr>
                @php
                    $no = 1
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td class="border border-slate-600 px-4 py-2">{{ $no++ }}</td>
                    <td class="border border-slate-600 px-4 py-2">{{ $item->nama }}</td>
                    <td class="border border-slate-600 px-4 py-2">{{ $item->nisn }}</td>        
                    <td class="border border-slate-600 px-4 py-2 flex gap-1">
                        <a href="{{ route('siswa.show',$item['id']) }}" class="bg-slate-400 px-3 py-1 border border-slate-900 rounded-md text-white text-sm">show</a>
                        <a href="{{ route('siswa.edit',$item['id']) }}" class="bg-slate-400 px-3 py-1 border border-slate-900 rounded-md text-white text-sm">edit</a>
                        <form action="{{ route('siswa.destroy',$item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 px-3 py-1 border border-slate-900 rounded-md text-white text-sm" type="submit" onclick="alert('apakah anda yakin anda ingin menghapus ini ?')">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        
            </table>
        </div>
    </div>
</x-layoutt>
