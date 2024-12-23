{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    
</body>
</html> --}}
<x-layout>

    
    <div class="bg-white max-w-96 mt-20 mx-auto p-6 rounded-sm shadow">
        <h2 class="font-bold text-2xl">Form Login</h2>
            @if (@session('error'))
            <small>
                <p class="text-red-400">
                    {{ session('error') }}
                </p>
            </small>
            @endif
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-5 mt-3">
                    <div class="">
                        <label for="">Username</label>
                        <input 
                        class="bg-slate-200 py-2 px-4 w-full rounded-sm shadow" 
                        type="text" name="username" placeholder="Masukan Username Anda">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input
                        class="bg-slate-200 py-2 px-4 w-full rounded-sm shadow" 
                        type="password" name="password">
                        @error('password')
                        {{ $message }}
                        @enderror   
                    </div>
                    <button type="submit" class="bg-slate-400 text-white py-2 px-4 rounded-sm shadow hover:bg-slate-500 transition-all 700">Login</button>
                </div>
            </form>
        </div>    
</x-layout>