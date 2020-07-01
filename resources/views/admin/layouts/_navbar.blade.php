<nav class="bg-blue-600 py-4 fixed w-full">
    <div class="container mx-auto flex justify-between items-center text-white font-bold">
        <a href="{{ url('/') }}" class="text-2xl">
            {{ config('app.name', 'Wordify') }}
        </a>

        <div>
            <div>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
