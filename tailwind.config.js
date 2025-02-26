import defaultTheme from 'tailwindcss/defaultTheme';
import colors from "tailwindcss/colors";

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
        colors: {
            // Warna utama taro sini
            'white' : '#ffffff',
            'black' : '#000000',
            'yellow' : '#feff00',
            'red' : '#ee3435',
            'blue' : '#35c7f8',
            'pink' : '#f979b2',
            'Kuning' : '#F5CB1A',
            'biru' : '#2D74BA',
            'biru-dua' : '#447BBF',
            'krem' : '#FCF6D6',
            'oranye' : '#EA6328',

            // Menambahkan warna bawaan Tailwind, termasuk gray
            gray: colors.gray,
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
                superDream: ['SuperDream', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
