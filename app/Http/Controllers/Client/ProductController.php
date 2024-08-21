<?php

namespace App\Http\Controllers\Client;
use App\Models\Product;
class ProductController
{
    public function index()
    {
        $products = Product::paginate(20);
        return view('main.shop', ['products' => $products]);
//        return view('main.shop-list', ['products' => $products]);
    }
    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        // Lấy giỏ hàng của người dùng đang đăng nhập
        $cart = auth()->user()->cart;

        // Lọc các mặt hàng trong giỏ hàng dựa trên truy vấn tìm kiếm
        $filteredCartItems = $cart->items->filter(function ($item) use ($searchQuery) {
            return stripos($item->name, $searchQuery) !== false;
        });

        return view('shop-cart', compact('filteredCartItems', 'cart'));
    }

    public function shop_details($id)
    {
        $products = Product::all();
        return view('main.shop-details',['products' => $products]);
    }

//    public function home_index()
//    {
//        $products = Product::all();
//        return view('main.index',['products' => $products]);
//    }
}

