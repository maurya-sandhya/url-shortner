<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create short Url</title>
</head>
<body>
<h3>Create short url</h3>
    @if(session('success'))
        <div class="alert alert-success" style="color:green;">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('shorten.store') }}">
        @csrf
        <label>Url:</label>
        <input type="url" name="long_url" required placeholder="Enter URL">
         <button type="submit">Shorten</button>

    </form>

</div>
<a href="{{ route('clientadmin.dashboard') }}" class="mt-4 inline-block px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
    Back to Home
</a>
</body>
</html>