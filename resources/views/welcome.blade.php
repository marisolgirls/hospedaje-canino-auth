<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospedaje Canino</title>

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <div class="wrap">

        <div class="topbar">
            <div class="brand">
                <div class="logo">🐾</div>
                <div>
                    {{-- <small>Guardería & Hospedaje</small> --}}
                    <h1>Hospedaje Canino</h1>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="content">
                <div class="left">
                    <div class="tag">Cuidado con cariño</div>

                    <h2 class="title">Bienvenido a tu guardería canina</h2>

                    <p class="subtitle">
                        Un espacio cómodo y seguro para tu perrito.
                    </p>

                    <div class="ctaRow">
                        <a class="cta-login" href="{{ route('login') }}">Entrar</a>
                        <a class="cta-register" href="{{ route('register') }}">Crear cuenta</a>
                    </div>
                </div>

                <div class="right">
                    <img src="{{ asset('images/chapito2.jpg') }}" alt="Perrito dormido en la hamaca" class="foto-perrito">
                </div>
            </div>

            <div class="footer">
                © {{ date('Y') }} Hospedaje Canino
            </div>
        </div>

    </div>
</body>
</html>
