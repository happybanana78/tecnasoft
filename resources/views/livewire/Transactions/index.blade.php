<div class="mt-10">
    <h2 class="text-slate-700 font-semibold text-4xl">{{ $user->name }} Transazioni</h2>
    <table class="table-auto border-collapse border border-spacing-2 w-full mt-10 text-xl">
        <thead class="bg-green-500">
            <tr>
                <th class="p-2 border border-green-800">Nome servizio</th>
                <th class="p-2 border border-green-800">Costo</th>
                <th class="p-2 border border-green-800">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            @if (count($trxs) === 0)
                <tr class="bg-white">
                    <td class="p-2"></td><td></td><td></td><td></td>
                </tr>
            @else
                @foreach ($trxs as $trx)
                    <tr class="bg-white">
                        <td class="p-2 border border-green-800">
                            {{ $trx->service->name }}
                        </td>
                        <td class="p-2 border border-green-800">
                            {{ $trx->cost }}
                        </td>
                        <td class="p-2 border border-green-800">
                            {{ $trx->description ?? '-' }}
                        </td>
                    </tr> 
                @endforeach
            @endif

        </tbody>
    </table>
</div>