<x-layoutt>
    <x-header>Tambah Data Petugas</x-header>
    <div class="mt-5">               
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('petugas.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="mt-4 bg-slate-400 rounded-sm">
            <form action="{{ route('petugas.store') }}" method="POST" >
                @csrf   
                <input type="hidden" name="role" value="petugas">
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>Nama</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" 
                        name="name" 
                        value="{{ old('name') }}">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>                   
                    <div class="flex flex-col px-4 py-2">
                        <label>Password</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" 
                        name="password" 
                        value="{{ old('password') }}">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>                   
                </div>
                <div class="grid grid-cols-2">
                    <div class="flex flex-col px-4 py-2">
                        <label>Username</label>
                        <input 
                        class="px-4 py-2 rounded-sm"
                        type="text" 
                        name="username" 
                        value="{{ old('username') }}">
                        @error('username')
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