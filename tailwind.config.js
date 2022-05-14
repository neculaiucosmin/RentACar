const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'netflixGrey':'#564d4d',
        'greyTransparent':'hsla(0deg, 2%, 12%, .3)'
      },
      screens:{
        'xs':"400px",
      }
    },

  },
  plugins: [],
  fontFamily:{
    'sans': ['Raleway', ...defaultTheme.fontFamily.sans],
  }

}