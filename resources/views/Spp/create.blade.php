<x-layoutt>
    <x-header>Tambah Data kelas</x-header>
    <div class="mt-5">               
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('spp.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="mt-4 bg-slate-400 rounded-sm">
            <form action="{{ route('spp.store') }}" method="POST" >
                @csrf                  
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>Tahun</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="number" 
                        name="tahun" 
                        value="{{ old('tahun') }}">
                        @error('tahun')
                            {{ $message }}
                        @enderror
                    </div>                   
                </div>
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>Nominal</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="number" 
                        name="nominal" 
                        value="{{ old('nominal') }}">
                        @error('nominal')
                            {{ $message }}
                        @enderror
                    </div>                   
                </div>
                <div class="px-4 py-2">
                    <button type="submit" class="bg-slate-900 py-2 px-4 rounded-md text-white"><i class="fa fa-plus mr-3"></i>Tambah</button>
                </div>
            </form>
        </div>
    </div>
</x-layoutt>