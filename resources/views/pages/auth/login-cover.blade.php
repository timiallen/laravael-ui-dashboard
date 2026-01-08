@extends('layouts.auth')

@section('title', 'Login - Laravael Dashboard')

@section('content')
    <div class="fixed inset-0 flex flex-col md:flex-row overflow-hidden bg-white dark:bg-gray-950" x-data>

        {{-- Floating Theme Switcher --}}
        <div class="absolute top-6 right-6 z-[60]">
            <button @click="$store.theme.toggle()"
                class="
            w-11 h-11
            flex items-center justify-center
            rounded-2xl
            bg-white/70 dark:bg-gray-900/60
            backdrop-blur
            border border-gray-200 dark:border-gray-700
            text-gray-700 dark:text-gray-300
            hover:bg-white dark:hover:bg-gray-800
            hover:text-indigo-600 dark:hover:text-indigo-400
            transition-all duration-200
            active:scale-95
        ">
                <i class="ti text-xl transition-transform duration-200"
                    :class="$store.theme.theme === 'light' ?
                        'ti-moon' :
                        'ti-sun rotate-180'"></i>
            </button>
        </div>

        {{-- LEFT SIDE: BRANDING AREA (No Image, Dynamic Gradient & Typography) --}}
       <div
    class="
        hidden md:flex md:w-1/2 lg:w-3/5
        relative overflow-hidden
        bg-indigo-50
        dark:bg-indigo-600
    "
>
    {{-- ================= BACKGROUND DECORATIONS ================= --}}
    <div class="absolute inset-0 z-0">

        {{-- Gradient Top Left --}}
        <div
            class="
                absolute -top-[15%] -left-[15%]
                w-[70%] h-[70%]
                rounded-full blur-[140px]
                bg-indigo-300/40
                dark:bg-purple-500/50
            ">
        </div>

        {{-- Gradient Bottom Right --}}
        <div
            class="
                absolute -bottom-[15%] -right-[15%]
                w-[60%] h-[60%]
                rounded-full blur-[120px]
                bg-sky-300/40
                dark:bg-indigo-400/40
            ">
        </div>

        {{-- Dot Pattern (Light) --}}
        <div
            class="absolute inset-0 opacity-20 dark:hidden"
            style="
                background-image:
                radial-gradient(circle, rgba(0,0,0,.15) 1px, transparent 1px);
                background-size: 40px 40px;
            "
        ></div>

        {{-- Dot Pattern (Dark) --}}
        <div
            class="absolute inset-0 hidden dark:block opacity-20"
            style="
                background-image:
                radial-gradient(circle, rgba(255,255,255,.25) 1px, transparent 1px);
                background-size: 40px 40px;
            "
        ></div>

        {{-- Glass Strip --}}
        <div
            class="
                absolute top-1/2 left-1/2
                -translate-x-1/2 -translate-y-1/2
                w-[120%] h-[40%]
                rotate-12
                backdrop-blur-md
                bg-white/40
                dark:bg-white/5
                border-y
                border-black/5
                dark:border-white/10
            ">
        </div>
    </div>

    {{-- ================= CONTENT ================= --}}
    <div
        class="
            relative z-10 w-full h-full
            p-16 flex flex-col justify-between
            text-gray-900
            dark:text-white
        "
    >
        {{-- Logo --}}
        <div class="flex items-center gap-3">
            <div
                class="
                    w-12 h-12 rounded-2xl
                    bg-white
                    dark:bg-white
                    flex items-center justify-center
                    text-indigo-600
                "
            >
                <i class="ti ti-brand-laravel text-3xl font-black"></i>
            </div>
            <span class="text-2xl font-bold tracking-tight">
                Laravael UI
            </span>
        </div>

        {{-- Headline --}}
        <div class="max-w-xl space-y-8">

            <div class="space-y-4">
                <span
                    class="
                        inline-block px-4 py-2 rounded-full
                        text-xs font-semibold
                        bg-indigo-100 text-indigo-700
                        dark:bg-white/10 dark:text-white
                        border border-indigo-200
                        dark:border-white/20
                    "
                >
                   Laravael Dashboard UI Kit
                </span>

                <h2 class="text-6xl font-bold leading-[1.1] tracking-tight">
                   Tailwind UI Dashboard Kit for <br>
                    <span class="text-indigo-600 dark:text-indigo-200">
                     Laravel Framework
                    </span>
                </h2>
            </div>

            <p
                class="
                    text-xl font-medium leading-relaxed
                    text-gray-700
                    dark:text-indigo-50/80
                "
            >
                Elevate your development workflow with our meticulously crafted
                UI components and seamless Laravel integration.
            </p>

            {{-- Avatars --}}
            <div class="flex items-center gap-8 pt-4">
                <div class="flex -space-x-3">
                    @foreach ([1,2,3,4] as $i)
                        <x-avatar
                            src="https://i.pravatar.cc/150?u={{ $i + 20 }}"
                            size="sm"
                            shape="full"
                            class="border-none shadow-none"
                        />
                    @endforeach
                </div>
                <p class="text-sm font-bold text-gray-700 dark:text-white/80">
                    Join
                    <span class="underline decoration-indigo-400">
                        10k+ developers
                    </span>
                    worldwide.
                </p>
            </div>
        </div>

        {{-- Footer --}}
        <div
            class="
                flex items-center gap-6
                text-sm font-medium
                text-gray-600
                dark:text-white/60
            "
        >
            <span>© 2026 LaravaelUI</span>
            <span class="w-1 h-1 rounded-full bg-current"></span>
            <span>Premium Dashboard Kit</span>
        </div>
    </div>
</div>

        {{-- RIGHT SIDE: LOGIN FORM --}}
        <div
            class="w-full md:w-1/2 lg:w-2/5 h-full flex flex-col justify-center items-center p-8 md:p-16 lg:p-24 relative bg-white dark:bg-gray-950">

            {{-- Mobile Logo --}}
            <div class="md:hidden absolute top-8 left-8 flex items-center gap-2">
                <div
                    class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-indigo-600/20">
                    <i class="ti ti-brand-laravel text-2xl"></i>
                </div>
                <span class="text-xl font-bold dark:text-white tracking-tighter uppercase">LaravaelUI</span>
            </div>

            <div class="w-full max-w-md space-y-10">
                <div class="space-y-2">
                    <h3 class="text-4xl font-bold text-gray-900 dark:text-white tracking-tight">Welcome back</h3>
                    <p class="text-gray-500 dark:text-gray-400 font-medium">Please enter your details to sign in.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="space-y-5">
                        <x-input label="Email address" name="email" type="email" icon="mail"
                            placeholder="hello@example.com" required />

                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Password</label>
                                <a href="#"
                                    class="text-xs text-indigo-600 hover:text-indigo-500 transition-colors ">Forgot
                                    password?</a>
                            </div>
                            <x-input name="password" type="password" icon="lock" placeholder="••••••••" required />
                        </div>
                    </div>

                    <div class="flex items-center">
                        <x-checkbox name="remember" label="Keep me signed in" />
                    </div>

                    <x-button type="submit" icon="login" variant="primary" class="w-full">
                        Sign In
                    </x-button>

                    <div class="relative flex items-center py-4">
                        <div class="flex-grow border-t border-gray-100 dark:border-gray-900"></div>
                        <span class="flex-shrink mx-4 text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em]">Or
                            continue with</span>
                        <div class="flex-grow border-t border-gray-100 dark:border-gray-900"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <x-button variant="secondary" icon="brand-google"
                            class="w-full rounded-2xl text-xs font-bold">Google</x-button>
                        <x-button variant="secondary" icon="brand-github"
                            class="w-full rounded-2xl text-xs font-bold">Github</x-button>
                    </div>
                </form>

                <p class="text-center text-sm text-gray-500 font-medium pt-4">
                    Don't have an account?
                    <a href="#"
                        class="text-indigo-600 font-bold hover:underline underline-offset-4 decoration-2">Create Account</a>
                </p>
            </div>
        </div>
    </div>
@endsection
