<div>
    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Welcome Back</h1>
        <p class="text-gray-600 dark:text-gray-400">Sign in to your account to continue</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form wire:submit="login" class="space-y-6">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Enter your email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="remember" id="remember" type="checkbox" class="rounded border-gray-300 dark:border-gray-600 text-gray-800 dark:text-gray-200 shadow-sm focus:ring-gray-500/50 dark:bg-dark-100 dark:focus:ring-gray-300/30" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-300">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-gray-800 hover:text-black dark:text-gray-200 dark:hover:text-white font-medium transition-colors duration-200" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <div class="pt-2">
            <x-primary-button>
                {{ __('Sign In') }}
            </x-primary-button>
        </div>

        <!-- Register Link -->
        <div class="text-center pt-4 border-t border-gray-100 dark:border-gray-700">
            <p class="text-sm text-gray-600 dark:text-gray-300">
                Don't have an account? 
                <a href="{{ route('register') }}" wire:navigate class="text-gray-800 hover:text-black dark:text-gray-200 dark:hover:text-white font-medium transition-colors duration-200">
                    Create account
                </a>
            </p>
        </div>
    </form>
</div>
