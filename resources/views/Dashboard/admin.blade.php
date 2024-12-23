<x-layoutt>
    <x-header>Dashboard</x-header>
    <div class="mt-5">
        SELAMAT DATANG ADMIN
    </div>
    <div class="mt-4">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
            <a href="{{ route('siswa.index') }}">
                <div class="h-32 rounded-lg bg-gray-200 hover:bg-gray-100 transition-all ease-in-out flex flex-col px-8 py-4  shadow-lg">
                 <span>Data Siswa</span>
                 <div class="w-full grid">
                    <p class="my-auto text-6xl font-bold">{{ $siswa }}</p>
                 </div>
                </div>            

            </a>
            <a href="{{ route('pembayaran.index') }}">
                <div class="h-32 rounded-lg bg-gray-200 hover:bg-gray-100 transition-all ease-in-out flex flex-col px-8 py-4  shadow-lg">
                 <span>Data Pembayaran</span>
                 <div class="w-full grid">
                    <p class="my-auto text-6xl font-bold">{{ $pembayaran }}</p>
                 </div>
                </div>            
            </a>
            <a href="{{ route('spp.index') }}">
                <div class="h-32 rounded-lg bg-gray-200 hover:bg-gray-100 transition-all ease-in-out flex flex-col px-8 py-4  shadow-lg">
                 <span>Data Spp</span>
                 <div class="w-full grid">
                    <p class="my-auto text-6xl font-bold">{{ $spp }}</p>
                 </div>
                </div>            

            </a>
            <a href="{{ route('kelas.index') }}">
                <div class="h-32 rounded-lg bg-gray-200 hover:bg-gray-100 transition-all ease-in-out flex flex-col px-8 py-4  shadow-lg">
                 <span>Data Kelas</span>
                 <div class="w-full grid">
                    <p class="my-auto text-6xl font-bold">{{ $kelas }}</p>
                 </div>
                </div>            
            </a>
          </div>
    </div>
</x-layoutt>