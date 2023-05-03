const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                rale: 'Raleway'
            },
            colors:{
                miazul: {
                    100: '#2C74B3',
                    200: '#205295',
                    300: '#144272',
                    400: '#0A2647',
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
