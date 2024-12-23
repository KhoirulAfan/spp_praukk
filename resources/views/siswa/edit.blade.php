

<x-layoutt>
    <x-header>Tambah Data Siswa</x-header>
    <div class="mt-5">        
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('siswa.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="mt-4 bg-slate-400 rounded-sm">
            <form action="{{ route('siswa.update',$data['id']) }}" method="POST" >
                @csrf   
                @method('PUT')
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>NISN</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" 
                        name="nisn" 
                        value="{{ old('nisn',$data['nisn']) }}">
                        @error('nisn')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="flex flex-col  px-4 py-2">
                        <label>NIS</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" name="nis" value="{{ old('nis',$data['nis']) }}">
                        @error('nis')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="flex flex-col  px-4 py-2">
                        <label>Nama</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" name="nama" value="{{ old('nama',$data['nama']) }}">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>        
                    <div class="flex flex-col  px-4 py-2">
                        <label>Nomor Telpon</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="number" name="no_telp" value="{{ old('no_telp',$data['no_telp']) }}">
                        @error('no_telp')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="flex flex-col  px-4 py-2">
                        <label>Alamat</label>
                        {{-- <input type="text" name="nisn" value="{{ old('nisn') }}"> --}}
                        <textarea name="alamat" id="" cols="30" rows="10">
                            {{ old('alamat',$data['alamat']) }}
                        </textarea>
                        @error('alamat')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="flex flex-col  px-4 py-2">
                        <label for="">Kelas</label>
                        <select name="kelas_id" id="" class="px-4 py-2 rounded-sm">
                            <option selected value="{{ $data['kelas_id'] }}">{{ $data['kelas_id'] }}</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item['id'] }}">{{ $item['nama_kelas'].' '.$item['kompetensi_keahlian'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="px-4 py-2">
                    <button type="submit" class="bg-slate-900 py-2 px-4 rounded-md text-white"><i class="fa fa-save mr-3"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-layoutt>