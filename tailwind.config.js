import defaultTheme from "tailwindcss/defaultTheme";
import colors from "tailwindcss/colors";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            // Warna utama Anda
            yellow: "#feff00",
            blue: "#00ffff",
            white: "#ffff",
            red: "#ff1f4e",
            pink: "#ff70c4",

            // Menambahkan warna bawaan Tailwind, termasuk `gray`
            gray: colors.gray,
        },
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
