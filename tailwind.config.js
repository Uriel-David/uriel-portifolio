const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            primary: 'Playfair Display',
            body: 'work Sans',
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                lg: '3rem',
            },
        },
        extend: {
            colors: {
                'light-primary': '#FAF1E6',
                'light-secondary': '#FDFAF6',
                'light-tail-100': '#32a86f',
                'light-tail-500': '#3285a8',
                'dark-primary': '#050402',
                'dark-secondary': '#1C1D24',
                'dark-navy-100': '#07567D',
                'dark-navy-500': '#292D42',
                accent: {
                    DEFAULT: "#ac6b34",
                    hover: "#925a2b",
                },
                paragraph: '#878E99',
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: colors.red,
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
