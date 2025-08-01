<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 border border-transparent rounded-lg font-semibold text-sm text-white tracking-wide shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-offset-2 dark:focus:ring-offset-dark-200 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] w-full']) }}>
    {{ $slot }}
</button>
