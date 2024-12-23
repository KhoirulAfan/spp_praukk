<x-layoutt>
    <x-header>Tambah Data Pembayaran</x-header>
    <div class="mt-5">               
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('pembayaran.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="mt-4 bg-slate-400 rounded-sm">
            <form action="{{ route('pembayaran.store') }}" method="POST" >
                @csrf   
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>tanggal bayar</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="date" 
                        name="tgl_bayar" 
                        value="{{ old('tgl_bayar') }}">
                        @error('tgl_bayar')
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>                    
                    <div class="flex flex-col  px-4 py-2">
                        <label for="">siswa</label>
                        <select name="siswa_id" id="" class="px-4 py-2 rounded-sm">
                            <option value="">----pilih siswa----</option>
                            @foreach ($siswa as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('siswa_id')
                            <p class="text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="flex flex-col px-4 py-2">
                        <label>jumlah bayar</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="number" 
                        name="juml_bayar" 
                        value="{{ old('juml_bayar') }}">
                        @error('juml_bayar')
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div> 
                    <div class="flex flex-col  px-4 py-2">
                        <label for="">spp yang ingin dibayar</label>
                        <select name="spp_id" id="" class="px-4 py-2 rounded-sm">
                            <option value="">----pilih spp----</option>
                            @foreach ($spp as $item)
                                <option value="{{ $item->id }}">{{ 'tahun '.$item->tahun.' nominal '.$item->nominal }}</option>
                            @endforeach
                        </select>
                        @error('siswa_id')
                        <p class="text-red-500">                        
                            {{ $message }}
                        </p>
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