<x-layoutt>
    <x-header>Tambah Data kelas</x-header>
    <div class="mt-5">               
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('kelas.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="mt-4 bg-slate-400 rounded-sm">
            <form action="{{ route('kelas.update',$data['id']) }}" method="POST" >
                @method('PUT')
                @csrf   
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>Nama Kelas</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" 
                        name="nama_kelas" 
                        value="{{ old('nama_kelas',$data['nama_kelas']) }}">
                        @error('nama_kelas')
                            {{ $message }}
                        @enderror
                    </div>                   
                </div>
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>Kompetensi Kejuruan</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" 
                        name="kompetensi_keahlian" 
                        value="{{ old('kompetensi_keahlian',$data['kompetensi_keahlian']) }}">
                        @error('kompetensi_keahlian')
                            {{ $message }}
                        @enderror
                    </div>                   
                </div>
                <div class="px-4 py-2">
                    <button type="submit" class="bg-slate-900 py-2 px-4 rounded-md text-white"><i class="fa fa-save mr-3"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-layoutt>