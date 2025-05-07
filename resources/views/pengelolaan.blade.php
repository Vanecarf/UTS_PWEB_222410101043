@extends('layouts.app')
@section('content')
<div class="m-9">

  
  <form id="wishlistForm" class="space-y-6">

        <!-- Wishlist Item -->
        <div class="border rounded-lg p-4 flex gap-4 items-center bg-white shadow-sm hover:shadow-lg transition-all transform hover:scale-105">
            <input type="checkbox" class="item-check w-5 h-5 text-[#962A48] focus:ring-[#962A48]" onchange="updateTotal()">
            
            <img src="{{ asset('shoes.png') }}" alt="Product" class="rounded-lg w-20 h-20 object-cover shadow-sm">
            
            <div class="flex-1">
                <h3 class="font-bold text-lg text-gray-800">Flat Shoes XXXXXXXXXXXXXXXX</h3>
                <p class="text-base text-[#962A48]">Rp 100.000</p>
                <p class="text-xs text-gray-500">⭐ 4.9 | 12K sold</p>
            </div>
            
            <div class="flex items-center border  overflow-hidden bg-gray-100">
                <button type="button" onclick="changeQty(this, -1)" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 text-base font-semibold transition-all">−</button>
                <span class="px-3 py-2 qty text-base font-semibold">1</span>
                <button type="button" onclick="changeQty(this, 1)" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 text-base font-semibold transition-all">+</button>
            </div>

            <button type="button" onclick="removeItem(this)" class="text-xs text-red-500 hover:text-red-700 transition-all ml-3">Remove</button>
        </div>

        <!-- Wishlist Item -->
        <div class="border rounded-lg p-4 flex gap-4 items-center bg-white shadow-sm hover:shadow-lg transition-all transform hover:scale-105">
            <input type="checkbox" class="item-check w-5 h-5 text-[#962A48] focus:ring-[#962A48]" onchange="updateTotal()">
            
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/97/MTA-155151906/brd-03749_sepatu-sporty-sneakers-shoes-jn8803a_full01-7fb2fb22.jpg" alt="Product" class="rounded-lg w-20 h-20 object-cover shadow-sm">
            
            <div class="flex-1">
                <h3 class="font-bold text-lg text-gray-800">Flat Shoes Reika</h3>
                <p class="text-base text-[#962A48]">Rp 250.000</p>
                <p class="text-xs text-gray-500">⭐ 4.8 | 10K sold</p>
            </div>
            
            <div class="flex items-center border rounded-full overflow-hidden bg-gray-100">
                <button type="button" onclick="changeQty(this, -1)" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 text-base font-semibold transition-all">−</button>
                <span class="px-3 py-2 qty text-base font-semibold">1</span>
                <button type="button" onclick="changeQty(this, 1)" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 text-base font-semibold transition-all">+</button>
            </div>

            <button type="button" onclick="removeItem(this)" class="text-xs text-red-500 hover:text-red-700 transition-all ml-3">Remove</button>
        </div>

        <!-- Total & Checkout -->
        <div class="border-t pt-4 flex justify-between items-center mt-6 bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center gap-2">
                <input type="checkbox" id="checkAll" onchange="toggleAll()" class="w-5 h-5 text-[#962A48] focus:ring-[#962A48]">
                <label for="checkAll" class="text-base font-semibold text-gray-800">Select All</label>
            </div>
            <div class="text-lg font-bold text-[#962A48]">
                Total: <span id="totalPrice">Rp 0</span>
              </div>
              <button type="submit" class="bg-[#962A48] text-white px-6 py-3 rounded-full text-base font-semibold hover:bg-[#8A1E41] transition-colors shadow-md">
                Checkout (<span id="checkoutCount">0</span>)
              </button>
            </div>
          </form>
          
        </div>

<script>
    function changeQty(btn, delta) {
        const qtyEl = btn.parentElement.querySelector('.qty');
        let qty = parseInt(qtyEl.textContent);
        qty = Math.max(1, qty + delta);
        qtyEl.textContent = qty;
        updateTotal();
    }

    function removeItem(btn) {
        const item = btn.closest('.border');
        item.remove();
        updateTotal();
    }

    function toggleAll() {
        const allChecked = document.getElementById('checkAll').checked;
        document.querySelectorAll('.item-check').forEach(cb => cb.checked = allChecked);
        updateTotal();
    }

    function updateTotal() {
        let total = 0;
        let count = 0;
        document.querySelectorAll('.item-check').forEach(cb => {
            if (cb.checked) {
                const qty = parseInt(cb.parentElement.querySelector('.qty').textContent);
                const price = parseInt(cb.parentElement.querySelector('p').textContent.replace("Rp", "").replace(".", "").trim());
                total += price * qty; // Update price dynamically
                count++;
            }
        });
        document.getElementById('totalPrice').textContent = "Rp " + total.toLocaleString('id-ID');
        document.getElementById('checkoutCount').textContent = count;
    }
</script>

@endsection
