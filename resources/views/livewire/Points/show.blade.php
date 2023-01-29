<div class="mt-10">
    <h2 class="text-slate-700 font-semibold text-4xl">{{ $point->name }} servizi</h2>
    <table class="table-auto border-collapse border border-spacing-2 w-full mt-10 text-xl">
        <thead class="bg-green-500">
            <tr>
                <th class="p-2 border border-green-800">Nome servizio</th>
                <th class="p-2 border border-green-800">Nome point</th>
                <th class="p-2 border border-green-800">Prezzo</th>
                <th class="p-2 border border-green-800">Attivo</th>
                <th class="p-2 border border-green-800"></th>
            </tr>
        </thead>
        <tbody>
            @if (count($services) === 0)
                <tr class="bg-white">
                    <td class="p-2"></td><td></td><td></td><td></td><td></td>
                </tr>
            @else
                @foreach ($services as $service)
                    <tr class="bg-white">
                        <td class="p-2 border border-green-800">
                            {{ $service->name }}
                        </td>
                        <td class="p-2 border border-green-800">
                            {{ $point->name }}
                        </td>
                        <td class="p-2 border border-green-800">
                            {{ $service->price }}
                        </td>
                        <td class="p-2 border border-green-800">
                            @if ($service->is_active)
                                Si
                            @else
                                No
                            @endif
                        </td>
                        <td class="p-2 border border-green-800 flex items-center space-x-2 justify-center">
                            <a href="{{ route('admin.services.edit', ['service' => $service->id]) }}"><i class="fa-regular fa-pen-to-square text-2xl text-slate-700 @if(!$service->is_active) hidden @endif"></i></a>
                            <button wire:click="disable({{$service->id}})"><i class="fa-solid fa-ban text-2xl text-slate-700 @if(!$service->is_active) hidden @endif"></i></button>
                            <button wire:click="enable({{$service->id}})"><i class="fa-solid fa-rotate-right text-2xl text-slate-700 @if ($service->is_active) hidden @endif"></i></button>
                        </td>
                    </tr> 
                @endforeach
            @endif

        </tbody>
    </table>
</div>