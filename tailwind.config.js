const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'netflixGrey':'#564d4d',
      },
    },

  },
  plugins: [],
  fontFamily:{
    'sans': ['Raleway', ...defaultTheme.fontFamily.sans],
  }

}