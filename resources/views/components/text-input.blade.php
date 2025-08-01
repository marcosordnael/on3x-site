@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-200 dark:border-borderColour-dark dark:bg-dark-100 dark:text-white focus:border-primary-300 focus:ring-primary-200 dark:focus:border-primary-400 dark:focus:ring-primary-300/20 rounded-lg shadow-sm px-4 py-3 w-full transition duration-200 placeholder:text-gray-400 dark:placeholder:text-gray-500']) }}>
