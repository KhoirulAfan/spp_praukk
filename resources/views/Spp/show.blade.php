
<x-layoutt>
    <x-header>Detail spp</x-header>
    <div class="mt-5">               
        <div class="mt-4">
            <a  class="bg-slate-900 text-white px-4 py-2 rounded   shadow-sm" href="{{ route('spp.index') }}">
                <i class=" fa fa-arrow-left mr-1"></i>
                Kembali</a>
            
        </div>
        <div class="mt-4 bg-slate-400 rounded-sm">
            <div class="p-5">
                <ul>
                    <li>Tahun : {{ $data['tahun'] }}</li>
                    <li>Nominal : {{ $data['nominal'] }}</li>
                </ul>
            </div>
        </div>
    </div>
</x-layoutt>