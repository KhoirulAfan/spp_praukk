<x-layoutt>
    <x-header>Data SPP</x-header>
    <div class="mt-5">
        <a class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('spp.create') }}">
            <i class=" fa fa-plus mr-1"></i>
            Tambah Data spp
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
                <thead class="font-semibold bg-slate-200 uppercase">
                    <tr>            
                        <td class="w-12 border border-slate-600 px-4 py-2">No</td>
                        <td class="border border-slate-600 px-4 py-2">Tahun</td>
                         <td class="border border-slate-600 px-4 py-2">Nominal</td>               
                        <td class="w-32 border border-slate-600 px-4 py-2">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1
                    @endphp                
                    @foreach ($data as $item)                
                    <tr>
                        <td class="border border-slate-600 px-4 py-2">{{ $no++ }}</td>
                        <td class="border border-slate-600 px-4 py-2">{{ $item['tahun'] }}</td>
                        <td class="border border-slate-600 px-4 py-2">{{ $item['nominal'] }}</td>   
                        <td class="flex gap-1 border border-slate-600 px-4 py-2">
                            <a href="{{ route('spp.show',$item['id']) }}" class="bg-slate-400 px-3 py-1 border border-slate-900 rounded-md text-white text-sm">show</a>
                            <a href="{{ route('spp.edit',$item['id']) }}" class="bg-slate-400 px-3 py-1 border border-slate-900 rounded-md text-white text-sm">edit</a>
                            <form action="{{ route('spp.destroy',$item['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 px-3 py-1 border border-slate-900 rounded-md text-white text-sm" type="submit" onclick="alert('apakah anda yakin anda ingin menghapus ini ?')">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
    </div>
</x-layoutt>