<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card-block">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-center txt-primary text-2xl">Sign In</h3>
                </div>
            </div>
            <div class="row m-b-20">
                <div class="col-md-12">
                    <a href="#!" class="btn btn-google m-b-20 btn-block waves-effect waves-light text-2xl"><i class="icon-social-google"></i>Google</a>
                </div>
            </div>
            <p class="text-muted text-center p-b-5">Sign up with your regular account</p>
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder="Type Name Here..." required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    placeholder="Type Email Here..." required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            placeholder="*******" autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            placeholder="*******" name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between py-3">
                <div class="block mt-2">
                    <div class="checkbox-fade fade-in-primary">
                        <label for="terms_and_conditions" class="inline-flex items-center">
                            <input type="checkbox" id="terms_and_conditions"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            <span class="text-inverse">I read and accept <a href="#">Terms &amp;
                                    Conditions.</a></span>
                        </label>
                    </div>
                </div>
            </div>

            <x-primary-button class="m-b-10">
                {{ __('Register') }}
            </x-primary-button>

            <hr>

            <div class="row m-t-10">
                <div class="col-md-10">
                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                    <p class="text-inverse text-left"><a href="{{ route('login') }}"><b
                                class="f-w-600">{{ __('Back to website') }}
                            </b></a>
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="libraries\assets\images\auth\Logo-small-bottom.png" alt="small-logo.png">
                </div>
            </div>
        </div>
    </form>

</x-guest-layout>
