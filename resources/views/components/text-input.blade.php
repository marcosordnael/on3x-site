@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-100 text-gray-900 dark:text-white focus:border-gray-800 focus:ring-gray-800/20 dark:focus:border-gray-300 dark:focus:ring-gray-300/20 rounded-lg shadow-sm px-4 py-3 w-full transition duration-200 placeholder:text-gray-400 dark:placeholder:text-gray-500']) }}>
