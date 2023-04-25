{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>icc recovery</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />

    <!-- inject:css-->

    <link rel="stylesheet" href="css/plugin.min.css" />

    <link rel="stylesheet" href="style.css" />

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png" />
</head>

<body>
    <main class="main-content">
        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left position-relative">
                            <div class="signUP-overlay">
                                <img class="svg signupTop" src="img/svg/signuptop.html" alt="img" />
                            </div>
                            <div class="signUP-admin-left__content">
                                <div
                                    class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center"
                                        href="{{ route('welcome') }}">a</a>
                                </div>
                            </div>
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg" src="img/svg/signupIllustration.svg" alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right p-md-40 p-10">
                            <div
                                class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="color-primary"> Sign in </a>
                                </p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-10 col-md-12">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0 pb-md-15 pb-10 pt-md-20 pt-10">
                                                <div class="edit-profile__title">
                                                    <h6>

                                                        <span class="color-primary">Sign up </span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="edit-profile__body">
                                                        <div class="form-group mb-20">
                                                            <label for="name">name</label>
                                                            <input class="form-control" id="name"
                                                                placeholder="Full Name" type="text" name="name"
                                                                :value="old('name')" required autofocus
                                                                autocomplete="name" />
                                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                                        </div>

                                                        <div class="form-group mb-20">
                                                            <label for="email">Email Adress</label>
                                                            <input class="form-control" id="email"
                                                                placeholder="name@example.com" type="email"
                                                                name="email" :value="old('email')" required
                                                                autocomplete="username" />
                                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                        </div>
                                                        <div class="form-group mb-15">
                                                            <label for="password-field">password</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" class="form-control"
                                                                    type="password" name="password" required
                                                                    autocomplete="new-password" />
                                                                <span
                                                                    class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                            </div>
                                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                        </div>
                                                        <div class="form-group mb-15">
                                                            <label for="password-field">confirm password</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" class="form-control"
                                                                    type="password" name="password_confirmation"
                                                                    required autocomplete="new-password" />
                                                                <span
                                                                    class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                            </div>
                                                        </div>
                                                        <div class="signUp-condition">
                                                            <div class="checkbox-theme-default custom-checkbox">
                                                                <input class="checkbox" type="checkbox"
                                                                    id="check-1" />
                                                                <label for="check-1">
                                                                    <span class="checkbox-text">Creating an account
                                                                        means
                                                                        you’re okay with
                                                                        our
                                                                        <a href="#" class="color-secondary">Terms
                                                                            of
                                                                            Service</a>
                                                                        and
                                                                        <a href="#"
                                                                            class="color-secondary">Privacy
                                                                            Policy</a>
                                                                        my preference</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                            <button
                                                                class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signUp-createBtn signIn-createBtn">
                                                                Create Account
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->

    <script src="/js/plugins.min.js"></script>

    <script src="/js/script.min.js"></script>
    <!-- JavaScript code -->

    <script>
        $(document).ready(function() {
            $('.toggle-password2').click(function() {
                // Get the input field and its type
                var input = $($(this).prev('input'));
                var type = input.attr('type');

                // Toggle password visibility
                if (type === 'password') {
                    input.attr('type', 'text');
                    $(this).removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    input.attr('type', 'password');
                    $(this).removeClass('fa-eye').addClass('fa-eye-slash');
                }
            });
        });
    </script>

    <!-- endinject-->
</body>

</html>
