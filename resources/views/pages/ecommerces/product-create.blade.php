@extends('layouts.app')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="space-y-10 pb-20">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-2 text-gray-400 mb-2">
                <a href="{{ route('ecommerce.products.index') }}" class="hover:text-indigo-600 transition-colors text-xs font-bold uppercase tracking-widest">Katalog</a>
                <i class="ti ti-chevron-right text-xs"></i>
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600">Tambah Produk</span>
            </div>
            <h1 class="text-3xl font-semibold text-gray-900 dark:text-white tracking-tight">Buat Produk Baru</h1>
            <p class="text-gray-500 dark:text-gray-400 font-medium text-sm">Lengkapi detail produk Anda untuk mulai menjual ke pelanggan.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('ecommerce.products.index') }}" class="px-6 py-2.5 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 font-semibold rounded-2xl hover:bg-gray-50 transition-all">
                Batalkan
            </a>
            <button type="submit" form="productForm" class="px-8 py-2.5 bg-indigo-600 text-white font-semibold rounded-2xl hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-500/25 active:scale-95">
                Simpan Produk
            </button>
        </div>
    </div>

    <form id="productForm" action="{{ route('ecommerce.products.store') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        
        <div class="lg:col-span-2 space-y-8">
            <div class="bg-white dark:bg-gray-900 rounded-[2.5rem] border border-gray-100 dark:border-gray-800 p-8 shadow-sm space-y-6">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <i class="ti ti-info-circle text-indigo-600"></i> Informasi Umum
                </h3>
                
                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase ml-1 tracking-wider">Nama Produk</label>
                    <input type="text" name="name" required class="w-full bg-gray-50 dark:bg-gray-800 border-none rounded-2xl px-5 py-4 text-sm font-bold dark:text-white outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all" placeholder="Contoh: Macbook Pro M3 14-inch 2024">
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase ml-1 tracking-wider">Deskripsi</label>
                    <textarea name="description" rows="8" class="w-full bg-gray-50 dark:bg-gray-800 border-none rounded-[2rem] px-6 py-5 text-sm font-medium dark:text-white outline-none focus:ring-2 focus:ring-indigo-500/20 resize-none" placeholder="Tuliskan spesifikasi lengkap, fitur unggulan, dan informasi lainnya..."></textarea>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-900 rounded-[2.5rem] border border-gray-100 dark:border-gray-800 p-8 shadow-sm">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                    <i class="ti ti-box text-indigo-600"></i> Harga & Inventaris
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase ml-1 tracking-wider">Harga Jual</label>
                        <div class="relative group">
                            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold text-sm">Rp</span>
                            <input type="number" name="price" required class="w-full bg-gray-50 dark:bg-gray-800 border-none rounded-2xl pl-14 pr-5 py-4 text-sm font-bold dark:text-white outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all" placeholder="0">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase ml-1 tracking-wider">Stok Tersedia</label>
                        <input type="number" name="stock" required class="w-full bg-gray-50 dark:bg-gray-800 border-none rounded-2xl px-5 py-4 text-sm font-bold dark:text-white outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all" placeholder="0">
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-8">
            <div class="bg-white dark:bg-gray-900 rounded-[2.5rem] border border-gray-100 dark:border-gray-800 p-8 shadow-sm">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                    <i class="ti ti-photo text-indigo-600"></i> Foto Produk
                </h3>
                <div class="space-y-4" x-data="{ preview: null }">
                    <div class="aspect-[4/5] w-full bg-gray-50 dark:bg-gray-800 border-2 border-dashed border-gray-200 dark:border-gray-700 rounded-[2rem] flex flex-col items-center justify-center p-6 text-center group hover:border-indigo-500 transition-all cursor-pointer relative overflow-hidden">
                        <template x-if="!preview">
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-white dark:bg-gray-900 rounded-2xl flex items-center justify-center shadow-sm mb-4 group-hover:scale-110 transition-transform">
                                    <i class="ti ti-upload text-2xl text-indigo-600"></i>
                                </div>
                                <p class="text-xs font-bold text-gray-900 dark:text-white uppercase tracking-wider">Pilih Foto</p>
                                <p class="text-[10px] text-gray-400 mt-1">Format JPG, PNG (Max. 2MB)</p>
                            </div>
                        </template>
                        <template x-if="preview">
                            <img :src="preview" class="absolute inset-0 w-full h-full object-cover">
                        </template>
                        <input type="file" name="image" class="absolute inset-0 opacity-0 cursor-pointer" 
                               @change="let file = $event.target.files[0]; if(file) { let reader = new FileReader(); reader.onload = (e) => preview = e.target.result; reader.readAsDataURL(file); }">
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-900 rounded-[2.5rem] border border-gray-100 dark:border-gray-800 p-8 shadow-sm space-y-6">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                    <i class="ti ti-category text-indigo-600"></i> Organisasi
                </h3>
                
                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase ml-1 tracking-wider">Kategori</label>
                    <div class="relative">
                        <select name="category" class="w-full bg-gray-50 dark:bg-gray-800 border-none rounded-2xl px-5 py-4 text-sm font-bold dark:text-white outline-none focus:ring-2 focus:ring-indigo-500/20 appearance-none cursor-pointer">
                            @foreach($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                        <i class="ti ti-chevron-down absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-50 dark:border-gray-800 space-y-4">
                    <div class="flex items-center justify-between p-2">
                        <div>
                            <p class="text-sm font-bold dark:text-white">Status Publikasi</p>
                            <p class="text-[10px] text-gray-400 font-medium">Tampilkan di toko online</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_active" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 dark:bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-indigo-600 after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all shadow-sm"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection