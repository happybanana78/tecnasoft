<div class="mt-10">
    @if( session('service_saved') )
        <div class="w-full p-2 bg-green-500 text-white font-semibold text-xl rounded-lg">
            {{ session('service_saved') }}
        </div>
    @endif
    <form wire:submit.prevent="save" class="mt-10 space-y-5 text-slate-700 text-2xl">
        @csrf
        <div class="grid grid-cols-2">
            <div>
                <span>Name:</span>
            </div>
            <div class="flex flex-col w-1/2">
                <input type="text" class="rounded-lg py-1 px-2" wire:model="service.name">
                @error('service.name')
                    <span class="text-red-700 text-lg">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div>
                <span>Price:</span>
            </div>
            <div class="flex flex-col w-1/2">
                <input type="text" class="rounded-lg py-1 px-2" wire:model="service.price">
                @error('service.price')
                    <span class="text-red-700 text-lg">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <button type="submit" class="bg-green-700 py-2 px-4 rounded-lg"><i class="fa-regular fa-floppy-disk text-2xl text-white"></i></button>
    </form>
</div>