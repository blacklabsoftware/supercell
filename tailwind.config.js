const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './*.php',
    './parts/*.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    
    extend: {
      fontFamily: {
        "sans" : ['Conv_FSLucas', ...defaultTheme.fontFamily.sans],
        "mono" : ['Source Code Pro', ...defaultTheme.fontFamily.mono]
      },
      colors: {
        'black': '#304543',
        'dark-green': {
          100: "#d6dad9",
          200: "#acb5b4",
          300: "#838f8e",
          400: "#596a69",
          500: "#304543",
          600: "#263736",
          700: "#1d2928",
          800: "#131c1b",
          900: "#0a0e0d"
        },
        teal: {
          100: "#ccf6ea",
          200: "#99edd6",
          300: "#66e5c1",
          400: "#33dcad",
          500: "#00d398",
          600: "#00a97a",
          700: "#007f5b",
          800: "#00543d",
          900: "#002a1e"
        },
        green: {
          100: "#d3f6ea",
          200: "#a7edd6",
          300: "#7ae5c1",
          400: "#4edcad",
          500: "#22d398",
          600: "#1ba97a",
          700: "#147f5b",
          800: "#0e543d",
          900: "#072a1e"
},
        red: {
          100: "#ffdddd",
          200: "#ffbcbc",
          300: "#ff9a9a",
          400: "#ff7979",
          500: "#ff5757",
          600: "#cc4646",
          700: "#993434",
          800: "#662323",
          900: "#331111"
        },
        yellow: {
          100: "#faf5dd",
          200: "#f5ecbb",
          300: "#f1e298",
          400: "#ecd976",
          500: "#e7cf54",
          600: "#b9a643",
          700: "#8b7c32",
          800: "#5c5322",
          900: "#2e2911"
},
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio')
  ],
}
