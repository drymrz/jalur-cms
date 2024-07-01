/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Helvetica Neue", "Arial", "sans-serif"],
            },
            colors: {
                jalur: {
                    base: "#74B0AA",
                    bold: "#61938E",
                    bold2: "#4D7571",
                    dark: "#0D544D",
                    soft: "#E1EEEB",
                },
            },
        },
    },
    plugins: [],
};
