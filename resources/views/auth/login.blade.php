<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="login-title">Iniciar sesión</h1>

    <form method="POST" action="{{ route('login') }}" class="login-box">
        @csrf

        <label class="login-label" for="email">Email</label>
        <input id="email" class="login-input" type="email" name="email" value="{{ old('email') }}" required
            autofocus>

        <label class="login-label" for="password">Contraseña</label>
        <input id="password" class="login-input" type="password" name="password" required>

        <div class="login-links right">
            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        </div>

        <button class="login-btn" type="submit">Entrar</button>

        <div class="login-divider">- o -</div>

        <a href="{{ route('google.redirect') }}" class="google-link">
            Entrar con Google
        </a>

    </form>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</x-guest-layout>
