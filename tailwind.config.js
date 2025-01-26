import theme from 'tailwindcss/defaultTheme';
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
            colors: {
                primary: "var(--color-primary)",
                secondary: "var(--color-primary)",
                accent: "var(--color-accent)",
                bg: "var(--color-bg)",
                text: "var(--color-text)",
                link: "var(--color-link)",
                button: "var(--color-button)",
                hover: "var(--color-hover)",
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            /* columns: {
                '4xs': '14rem',
            }, */

        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            }
        },
        /* fontSize: {
            sm: '0.8rem',
            base: '1rem',
            xl: '1.25rem',
                '2xl': '1.563rem',
                '3xl': '1.953rem',
                '4xl': '2.441rem',
                '5xl': '3.052rem',
          } */
    },
    plugins: [
        require('daisyui'),
        require('tailwindcss-animated'),
        require('@tailwindcss/typography'),
    ],
};
