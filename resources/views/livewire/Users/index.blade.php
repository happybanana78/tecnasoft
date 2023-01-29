<div class="mt-10">
    <h2 class="text-slate-700 font-semibold text-4xl">Utenti</h2>
    <table class="table-auto border-collapse border border-spacing-2 w-full mt-10 text-xl">
        <thead class="bg-green-500">
            <tr>
                <th class="p-2 border border-green-800">Nome</th>
                <th class="p-2 border border-green-800">Email</th>
                <th class="p-2 border border-green-800"></th>
            </tr>
        </thead>
        <tbody>
            @if (count($users) === 0)
                <tr class="bg-white">
                    <td class="p-2"></td><td></td><td></td>
                </tr>
            @else
                @foreach ($users as $user)
                    <tr class="bg-white">
                        <td class="p-2 border border-green-800">
                            {{ $user->name }}
                        </td>
                        <td class="p-2 border border-green-800">
                            {{ $user->email }}
                        </td>
                        <td class="p-2 border border-green-800 flex items-center space-x-2 justify-center">
                            <a href="{{ route('admin.transactions.index', ['id' => $user->id]) }}"><i class="fa-solid fa-file-invoice-dollar text-2xl text-slate-700"></i></a>
                        </td>
                    </tr> 
                @endforeach
            @endif

        </tbody>
    </table>
</div>