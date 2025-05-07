<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Simulasi data user
    public function login (Request $request){
        $user = [
            'name' => 'Vaneca',
            'points' => 260,
            'member_status' => 'Silver',
            'address' => 'JLNDMNMJBNNNVCVJFBNV',
            'profile_photo' => '/images/profile.jpg',
            'username' => 'neca',
            'password' => 'necaneca',
        ];
        if ($request->input('username')== $user['username'] && $request->input('password') == $user['password']){
            session(['user'=>$user]);
            return redirect()->route('dashboard');
        }
        else{
            return back();
        }
    }

    // Simulasi data wishlist
    private $wishlist = [
        [
            'id' => 1,
            'name' => 'Flat Shoes XXXXXXXXX',
            'price' => 100000,
            'rating' => 4.9,
            'sold' => '12K',
            'image' => '/images/shoes1.jpg',
            'quantity' => 1,
        ],
        [
            'id' => 2,
            'name' => 'Flat Shoes XXXXXXXXX',
            'price' => 100000,
            'rating' => 4.9,
            'sold' => '12K',
            'image' => '/images/shoes2.jpg',
            'quantity' => 1,
        ],
    ];

    

    public function updateProfile(Request $request)
    {
        // logika penyimpanan data profil
        // contoh: $request->username, $request->password
        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }

    public function updateWishlist(Request $request)
    {
        // logika update jumlah / hapus wishlist berdasarkan request
        return redirect()->back()->with('success', 'Wishlist berhasil diperbarui.');
    }

    public function checkoutWishlist(Request $request)
    {
        // logika checkout dari wishlist
        return redirect()->back()->with('success', 'Checkout berhasil.');
    }
}
