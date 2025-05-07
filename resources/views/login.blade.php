<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Login</title>
    {{-- @vite('resources/css/app.css') --}}
    {{-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Italiana&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style> --}}
</head>

<body class="flex h-screen overflow-hidden">
    <div class="flex-1 w-1/2 h-screen">
        <img src="image2.png" alt="Sandal" class="w-full h-full object-cover">
    </div>
    <div class="w-1/2 flex items-center justify-center">
        @section('logo')
        <div class="text-center mb-8">
            <h1 class="logo-font text-[#962A48] inline-block">
                <span class="text-4xl font-bold">S</span><span class="text-sm align-top tracking-tight">KY</span>
                <span class="text-4xl font-bold ml-1">S</span><span class="text-sm align-top tracking-tight">HOES</span>
            </h1>
        </div>
        @endsection
        <form method="POST" action="/login">
            <div class="bg-[#962A48] p-15 rounded-lg w-full max-w-md h-60">
            @csrf
                <div class="mb-4">
                    <label class="block text-white mb-2">Username</label>
                    <input type="text" name="username" class="w-full p-2 rounded bg-gray-200 outline-none focus:ring-2 focus:ring-pink-300">
                </div>
                <div class="mb-6">
                    <label class="block text-white mb-2">Password</label>
                    <input type="password" name="password" class="w-full p-2 rounded bg-gray-200 outline-none focus:ring-2 focus:ring-pink-300">
                </div>
            </div>
            <div class="flex justify-center m-5">
                <button type="submit" class="bg-gray-300 text-[#962A48] px-6 py-2 rounded hover:bg-gray-400">Login</button>
            </div>
        </form>
    </div>
</body>
</html>