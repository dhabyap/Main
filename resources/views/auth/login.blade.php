@extends('layouts.main')

@section('title', 'SYSTEM LOGIN | DHABY.DEV')

@section('extra_css')
    .login-container {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--bg-concrete);
    }
    .login-card {
    width: 100%;
    max-width: 450px;
    background: white;
    border: 4px solid var(--beam-black);
    padding: 3rem;
    box-shadow: 15px 15px 0px var(--beam-black);
    position: relative;
    }
    .login-header {
    margin-bottom: 2.5rem;
    border-bottom: 2px solid var(--beam-black);
    padding-bottom: 1.5rem;
    }
    .form-input {
    width: 100%;
    border: 2px solid var(--beam-black);
    padding: 1rem;
    font-family: 'Space Mono', monospace;
    font-size: 0.875rem;
    margin-top: 0.5rem;
    background: transparent;
    }
    .form-input:focus {
    border-color: var(--safety-orange);
    outline: none;
    background: #fdfdfd;
    }
    .btn-login {
    width: 100%;
    background: black;
    color: white;
    border: 2px solid var(--beam-black);
    padding: 1.25rem;
    font-family: 'Space Mono', monospace;
    font-weight: bold;
    text-transform: uppercase;
    margin-top: 2rem;
    transition: all 0.1s;
    cursor: pointer;
    }
    .btn-login:hover {
    background: var(--safety-orange);
    transform: translate(-2px, -2px);
    box-shadow: 4px 4px 0px black;
    }
    .btn-login:active {
    transform: translate(0, 0);
    box-shadow: 0px 0px 0px black;
    }
    .login-decor {
    position: absolute;
    top: -20px;
    right: -20px;
    background: var(--safety-orange);
    color: white;
    padding: 0.5rem 1rem;
    font-family: 'Space Mono', monospace;
    font-size: 0.75rem;
    font-weight: bold;
    transform: rotate(5deg);
    border: 2px solid black;
    }
@endsection

@section('content')
    <div class="login-container px-6">
        <div class="login-card">
            <div class="login-decor">AUTH_REQUIRED</div>

            <div class="login-header">
                <div class="font-tech text-[10px] text-[#FF3300] uppercase mb-2 tracking-widest">Protocol: Secure_Access
                </div>
                <h1 class="text-4xl font-bold uppercase tracking-tight-custom">Log_In.</h1>
            </div>

            @if($errors->any())
                <div class="bg-red-100 border-2 border-red-500 p-4 mb-6 font-tech text-[10px] uppercase">
                    @foreach($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <iconify-icon icon="solar:danger-triangle-linear"></iconify-icon>
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="font-tech text-xs uppercase tracking-widest text-gray-500">Email Address</label>
                    <input type="email" name="email" class="form-input" value="{{ old('email') }}" required autofocus
                        placeholder="admin@dhaby.dev">
                </div>

                <div class="mb-6">
                    <label class="font-tech text-xs uppercase tracking-widest text-gray-500">Access Key</label>
                    <input type="password" name="password" class="form-input" required placeholder="••••••••">
                </div>

                <div class="flex items-center gap-2 mb-8">
                    <input type="checkbox" name="remember" id="remember" class="w-4 h-4 accent-black border-2 border-black">
                    <label for="remember" class="font-tech text-[10px] uppercase cursor-pointer">Stay Authenticated</label>
                </div>

                <button type="submit" class="btn-login">
                    Initialize Access <iconify-icon icon="solar:key-linear" class="ml-2"></iconify-icon>
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-100 flex justify-between items-center">
                <a href="{{ route('home') }}"
                    class="font-tech text-[10px] uppercase hover:text-[#FF3300] flex items-center gap-1">
                    <iconify-icon icon="solar:arrow-left-linear"></iconify-icon> Return Home
                </a>
                <span class="font-tech text-[10px] text-gray-400">Ver: 2.0.1</span>
            </div>
        </div>
    </div>
@endsection