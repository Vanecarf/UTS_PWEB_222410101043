@extends('layouts.app')
@section('content')

<div class="flex flex-col md:flex-row items-center justify-center gap-10 p-10 rounded-xl shadow-xl">
    <!-- Profile Photo Section -->
    <div class="flex flex-col items-center p-6 bg-white rounded-full shadow-lg">
        <img src="{{ asset('neca.png') }}" alt="Foto Profil" class="w-36 h-36 rounded-full border-4 border-[#962A48] object-cover shadow-md transition-transform transform hover:scale-110">
        <button class="mt-3 text-sm text-[#962A48] font-semibold hover:underline hover:text-[#8A1E41] transition-all">Edit Foto Profil</button>
    </div>

    @php
      $user = session('user');
    @endphp

    <!-- Profile Form Section -->
    <div class="bg-white rounded-xl p-8 w-full max-w-lg shadow-lg border border-[#962A48] space-y-6">
        <h3 class="text-3xl font-extrabold text-center text-[#962A48] mb-6">Edit Profile</h3>

        <!-- Username -->
        <div>
            <label class="block text-sm font-semibold text-[#962A48] mb-1">Username</label>
            <input type="text" value="{{ $user['username'] }}" class="w-full p-4 rounded-lg bg-gray-100 text-[#962A48] font-semibold shadow-lg focus:ring-2 focus:ring-[#962A48] focus:outline-none disabled:opacity-70" disabled>
        </div>

        <!-- Password -->
        <div>
            <label class="block text-sm font-semibold text-[#962A48] mb-1">Password</label>
            <input type="password" value="***********" class="w-full p-4 rounded-lg bg-gray-100 text-[#962A48] font-semibold shadow-lg focus:ring-2 focus:ring-[#962A48] focus:outline-none disabled:opacity-70" disabled>
        </div>

        <!-- Edit Button -->
        <div class="flex justify-center">
            <button class="bg-[#962A48] text-white font-semibold py-3 px-8 rounded-full shadow-md hover:bg-[#8A1E41] transition-all transform hover:scale-105">Edit</button>
        </div>
    </div>
</div>

<!-- Recommended Products Section -->
<div class="mt-12 p-10 bg-white rounded-xl shadow-xl max-w-6xl mx-auto">
    <h3 class="text-3xl font-extrabold text-center text-[#962A48] mb-6">Recommended Products</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-xl transition-all transform hover:scale-105">
            <img src="https://im.berrybenka.com/assets/upload/product/zoom/227962_romeo-pacini-flat-shoes-100-maroon_maroon_YAFAB.jpg" alt="Flat Shoes" class="w-full h-48 object-cover rounded-lg mb-4">
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Flat Shoes Ayaka</h4>
            <p class="text-lg text-[#962A48] mb-2">Rp 100.000</p>
            <div class="flex items-center mb-4">
                <span class="text-yellow-400">⭐ 4.9</span> 
                <span class="text-sm text-gray-500 ml-2">12K sold</span>
            </div>
            <div class="flex justify-between items-center">
                <button class="bg-[#962A48] text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-[#8A1E41] transition-all">Add to Cart</button>
                <button class="bg-[#8A1E41] text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-[#962A48] transition-all">Buy Now</button>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-xl transition-all transform hover:scale-105">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQCJW1AWQx2TeJeEFADqQNUu0wDHobHxy4Fw&s" alt="Sporty Sneakers" class="w-full h-48 object-cover rounded-lg mb-4">
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Heels Kumbang</h4>
            <p class="text-lg text-[#962A48] mb-2">Rp 250.000</p>
            <div class="flex items-center mb-4">
                <span class="text-yellow-400">⭐ 4.8</span> 
                <span class="text-sm text-gray-500 ml-2">10K sold</span>
            </div>
            <div class="flex justify-between items-center">
                <button class="bg-[#962A48] text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-[#8A1E41] transition-all">Add to Cart</button>
                <button class="bg-[#8A1E41] text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-[#962A48] transition-all">Buy Now</button>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-xl transition-all transform hover:scale-105">
            <img src="https://cdn.thewirecutter.com/wp-content/media/2024/05/runningshoesforyou-2048px-2254.jpg?auto=webp&quality=75&width=1024" alt="Running Shoes" class="w-full h-48 object-cover rounded-lg mb-4">
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Flat Shoes Niyaka</h4>
            <p class="text-lg text-[#962A48] mb-2">Rp 150.000</p>
            <div class="flex items-center mb-4">
                <span class="text-yellow-400">⭐ 4.7</span> 
                <span class="text-sm text-gray-500 ml-2">8K sold</span>
            </div>
            <div class="flex justify-between items-center">
                <button class="bg-[#962A48] text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-[#8A1E41] transition-all">Add to Cart</button>
                <button class="bg-[#8A1E41] text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-[#962A48] transition-all">Buy Now</button>
            </div>
        </div>
    </div>
</div>

@endsection
