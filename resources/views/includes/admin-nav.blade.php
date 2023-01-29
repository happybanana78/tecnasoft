{{-- Admin navigation bar --}}
<nav class="flex justify-between items-center p-5 bg-green-700">
    <a href="/" class="w-24 h-24">
        <img src="{{asset('images/logo.jpg')}}" alt="company logo">
    </a>
    <ul class="flex space-x-4 items-center text-2xl font-semibold text-white">
        <li class="hover:text-green-200 ease-in duration-100">
            <a href="{{ route('admin.points.index') }}">Points</a>
        </li>
        <li class="hover:text-green-200 ease-in duration-100">
            <a href="{{ route('admin.users.index') }}">Utenti</a>
        </li>
        <li>
            <form action="/logout" method="POST" class="py-2 px-4 rounded-lg bg-red-800 flex items-center
            space-x-2 border border-green-700 hover:border-white ease-in duration-100 cursor-pointer">
                @csrf
                <i class="fa-solid fa-right-from-bracket"></i>
                <button class="w-full">Logout</button>
            </form>
        </li>
    </ul>
</nav>