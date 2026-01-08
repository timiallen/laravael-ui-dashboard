<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method Helper untuk mendapatkan data dummy
    private function getProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'Macbook Pro M3 Max',
                'category' => 'Electronics',
                'price' => 52000000,
                'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=400&auto=format&fit=crop',
                'stock' => 12,
                'rating' => 4.9,
                'status' => 'Tersedia',
                'description' => 'Laptop tercanggih untuk alur kerja paling berat. Dilengkapi chip M3 Max.'
            ],
            [
                'id' => 2,
                'name' => 'Sony WH-1000XM5',
                'category' => 'Audio',
                'price' => 5999000,
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=400&auto=format&fit=crop',
                'stock' => 0,
                'rating' => 4.8,
                'status' => 'Stok Habis',
                'description' => 'Headphone Noise Cancelling terbaik di kelasnya dengan kualitas audio resolusi tinggi.'
            ],
            [
                'id' => 3,
                'name' => 'Mechanical Keyboard G-Pro',
                'category' => 'Accessories',
                'price' => 2400000,
                'image' => 'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?q=80&w=400&auto=format&fit=crop',
                'stock' => 45,
                'rating' => 4.7,
                'status' => 'Tersedia',
                'description' => 'Keyboard mechanical tactile yang didesain untuk atlet e-sport.'
            ],
            [
                'id' => 4,
                'name' => 'iPhone 15 Pro Titanium',
                'category' => 'Electronics',
                'price' => 21000000,
                'image' => 'https://images.unsplash.com/photo-1510557880182-3d4d3cba3f21?q=80&w=400&auto=format&fit=crop',
                'stock' => 8,
                'rating' => 4.9,
                'status' => 'Stok Menipis',
                'description' => 'iPhone pertama dengan desain titanium sekelas industri dirgantara.'
            ],
        ];
    }

    public function index()
    {
        $products = $this->getProducts();
        return view('pages.ecommerces.products', compact('products'));
    }

    public function create()
    {
        $categories = ['Electronics', 'Audio', 'Accessories', 'Wearables', 'Fashion'];
        return view('pages.ecommerces.product-create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Simulasi sukses simpan data
        return redirect()
            ->route('ecommerce.products.index')
            ->with('success', 'Produk berhasil ditambahkan ke katalog.');
    }

    public function show($id)
    {
        $product = collect($this->getProducts())->firstWhere('id', $id);
        
        if (!$product) abort(404);

        return view('pages.ecommerces.product-show', compact('product'));
    }

    public function edit($id)
    {
        $product = collect($this->getProducts())->firstWhere('id', $id);
        $categories = ['Electronics', 'Audio', 'Accessories', 'Wearables', 'Fashion'];

        if (!$product) abort(404);

        return view('pages.ecommerces.product-edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Simulasi sukses update data
        return redirect()
            ->route('ecommerce.products.index')
            ->with('success', 'Perubahan produk berhasil disimpan.');
    }

    public function destroy($id)
    {
        // Simulasi sukses hapus data
        return redirect()
            ->route('ecommerce.products.index')
            ->with('success', 'Produk telah dihapus dari sistem.');
    }
}