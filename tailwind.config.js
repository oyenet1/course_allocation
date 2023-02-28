const plugin = require('tailwindcss/plugin');


module.exports = {
    purge: {
        content: [
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php'
        ]
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                poppin: ["'Poppins', sans-serif"],
                roboto: ['Roboto', "sans-serif"],
            },
            colors: {
                transparent: "transparent",
                current: "currentColor",
                'primary': {
                    light: '#e6ffee',
                    DEFAULT: '#009933',
                    100: "#e8edfc",
                    200: "#a5b8f3",
                    300: "#7895ed",
                    400: "#4a72e8",
                    500: "#1d4ee2",
                    600: "#15379e",
                    700: "#0d2364",
                    800: "#091844",
                    900: "#06102d",
                    dark: "#003311",
                },
                'secondary': {
                    light: '#e6ecff',
                    DEFAULT: '#0033cc',
                    100: "#fef2e7",
                    200: "#fde5ce",
                    300: "#faca9e",
                    400: "#f8b06d",
                    500: "#f6963c",
                    600: "#f58820",
                    700: "#aa5708",
                    800: "#7a3e06",
                    900: "#492503",
                    dark: "#000d33",
                },

            },
            spacing: {
                '8xl': '8px',
                '9xl': '8px',
                'hd': '8px',
                '4k': '8px',
            },
        },
        themeVariants: ['light'],
        customForms: (theme) => ({
            default: {
                'input, textarea': {
                    '&::placeholder': {
                        color: theme('colors.gray.400'),
                    },
                },
            },
        }),
    },
    variants: {
        extend: {},
    },
    plugins: [require('@tailwindcss/forms'),],
}
