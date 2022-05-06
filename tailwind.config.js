const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
  fontFamily:{
    'sans': ['Raleway', ...defaultTheme.fontFamily.sans],
  }

}