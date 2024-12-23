<x-layoutt>
    <x-header>Detail Pembayaran</x-header>
    <div class="mt-5">               
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('pembayaran.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="w-full">
            <div class="mt-4 md:w-2/3 lg:1/2 bg-slate-400 rounded-sm">
                <div class="p-5">
                    <ul>
                        <li>Nama Siswa : {{ $data->siswa->nama }}</li>                                                      
                        <li>NISN : {{ $data->siswa->nisn }}</li>                 
                        <li>Tanggal pembayaran : {{ $data->tgl_bayar }}</li>
                        <li>Jumlah Bayar : Rp {{ $data->juml_bayar }}</li>
                        <li>Jumlah nama petugas :  {{ $data->petugas->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layoutt>