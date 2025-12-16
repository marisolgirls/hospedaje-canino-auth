# Hospedaje Canino 🐾

Este proyecto fue realizado con Laravel como práctica para aplicar autenticación y personalización de vistas.

El sistema permite iniciar sesión con correo y contraseña, así como iniciar sesión utilizando una cuenta de Google. Además, se muestran vistas diferentes dependiendo de si el usuario está registrado o no.

## Configuración

Durante el desarrollo se configuró la autenticación con Google usando OAuth 2.0 desde Google Cloud Console.

Al inicio se intentó usar el dominio del proyecto como URI de redirección, pero al trabajar en entorno local con `php artisan serve` se presentó un error `redirect_uri_mismatch`.

Para resolverlo, se configuró el callback de Google OAuth utilizando la URL local:

http://127.0.0.1:8000/auth/google/callback

Con esto, el inicio de sesión con Google funcionó correctamente en el entorno de desarrollo.

## Base de datos

El proyecto utiliza una base de datos MySQL configurada en el archivo `.env`. Para el desarrollo se usó una base de datos llamada `hospedaje_canino`.

## Funcionalidades

- Registro de usuarios
- Login con correo y contraseña
- Login con Google (OAuth 2.0)
- Página de bienvenida para usuarios no registrados
- Dashboard personalizado para usuarios autenticados
- Recuperación de contraseña
- Cierre de sesión

## Tecnologías utilizadas

- Laravel
- Laravel Breeze
- Laravel Socialite
- PHP
- MySQL
- HTML y CSS
- Google Cloud Console (OAuth)

## Autenticación con Google

Para el inicio de sesión con Google se configuró OAuth 2.0 en Google Cloud Console.

Los permisos utilizados permiten obtener información básica del usuario, como su correo electrónico y perfil, para poder autenticarlo dentro del sistema:

- Correo electrónico
- Información básica del perfil
- openid

## Vistas principales

- **Welcome**: vista para usuarios no registrados.
- **Login**: formulario de inicio de sesión con opción de Google.
- **Register**: registro de nuevos usuarios.
- **Dashboard**: vista solo para usuarios autenticados.
