<div class="bg-slate-400 flex flex-col w-18 md:w-60 min-h-screen px-3 md:px-6 py-4 gap-3">
    <h1 class="text-xl font-bold hidden md:inline">PRAUKK TAHAP 1</h1>
    <div
    class="flex flex-col flex-1 gap-1">    
    @if (Auth::user()->role == 'admin')
        
        <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded"><i class="fa fa-home md:mr-3"></i><span class="hidden md:inline">Dashboard</span></a>
        <a href="{{ route('siswa.index') }}" class="{{ Route::is('siswa.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-users md:mr-3"></i><span class="hidden md:inline">siswa</span></a>
        <a href="{{ route('kelas.index') }}" class="{{ Route::is('kelas.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-suitcase md:mr-3"></i><span class="hidden md:inline">Kelas</span></a>
        <a href="{{ route('spp.index') }}" class="{{ Route::is('spp.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-university md:mr-3"></i><span class="hidden md:inline">Spp</span></a>        
        <a href="{{ route('pembayaran.index') }}" class="{{ Route::is('pembayaran.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-credit-card md:mr-3"></i><span class="hidden md:inline">Pembayaran</span></a>        
        <a href="{{ route('petugas.index') }}" class="{{ Route::is('petugas.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-user-plus md:mr-3"></i><span class="hidden md:inline">Petugas</span></a>        
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button class=" px-4 py-2 w-full rounded text-white bg-red-900"><i class="fa fa-reply md:mr-3"></i><span class="hidden md:inline">Logout</span></button>        

        </form>
    @elseif (Auth::user()->role == 'petugas')
        <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded"><i class="fa fa-home md:mr-3"></i><span class="hidden md:inline">Dashboard</span></a>
        {{-- <a href="{{ route('siswa.index') }}" class="{{ Route::is('siswa.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-users md:mr-3"></i><span class="hidden md:inline">siswa</span></a>
        <a href="{{ route('kelas.index') }}" class="{{ Route::is('kelas.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-suitcase md:mr-3"></i><span class="hidden md:inline">Kelas</span></a>
        <a href="{{ route('spp.index') }}" class="{{ Route::is('spp.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-university md:mr-3"></i><span class="hidden md:inline">Spp</span></a>         --}}
        <a href="{{ route('pembayaran.index') }}" class="{{ Route::is('pembayaran.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-credit-card md:mr-3"></i><span class="hidden md:inline">Pembayaran</span></a>        
        {{-- <a href="{{ route('petugas.index') }}" class="{{ Route::is('petugas.*') ? 'bg-slate-900 text-white' : '' }} px-4 py-2 w-full rounded text-slate-900"><i class="fa fa-user-plus md:mr-3"></i><span class="hidden md:inline">Petugas</span></a>         --}}
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button class=" px-4 py-2 w-full rounded text-white bg-red-900"><i class="fa fa-reply md:mr-3"></i><span class="hidden md:inline">Logout</span></button>        

        </form>
    @endif
    </div>
    <div>      
    </div>
</div>