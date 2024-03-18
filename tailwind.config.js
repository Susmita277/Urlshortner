import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'primary-color': '#189cbc',
                'body-color': '#f7f7f7',
                'danger-color': '#ff3366',
                'success-color': '#05a34a',
                'dark-text-color': '#a5a5a5',
                'border-color': '#e5e7eb',
                'warning-color': '#f7c701'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
