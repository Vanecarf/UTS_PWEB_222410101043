<nav class="bg-[#8A1E41] text-white px-6 py-4 flex justify-between items-center">
    <div class="text-2xl font-serif">
        <span class="text-4xl">S</span>KY <span class="text-sm">Shoes</span>
    </div>
    <div class="text-lg font-semibold">
        Welcome, 
        @if(Auth::check())
            {{ Auth::user()->name }}
        @else
            Guest
        @endif
    </div>
    <ul class="flex gap-6 text-sm">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li><a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a></li>
        <li><a href="{{ route('pengelolaan') }}" class="hover:underline">Category</a></li>
        <li><a href="/order" class="hover:underline">Order</a></li>
    </ul>
    <div class="w-10 h-10 rounded-full overflow-hidden">
        <a href="{{ route('profile') }}">

            <img src="{{ asset('image2.png') }}" alt="Profile" class="w-full h-full object-cover">
        </a>
    </div>
</nav>
