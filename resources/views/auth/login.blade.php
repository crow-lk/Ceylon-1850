<!DOCTYPE html>
<html lang="en">

@include('components.head', [
    'pageTitle' => 'Login - Ceylon 1850',
    'pageDescription' => 'Login to your Ceylon 1850 account',
    'pageType' => 'auth'
])

<body>

<div class="super_container">
    
    <!-- Header, Hamburger Menu, and Mobile Menu -->
    @include('components.header')

    <!-- Auth Section -->
    <div class="auth_section" style="padding: 120px 0; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="auth_card" style="background: #fff; border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,.1); padding: 40px; border: 1px solid #e9ecef;">
                        
                        <!-- Auth Header -->
                        <div class="auth_header text-center mb-4">
                            <div class="auth_logo mb-3">
                                <img src="{{ asset('frontend/images/logo.png') }}" alt="Ceylon 1850" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <h2 class="auth_title" style="color: #232323; font-family: 'PT Sans Narrow', sans-serif; font-size: 28px; margin-bottom: 8px;">Welcome Back</h2>
                            <p class="auth_subtitle" style="color: #636363; margin-bottom: 0;">Sign in to your account</p>
                        </div>

                        <!-- Success/Error Messages -->
                        @if(session('success'))
                            <div class="alert alert-success" style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('info'))
                            <div class="alert alert-info" style="background: #d1ecf1; border: 1px solid #bee5eb; color: #0c5460; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                                {{ session('info') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger" style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                                @foreach($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Social Login Buttons -->
                        <div class="social_login mb-4">
                            <div class="row g-2">
                                <div class="col-6">
                                    <a href="{{ route('social.login', 'google') }}" class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center" style="padding: 12px; border-radius: 10px; border: 2px solid #db4437; color: #db4437; font-weight: 500; transition: all 0.3s ease;">
                                        <i class="fa fa-google me-2"></i>
                                        Google
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('social.login', 'facebook') }}" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center" style="padding: 12px; border-radius: 10px; border: 2px solid #3b5998; color: #3b5998; font-weight: 500; transition: all 0.3s ease;">
                                        <i class="fa fa-facebook me-2"></i>
                                        Facebook
                                    </a>
                                </div>
                            </div>
                            
                            <div class="divider text-center my-4" style="position: relative;">
                                <span style="background: #fff; color: #636363; padding: 0 20px; font-size: 14px;">or continue with email</span>
                                <hr style="position: absolute; top: 50%; left: 0; right: 0; z-index: -1; margin: 0; border-color: #e9ecef;">
                            </div>
                        </div>

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}" class="auth_form">
                            @csrf
                            
                            <!-- Email -->
                            <div class="form_group mb-3">
                                <label for="email" class="form_label" style="color: #232323; font-weight: 500; margin-bottom: 8px; display: block;">Email Address</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}"
                                       required 
                                       autofocus
                                       class="form_input form-control @error('email') is-invalid @enderror"
                                       style="padding: 12px 16px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 16px; transition: all 0.3s ease;"
                                       placeholder="Enter your email">
                            </div>

                            <!-- Password -->
                            <div class="form_group mb-3">
                                <label for="password" class="form_label" style="color: #232323; font-weight: 500; margin-bottom: 8px; display: block;">Password</label>
                                <input type="password" 
                                       id="password" 
                                       name="password" 
                                       required
                                       class="form_input form-control @error('password') is-invalid @enderror"
                                       style="padding: 12px 16px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 16px; transition: all 0.3s ease;"
                                       placeholder="Enter your password">
                            </div>

                            <!-- Remember Me -->
                            <div class="form_group mb-4 d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" id="remember" name="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label" style="color: #636363; font-size: 14px;">Remember me</label>
                                </div>
                                <a href="#" style="color: #c4ab9f; font-size: 14px; text-decoration: none;">Forgot password?</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100" style="background: #c4ab9f; border: none; padding: 14px; border-radius: 10px; font-size: 16px; font-weight: 600; color: #000; transition: all 0.3s ease;">
                                Sign In
                            </button>
                        </form>

                        <!-- Register Link -->
                        <div class="auth_footer text-center mt-4">
                            <p style="color: #636363; margin-bottom: 0;">
                                Don't have an account? 
                                <a href="{{ route('register') }}" style="color: #c4ab9f; text-decoration: none; font-weight: 500;">Create one here</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('components.footer')

</div>

<!-- Scripts -->
@include('components.scripts')

<style>
/* Auth specific styles */
.auth_card:hover {
    transform: translateY(-2px);
    box-shadow: 0 25px 70px rgba(0,0,0,.15);
}

.form_input:focus {
    border-color: #c4ab9f !important;
    box-shadow: 0 0 0 0.2rem rgba(196, 171, 159, 0.25) !important;
    outline: none;
}

.btn-primary:hover {
    background: #232323 !important;
    color: #fff !important;
}

.btn-outline-danger:hover {
    background: #db4437;
    color: #fff !important;
}

.btn-outline-primary:hover {
    background: #3b5998;
    color: #fff !important;
}

@media (max-width: 768px) {
    .auth_section {
        padding: 80px 0 !important;
    }
    
    .auth_card {
        padding: 30px 20px !important;
        margin: 0 15px;
    }
}
</style>

</body>
</html>
