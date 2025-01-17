import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                "fs-700": "var(--fs-700)",
                "fs-400": "var(--fs-400)",
                "fs-500": "var(--fs-500)",
                "fs-300": "var(--fs-300)",
            },
            spacing: {
                "pd-700": "var(--pd-700)",
                "pd-500": "var(--pd-500)",
                "pd-400": "var(--pd-400)",
                "pd-300": "var(--pd-300)",
                "img-lg": "var(--img-lg)",
            },
            animation: {

            }
        },
    },
    plugins: [],
};
