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

            // Menambahkan warna bawaan Tailwind, termasuk gray
            gray: colors.gray,
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
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
