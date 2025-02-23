
<div class="container">
    <h2>Super Admin Dashboard</h2>

    @if(session('success'))
        <div class="alert alert-success" style="color:green;">{{ session('success') }}</div>
    @endif

    <p>Welcome, {{ Auth::user()->name }}!</p>
    <a href="{{ route('logout') }}">Logout</a>
    <h3>Invite a New Client Admin</h3>
    <form method="POST" action="{{ route('superadmin.invite') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Send Invitation</button>
    </form>

</div>
<a href="{{ route('dashboard') }}" class="mt-4 inline-block px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
    Back to Home
</a>
