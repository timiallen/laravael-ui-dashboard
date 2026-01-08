@extends('layouts.app')

@section('title', 'Buttons UI Kit')

@section('content')
<div class="space-y-10 pb-20">
    
    <div class="flex flex-col gap-2">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">Buttons</h1>
        <p class="text-gray-500 dark:text-gray-400 font-medium text-sm">Koleksi komponen tombol modern yang dibangun dengan Laravel Blade Components.</p>
    </div>

    <section class="space-y-4" x-data="{ showCode: false }">
        <div class="flex items-center justify-between">
            <h3 class="text-xs font-bold uppercase text-indigo-600 dark:text-indigo-400">Button Variants</h3>
            <button @click="showCode = !showCode" class="text-[10px] font-bold uppercase tracking-wider text-gray-400 hover:text-indigo-600 transition-colors flex items-center gap-1 font-mono">
                <i class="ti" :class="showCode ? 'ti-eye-off' : 'ti-code'"></i>
                <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
            </button>
        </div>

        <div class="bg-white dark:bg-gray-900 rounded-3xl border border-gray-200 dark:border-gray-800  overflow-hidden transition-all">
            <div class="p-8 flex flex-wrap gap-4">
                <x-button variant="primary">Primary Button</x-button>
                <x-button variant="secondary">Secondary</x-button>
                <x-button variant="danger">Danger</x-button>
                <x-button variant="success">Success</x-button>
            </div>

            <div x-show="showCode" x-collapse x-cloak>
                <div class="bg-gray-50 dark:bg-gray-950 border-t border-gray-100 dark:border-gray-800 p-6">
                    <pre class="text-[11px] text-gray-600 dark:text-gray-400 font-mono"><code>&lt;x-button variant="primary"&gt;Primary Button&lt;/x-button&gt;
&lt;x-button variant="secondary"&gt;Secondary&lt;/x-button&gt;
&lt;x-button variant="danger"&gt;Danger&lt;/x-button&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <section class="space-y-4" x-data="{ showCode: false }">
        <div class="flex items-center justify-between">
            <h3 class="text-xs font-bold uppercase text-indigo-600 dark:text-indigo-400">With Icons</h3>
            <button @click="showCode = !showCode" class="text-[10px] font-bold uppercase tracking-wider text-gray-400 hover:text-indigo-600 transition-colors flex items-center gap-1 font-mono">
                <i class="ti" :class="showCode ? 'ti-eye-off' : 'ti-code'"></i>
                <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
            </button>
        </div>

        <div class="bg-white dark:bg-gray-900 rounded-3xl border border-gray-200 dark:border-gray-800  overflow-hidden">
            <div class="p-8 flex flex-wrap gap-4">
                <x-button variant="primary" icon="plus">Tambah Data</x-button>
                <x-button variant="success" icon="device-floppy">Simpan</x-button>
                <x-button variant="secondary" icon="bell" class="p-3" />
            </div>

            <div x-show="showCode" x-collapse x-cloak>
                <div class="bg-gray-50 dark:bg-gray-950 border-t border-gray-100 dark:border-gray-800 p-6">
                    <pre class="text-[11px] text-gray-600 dark:text-gray-400 font-mono"><code>&lt;x-button variant="primary" icon="plus"&gt;Tambah Data&lt;/x-button&gt;
&lt;x-button variant="secondary" icon="bell" class="p-3" /&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <section class="space-y-4" x-data="{ showCode: false }">
        <div class="flex items-center justify-between">
            <h3 class="text-xs font-bold uppercase text-indigo-600 dark:text-indigo-400">Button Sizes</h3>
            <button @click="showCode = !showCode" class="text-[10px] font-bold uppercase tracking-wider text-gray-400 hover:text-indigo-600 transition-colors flex items-center gap-1 font-mono">
                <i class="ti" :class="showCode ? 'ti-eye-off' : 'ti-code'"></i>
                <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
            </button>
        </div>

        <div class="bg-white dark:bg-gray-900 rounded-3xl border border-gray-200 dark:border-gray-800 overflow-hidden transition-all">
            <div class="p-8 flex items-center flex-wrap gap-4">
                <x-button variant="primary" size="sm">Small</x-button>
                <x-button variant="primary" size="md">Default (Medium)</x-button>
                <x-button variant="primary" size="lg">Large Button</x-button>
            </div>

            <div x-show="showCode" x-collapse x-cloak>
                <div class="bg-gray-50 dark:bg-gray-950 border-t border-gray-100 dark:border-gray-800 p-6">
                    <pre class="text-[11px] text-gray-600 dark:text-gray-400 font-mono"><code>&lt;x-button size="sm"&gt;Small&lt;/x-button&gt;
&lt;x-button size="md"&gt;Default&lt;/x-button&gt;
&lt;x-button size="lg"&gt;Large Button&lt;/x-button&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection