import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                accent: {
                    DEFAULT: '#6366f1', // Indigo 500
                    hover: '#4f46e5',   // Indigo 600
                },
                glass: 'rgba(255, 255, 255, 0.05)',
                glassBorder: 'rgba(255, 255, 255, 0.1)',
            }
        },
    },

    plugins: [forms],
};
