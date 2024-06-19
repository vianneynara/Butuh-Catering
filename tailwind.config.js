import plugin from "tailwindcss/plugin.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        plugin(function ({addUtilities}) {
            addUtilities({
                '.scrollbar-hide': {
                    /* IE and Edge */
                    '-ms-overflow-style': 'none',

                    /* Firefox */
                    'scrollbar-width': 'none',

                    /* Safari and Chrome */
                    '&::-webkit-scrollbar': {
                        display: 'none'
                    }
                },

                '.scrollbar-default': {
                    /* IE and Edge */
                    '-ms-overflow-style': 'auto',

                    /* Firefox */
                    'scrollbar-width': 'auto',

                    /* Safari and Chrome */
                    '&::-webkit-scrollbar': {
                        display: 'block'
                    }
                },

                '.drag-false': {
                    'user-drag': 'none',
                    '-webkit-user-drag': 'none',
                    'user-select': 'none',
                    '-moz-user-select': 'none',
                    '-webkit-user-select': 'none',
                    '-ms-user-select': 'none'
                }
            }, ['responsive'])
        })
    ],
}
