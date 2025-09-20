<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/recipe/css/login.css') }}" />
    <link rel="icon" href="{{ asset('assets/recipe/imgs/icon.png') }}" />
    <script src="https://kit.fontawesome.com/718cceb512.js" crossorigin="anonymous"></script>
    <title>{{ config('app.name') }} | Add New Admin</title>
</head>

<body>

    <main class="container">
        <div class="login-box" style="width: 500px;">
            <div class="logo-container">
                <img src="{{ asset('assets/recipe/imgs/logo.png') }}" alt="CookMate" class="logo" />
                <h1 class="heading-primary">Add New Admin</h1>
            </div>
            <form id="MainForm" class="login-form" action="{{ route('admins.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <i class="far fa-user-circle"></i>
                    <input type="text" name="name" id="nameInp" placeholder="Name" required  value="{{ old('name') }}"/>
                </div>
                @error('name')
                    <span class="error-message" id="nameError">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="emailInp" placeholder="Email" required value="{{ old('email') }}"/>
                </div>
                @error('email')
                    <span class="error-message" id="emailError">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="passwordInp" placeholder="Password" required />
                </div>
                @error('password')
                    <span class="error-message" id="passwordError">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password_confirmation" id="confirm-password"
                        placeholder="Confirm Password" required />
                </div>
                @error('password')
                    <span class="error-message" id="passwordError">{{ $message }}</span>
                @enderror

                <button type="submit" class="login-button">Add</button>
                <a href="{{ route('cookmates.home') }}" class="back-button" style="text-align: center">Back to
                    CookMates</a>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
