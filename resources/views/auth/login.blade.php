<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="{{asset('signin/style.css')}}">
</head>
<!--Coded with love by Mutiullah Samim-->

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="{{asset('signin/images/login-logo.png')}}"
                            class="brand_logo" alt="Logo">
                    </div>
                </div>
                
                <div class="d-flex justify-content-center form_container">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <x-jet-validation-errors class="mb-4" />
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="username" name="username" class="form-control input_user" id="username" placeholder="Username" :value="old('username')" required autofocus>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" id="password"
                                placeholder="password" required autocomplete="current-password"> 
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                <label class="custom-control-label" for="remember_me">Remember me</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="button" class="btn login_btn">Login</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    @if (Route::has('password.request'))
                    <div class="d-flex justify-content-center links">
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>