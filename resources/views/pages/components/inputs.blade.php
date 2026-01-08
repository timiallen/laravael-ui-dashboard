@extends('layouts.app')

@section('title', 'Inputs')

@section('content')
    <div class="space-y-12 pb-20">

        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">Inputs</h1>
            <p class="text-gray-500 dark:text-gray-400 font-medium text-sm">Komponen input form yang mendukung ikon, label,
                dan validasi otomatis.</p>
        </div>

        <section class="space-y-6">
            <h3 class="text-xs font-bold uppercase text-indigo-600 dark:text-indigo-400 tracking-widest px-1">Basic Variants
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div x-data="{ show: false }" class="space-y-3">
                    <x-card class="relative">
                        <button @click="show = !show"
                            class="absolute top-6 right-8 text-gray-300 hover:text-indigo-600 transition-colors z-20">
                            <i class="ti" :class="show ? 'ti-code-off' : 'ti-code'"></i>
                        </button>
                        <x-input label="Nama Lengkap" name="fullname" placeholder="Masukkan nama sesuai KTP" />
                    </x-card>
                    <div x-show="show" x-collapse x-cloak
                        class="bg-gray-950 rounded-2xl p-4 font-mono text-[10px] text-indigo-300 overflow-x-auto shadow-inner">
                        <pre><code>&lt;x-input label="Nama Lengkap" name="fullname" placeholder="..." /&gt;</code></pre>
                    </div>
                </div>

                <div x-data="{ show: false }" class="space-y-3">
                    <x-card class="relative">
                        <button @click="show = !show"
                            class="absolute top-6 right-8 text-gray-300 hover:text-indigo-600 transition-colors z-20">
                            <i class="ti" :class="show ? 'ti-code-off' : 'ti-code'"></i>
                        </button>
                        <x-input type="password" label="Kata Sandi" name="password" icon="lock" placeholder="••••••••" />
                    </x-card>
                    <div x-show="show" x-collapse x-cloak
                        class="bg-gray-950 rounded-2xl p-4 font-mono text-[10px] text-indigo-300 overflow-x-auto shadow-inner">
                        <pre><code>&lt;x-input type="password" label="Kata Sandi" name="password" icon="lock" /&gt;</code></pre>
                    </div>
                </div>

            </div>
        </section>

        <section class="space-y-6">
            <h3 class="text-xs font-bold uppercase text-indigo-600 dark:text-indigo-400 tracking-widest px-1">Icons & Styles
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div x-data="{ show: false }" class="space-y-3">
                    <x-card class="relative">
                        <x-input name="search" icon="search" placeholder="Cari data..."
                            class="bg-indigo-50/30 dark:bg-indigo-500/5 border border-indigo-100 dark:border-indigo-500/20" />
                    </x-card>
                </div>

                <div x-data="{ show: false }" class="space-y-3">
                    <x-card class="relative">
                        <x-input type="number" label="Harga Produk" name="price" icon="currency-dollar"
                            placeholder="0" />
                    </x-card>
                </div>

                <div x-data="{ show: false }" class="space-y-3">
                    <x-card class="relative">
                        <x-input type="email" label="Email" name="email" icon="mail"
                            placeholder="admin@example.com" />
                    </x-card>
                </div>

            </div>
        </section>

        <section class="space-y-6">
            <h3 class="text-xs font-bold uppercase text-indigo-600 dark:text-indigo-400 tracking-widest px-1">Validation
                States</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div x-data="{ show: false }" class="space-y-3">
                    <x-card class="relative border-rose-100 dark:border-rose-900/30">
                        {{-- Simulasi Error Laravel secara manual untuk demo --}}
                        @php
                            $errors = new \Illuminate\Support\MessageBag([
                                'username' => ['Username ini sudah digunakan.'],
                            ]);
                        @endphp

                        <x-input label="Username" name="username" icon="at" value="rafael_nuansa" />

                        {{-- Reset errors setelah demo --}}
                        @php $errors = session()->get('errors', new \Illuminate\Support\MessageBag); @endphp
                    </x-card>
                </div>

                <div x-data="{ show: false }" class="space-y-3">
                    <x-card class="relative">
                        <x-input label="Subdomain" name="subdomain" icon="world" placeholder="my-store" />
                        <p class="text-[10px] text-gray-400 font-medium mt-2 ml-1">Domain Anda akan menjadi: <span
                                class="text-indigo-500 font-bold">my-store.laraui.com</span></p>
                    </x-card>
                </div>

            </div>
        </section>

        <section class="space-y-6 mt-12">
            <h3 class="text-xs font-bold uppercase text-indigo-600 dark:text-indigo-400 tracking-widest px-1">Checkboxes
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <x-card title="Simple Options">
                    <div class="space-y-4">
                        <x-checkbox name="remember" label="Ingat saya di perangkat ini" />
                        <x-checkbox name="newsletter" label="Langganan newsletter mingguan" checked />
                    </div>
                </x-card>

                <x-card title="With Descriptions">
                    <div class="space-y-6">
                        <x-checkbox name="privacy" label="Kebijakan Privasi"
                            description="Saya setuju dengan pengolahan data pribadi saya sesuai kebijakan yang berlaku." />

                        <x-checkbox name="updates" label="Update Keamanan"
                            description="Kirim notifikasi email jika ada aktivitas login yang mencurigakan." checked />
                    </div>
                </x-card>

            </div>
        </section>
        <section class="mt-12">
            <x-card title="Select">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    {{-- Kategori Produk --}}
                    <x-select label="Kategori Produk" name="category" icon="category">
                        <option value="">Semua Kategori</option>
                        <option value="electronics">Elektronik</option>
                        <option value="fashion">Fashion</option>
                        <option value="food">Makanan & Minuman</option>
                    </x-select>

                    {{-- Lokasi --}}
                    <x-select label="Pilih Lokasi" name="location" icon="map-pin">
                        <option value="">Semua Lokasi</option>
                        <option value="jakarta">Jakarta</option>
                        <option value="bandung">Bandung</option>
                        <option value="surabaya">Surabaya</option>
                    </x-select>

                </div>

            </x-card>

            <x-card class="mt-10" title="Textarea">
                <x-textarea label="Deskripsi Proyek" name="description"
                    placeholder="Tuliskan detail proyek Anda di sini..." />
            </x-card>
        </section>

    </div>
@endsection
