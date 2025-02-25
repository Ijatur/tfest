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
            'Kuning' : '#F5CB1A',
            'red' : '#ee3435',
            'blue' : '#35c7f8',
            'pink' : '#f979b2',
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
    daisyui: {
        themes: [
            "light",
            "dark",
          {
            mytheme: {
                "primary": "#ff00ff", 
                "secondary": "#ff00ff",
                "accent": "#00ffff",
                "neutral": "#ff00ff",
                "base-100": "#ff00ff",
                "info": "#0000ff",
                "success": "#00ff00",
                "warning": "#00ff00",
                "error": "#ff0000",
              },
            },
          ],
        },
    plugins: [
        require('daisyui'),
    ],
};
