<div>
    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Create Account</h1>
        <p class="text-gray-600 dark:text-gray-400">Join us and start your banking journey</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form wire:submit="register" class="space-y-6">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Enter your full name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Enter your email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Create a strong password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" 
                            placeholder="Confirm your password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Register Button -->
        <div class="pt-2">
            <x-primary-button>
                {{ __('Create Account') }}
            </x-primary-button>
        </div>

        <!-- Login Link -->
        <div class="text-center pt-4 border-t border-gray-100 dark:border-gray-700">
            <p class="text-sm text-gray-600 dark:text-gray-300">
                Already have an account? 
                <a href="{{ route('login') }}" wire:navigate class="text-gray-800 hover:text-black dark:text-gray-200 dark:hover:text-white font-medium transition-colors duration-200">
                    Sign in
                </a>
            </p>
        </div>
    </form>
</div>
