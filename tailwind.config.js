const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'netflixGrey':'#564d4d',
      },
      screens:{
        'xs':"450px",
      }
    },

  },
  plugins: [],
  fontFamily:{
    'sans': ['Raleway', ...defaultTheme.fontFamily.sans],
  }

}