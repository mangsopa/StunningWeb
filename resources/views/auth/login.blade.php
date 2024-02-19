<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card-block">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-center txt-primary text-2xl">Sign In</h3>
                </div>
            </div>
            <div class="row m-b-10">
                <div class="col-md-12">
                    <button class="btn btn-google m-b-20 btn-block text-2xl"><i class="icon-social-google"></i>Google</button>
                </div>
            </div>
            <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    placeholder="Type Email Here..." :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    placeholder="********" autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


            <div class="flex items-center justify-between py-3">
                <div class="block mt-2">
                    <div class="checkbox-fade fade-in-primary">
                        <label for="remember_me" class="inline-flex items-center">
                            <input type="checkbox" id="remember_me"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">

                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            <span class="text-inverse">{{ __('Ingat Saya') }}</span>
                        </label>
                    </div>

                </div>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <x-primary-button class="m-b-10">
                {{ __('Log in') }}
            </x-primary-button>

            <hr>

            <p class="text-inverse m-t-10 text-center">Don't have an account?
                <a href="{{ route('register') }}">
                    <b class="f-w-600">Register here </b>
                </a>for free!
            </p>
        </div>
    </form>

</x-guest-layout>
