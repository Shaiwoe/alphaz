const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            screens: {
                sm: '380px',
                md: '768px',
                lg: '1367px',
                xl: '1601px',
                xl2: '1900px',
              },
            colors: {
                'dark1': '#0d0e12',
                'dark2': '#13161b',
                'dark3': '#1c1f25',
                'dark4': '#382f82',
                'dark5': '#171167',
                'dark6': '#131353',
                'dark7': '#1d1e65',
                'dark8': '#1D213B',
                'purple1': '#7645ae',
                'purple2': '#453e6a',
                'green': '#08b5bd',
                'green-o': '#08b5bdaa',
                'red': '#BD082D',
                'red-o': '#BD082Daa',
                'purple3': '#685a8f',
                'purple4': '#6113B4',
                'white2': '#46494c',
                'white3': '#f4f3ee',
                'white4': '#FFFFFF2B',
                'indigo-1': '#090C35',
                'indigo-2': '#090C35',
                'icon': '#FFFFFF2B',
                'button1': '#08B5BD91',
                'button2': '#08B5BD',
                'form1': '#FFFFFF2B',
                'white1': '#F0ECFF',
                'menu1': '#ffffff2b',
                'coin1': '#ffffff2b',
                'coin2': '#EDEEF5',
                'icon-light': '#b9bbc3',
                'bgmenu1': '#090C35',
                'blue1': '#110B53',
                'box': '#110B53',
                'box2': '#1d213b'

              },
        },
    },

    plugins: [require("daisyui")],
};
