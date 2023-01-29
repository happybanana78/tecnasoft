<div class="mt-10">
    <h2 class="text-slate-700 font-semibold text-4xl">Points</h2>
    <table class="table-auto border-collapse border border-spacing-2 w-full mt-10 text-xl">
        <thead class="bg-green-500">
            <tr>
                <th class="p-2 border border-green-800">Nome point</th>
                <th class="p-2 border border-green-800">Sede point</th>
                <th class="p-2 border border-green-800">Attivo</th>
                <th class="p-2 border border-green-800"></th>
            </tr>
        </thead>
        <tbody>
            @if (count($points) === 0)
                <tr class="bg-white">
                    <td class="p-2"></td><td></td><td></td><td></td>
                </tr>
            @else
                @foreach ($points as $point)
                    <tr class="bg-white">
                        <td class="p-2 border border-green-800">
                            {{ $point->name }}
                        </td>
                        <td class="p-2 border border-green-800">
                            {{ $point->location }}
                        </td>
                        <td class="p-2 border border-green-800">
                            @if ($point->is_active)
                                Si
                            @else
                                No
                            @endif
                        </td>
                        <td class="p-2 border border-green-800 flex items-center space-x-2 justify-center">
                            <a href="{{ route('admin.points.show', ['point' => $point->id]) }}"><i class="fa-regular fa-eye text-2xl text-slate-700 @if(!$point->is_active) hidden @endif"></i></a>
                            <button wire:click="disable({{$point->id}})"><i class="fa-solid fa-ban text-2xl text-slate-700 @if(!$point->is_active) hidden @endif"></i></button>
                            <button wire:click="enable({{$point->id}})"><i class="fa-solid fa-rotate-right text-2xl text-slate-700 @if ($point->is_active) hidden @endif"></i></button>
                        </td>
                    </tr> 
                @endforeach
            @endif

        </tbody>
    </table>
</div>