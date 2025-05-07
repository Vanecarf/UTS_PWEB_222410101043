@extends('layouts.app')

@section('content')
<div class="p-6 bg-gray-50 min-h-screen">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Profile Card -->
        <div class="bg-white border p-6 rounded-xl shadow flex flex-col items-center text-center">
            <img src="{{ asset('neca.png') }}" class="w-24 h-24 rounded-full object-cover mb-4 border-4 border-[#962A48]">
            @php
                $user = session('user');
            @endphp
            <h2 class="font-bold text-xl text-[#962A48]">Welcome, {{ $user['name'] ?? 'Guest' }}</h2>
            <p class="text-sm text-gray-600 mt-2">Points: <span class="font-semibold text-[#962A48]">260</span></p>
            <p class="text-sm text-gray-600">Status: <span class="font-medium">Member</span></p>
            <span class="text-xs text-white bg-gray-500 px-3 py-1 mt-3 rounded-full">Silver</span>
        </div>

        <!-- Order Status -->
        <div class="md:col-span-2 grid grid-cols-2 sm:grid-cols-4 gap-4">
            @php
                $statuses = [
                    ['icon' => 'box', 'color' => '#962A48', 'label' => 'Packed', 'desc' => 'Siap Dikirim',"img"=>"https://www.morofashion.com/5987/flat-shoes-pita-sh173.jpg"],
                    ['icon' => 'truck', 'color' => '#2563eb', 'label' => 'Shipped', 'desc' => 'Sedang Dikirim',"img"=>"https://img.lazcdn.com/g/p/f1b12f452d53f489e6bfe1cb83a37ea4.jpg_720x720q80.jpg"],
                    ['icon' => 'check-circle', 'color' => '#16a34a', 'label' => 'Completed', 'desc' => 'Pesanan Selesai',"img"=>"https://img.lazcdn.com/g/p/f1b12f452d53f489e6bfe1cb83a37ea4.jpg_720x720q80.jpg"],
                    ['icon' => 'x-circle', 'color' => '#dc2626', 'label' => 'Cancelled', 'desc' => 'Pesanan Dibatalkan',"img"=>"https://media.banananina.id/catalog/product/0/1/01075594_d.jpg"],
                ];
            @endphp

            @foreach ($statuses as $status)
                <div class="relative flex flex-col items-center p-4 bg-white rounded-xl shadow hover:bg-gray-100 transition">
                    <div class="absolute -top-2 -right-2 bg-black text-white text-[10px] px-2 py-0.5 rounded-full shadow">
                        {{ $status['desc'] }}
                      </div>
                      <img src="{{$status['img']  }}" alt="">
                    <i data-lucide="{{ $status['icon'] }}" class="w-7 h-7 mb-2" style="color: {{ $status['color'] }}"></i>
                    <span class="text-sm font-semibold text-gray-700">{{ $status['label'] }}</span>
                </div>
            @endforeach
        </div>

        <!-- Address & Voucher -->
        <div class="md:col-span-2 mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-white border p-5 rounded-xl shadow">
                <h2 class="font-semibold text-lg mb-3 text-[#962A48]">Alamat Pengiriman</h2>
                <p class="text-sm text-gray-700">Jalan Melati Raya No. 53, Banyuwangi</p>
                <p class="text-sm text-gray-700">Kode Pos: 68412</p>
                <p class="text-sm text-gray-700 mt-1">Kontak: +62 812 3456 7890</p>
            </div>

            <div class="flex items-center p-5 bg-white border rounded-xl shadow hover:bg-gray-100 transition">
                <i data-lucide="tag" class="w-6 h-6 text-yellow-500 mr-3"></i>
                <div>
                    <p class="text-sm font-semibold">Voucher & Promo</p>
                    <p class="text-xs text-gray-500">Cek diskon spesial untukmu!</p>
                </div>
            </div>
        </div>

        <!-- Wishlist -->
        <div class="md:col-span-3 mt-6 bg-white border p-6 rounded-xl shadow">
            <div class="flex items-center gap-2 mb-4">
                <h3 class="text-lg font-semibold text-[#962A48]">Wishlist (Favorit)</h3>
                <i data-lucide="heart" class="w-5 h-5 text-[#962A48]"></i>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- Item 1 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('item1.jpg') }}" class="w-full h-32 object-cover rounded mb-2" alt="Item 1">
                    <p class="text-sm font-semibold text-gray-800">Tas Kulit Premium</p>
                    <p class="text-xs text-gray-500">Rp450.000</p>
                </div>

                <!-- Item 2 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('item2.jpg') }}" class="w-full h-32 object-cover rounded mb-2" alt="Item 2">
                    <p class="text-sm font-semibold text-gray-800">Sepatu Sneakers Hitam</p>
                    <p class="text-xs text-gray-500">Rp380.000</p>
                </div>

                <!-- Item 3 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('item3.jpg') }}" class="w-full h-32 object-cover rounded mb-2" alt="Item 3">
                    <p class="text-sm font-semibold text-gray-800">Jaket Hoodie Pria</p>
                    <p class="text-xs text-gray-500">Rp295.000</p>
                </div>
            </div>

            <p class="text-xs text-gray-500 italic mt-4">Tambah produk ke favorit untuk belanja nanti 💖</p>
        </div>
    </div>
</div>
@endsection
