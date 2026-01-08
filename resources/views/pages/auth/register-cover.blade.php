@extends('layouts.auth')

@section('title', 'Daftar - LaravaelUI Dashboard')

@section('content')
<div class="fixed inset-0 flex flex-col md:flex-row overflow-hidden bg-white dark:bg-gray-950" x-data>
    
    <div class="absolute top-6 right-6 z-[60]">
        <button @click="$store.theme.toggle()" 
            class="w-12 h-12 flex items-center justify-center rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800 text-gray-500 dark:text-gray-400 hover:text-indigo-600 transition-all shadow-sm active:scale-95">
            <i class="ti text-2xl" :class="$store.theme.theme === 'light' ? 'ti-moon' : 'ti-sun'"></i>
        </button>
    </div>

    <div class="hidden md:flex md:w-1/2 lg:w-3/5 relative overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop" 
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        
        <div class="absolute inset-0 bg-gradient-to-tr from-indigo-900/90 via-indigo-900/40 to-transparent backdrop-blur-[2px]"></div>

        <div class="relative z-10 w-full h-full p-16 flex flex-col justify-between text-white">
            <div class="flex items-center gap-3">
                <x-logo :with-text="false" size="md" />
            </div>

            <div class="max-w-xl space-y-6">
                <h2 class="text-5xl font-black leading-tight tracking-tight">Bergabung dan <br> <span class="text-indigo-400">Berkembang</span> Bersama.</h2>
                <p class="text-lg text-white/70 font-medium leading-relaxed">Dapatkan akses penuh ke fitur manajemen bisnis cerdas kami dan tingkatkan efisiensi kerja tim Anda.</p>
                
                <div class="grid grid-cols-2 gap-6 pt-4">
                    <div class="space-y-2">
                        <h4 class="text-2xl font-bold italic tracking-tighter text-indigo-400">99.9%</h4>
                        <p class="text-xs font-bold uppercase opacity-60 tracking-widest text-white">Server Uptime</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-2xl font-bold italic tracking-tighter text-indigo-400">24/7</h4>
                        <p class="text-xs font-bold uppercase opacity-60 tracking-widest text-white">Priority Support</p>
                    </div>
                </div>
            </div>

            <p class="text-sm font-medium opacity-50 italic">© 2026 LaravaelUI Dashboard. All rights reserved.</p>
        </div>
    </div>

    <div class="w-full md:w-1/2 lg:w-2/5 h-full flex flex-col justify-center items-center p-8 md:p-12 lg:p-16 relative bg-white dark:bg-gray-950 overflow-y-auto no-scrollbar">
        
        <div class="md:hidden absolute top-8 left-8 flex items-center gap-2">
            <div class="w-8 h-8 bg-indigo-600 rounded-xl flex items-center justify-center text-white">
                <i class="ti ti-brand-laravel text-xl"></i>
            </div>
            <span class="text-lg font-black dark:text-white uppercase tracking-tighter">LaravaelUI</span>
        </div>

        <div class="w-full max-w-md space-y-8 py-10">
            <div class="space-y-2">
                <h3 class="text-3xl font-black text-gray-900 dark:text-white tracking-tight">Daftar Akun</h3>
                <p class="text-gray-500 dark:text-gray-400 font-medium">Buat akun gratis Anda hanya dalam beberapa detik.</p>
            </div>

            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div class="space-y-4">
                    <x-input 
                        label="Nama Lengkap" 
                        name="name" 
                        type="text" 
                        icon="user" 
                        placeholder="John Doe" 
                        required 
                    />

                    <x-input 
                        label="Alamat Email" 
                        name="email" 
                        type="email" 
                        icon="mail" 
                        placeholder="nama@email.com" 
                        required 
                    />

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <x-input 
                            label="Password" 
                            name="password" 
                            type="password" 
                            icon="lock" 
                            placeholder="••••••••" 
                            required 
                        />
                        <x-input 
                            label="Konfirmasi" 
                            name="password_confirmation" 
                            type="password" 
                            icon="circle-check" 
                            placeholder="••••••••" 
                            required 
                        />
                    </div>
                </div>

                <div class="flex items-center">
                    <x-checkbox name="terms" label="Saya setuju dengan Syarat & Ketentuan" />
                </div>

                <x-button type="submit" variant="primary" class="w-full ">
                    Daftar Sekarang
                </x-button>

                <div class="relative flex items-center py-2">
                    <div class="flex-grow border-t border-gray-100 dark:border-gray-800"></div>
                    <span class="flex-shrink mx-4 text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em]">Cepat Dengan</span>
                    <div class="flex-grow border-t border-gray-100 dark:border-gray-800"></div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <x-button variant="secondary" icon="brand-google" class="w-full text-xs">Google</x-button>
                    <x-button variant="secondary" icon="brand-github" class="w-full text-xs">Github</x-button>
                </div>
            </form>

            <p class="text-center text-sm text-gray-500 font-medium">
                Sudah punya akun? 
                <a href="#" class="text-indigo-600 font-bold hover:underline underline-offset-4">Masuk Sekarang</a>
            </p>
        </div>

    </div>
</div>
@endsection