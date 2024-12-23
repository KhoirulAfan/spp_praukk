
<x-layout>
    <div class="flex">
        <x-sidebar>        
        </x-sidebar>
        <main class="flex-1 py-5 px-7">           
            <div>
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layout>