<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/recipe/css/login.css') }}" />
    <link rel="icon" href="{{ asset('assets/recipe/imgs/icon.png') }}" />
    <script src="https://kit.fontawesome.com/718cceb512.js" crossorigin="anonymous"></script>
    <title>CookMate | Admin Log In</title>
</head>

<body>

    <main class="container">
        <div class="login-box">
            <div class="logo-container">
                <img src="{{ asset('assets/recipe/imgs/logo.png') }}" alt="CookMate" class="logo" />
                <h1 class="heading-primary">Welcome to your dashboard</h1>
                <p class="text-secondary">Log in to continue</p>
            </div>

            <form id="MainForm" class="login-form" method="POST" action="{{ route('cookmates.login') }}">
                @csrf
                <div class="form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="emailInp" class="form-input" placeholder="Email"
                        required />
                </div>
                @error('email')
                    <span class="error-message" id="emailError">{{ $message }}</span>
                @enderror


                <div class="form-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="passwordInp" class="form-input" placeholder="Password"
                        required />
                </div>
                @error('password')
                    <span class="error-message" id="passwordError">{{ $message }}</span>
                @enderror

                <button type="submit" class="login-button">Log In</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- display error message --}}
    @if (session('login-failed'))
        <script>
            Swal.fire({
                title: 'Invalid!',
                text: '{{ session('login-failed') }}',
                icon: 'error',
                confirmButtonText: 'Close'
            });
        </script>
    @endif

    {{-- display alert when logged out --}}
    @if (session('logout-success'))
        <script>
            Swal.fire({
                title: 'See You Soon!',
                text: '{{ session('logout-success') }}',
                icon: 'success',
                confirmButtonText: 'Close'
            });
        </script>
    @endif

</body>

</html>
