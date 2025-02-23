
<div class="container">
    <h2>Client Admin Dashboard</h2>

    @if(session('success'))
        <div class="alert alert-success" style="color:green;">{{ session('success') }}</div>
    @endif

    <p>Welcome, {{ Auth::user()->name }}!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    <a href="{{ route('shorten.create') }}" style="background-color:blue;color:white;padding:5px;margin-left:5%;border-radius:5px;">
                        Create short URL
                    </a>
</div>
<a href="{{ route('clientadmin.dashboard') }}" class="mt-4 inline-block px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
    Back to Home
</a>
