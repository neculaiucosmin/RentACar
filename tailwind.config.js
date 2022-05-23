const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: ["./**/*.{html,js,php}"],
    theme: {
        extend: {
            colors: {
                'netflixGrey': '#564d4d',
                'greyTransparent': 'hsla(0deg, 2%, 12%, .3)',
                'text-color': '#130e1c',
                'p-color':'#818182',

            },
            screens: {
                'xs': "400px",
            },
            fontFamily: {
                'Raleway': ['Raleway', ...defaultTheme.fontFamily.sans],
            }
        },

    },
    plugins: [],

}