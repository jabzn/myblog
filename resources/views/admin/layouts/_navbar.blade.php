<nav class="bg-blue-600 shadow-lg py-4">
    <div class="container mx-auto flex justify-between items-center text-white font-bold px-16">
        <a href="{{ url('/') }}">
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
