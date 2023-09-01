/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,css,php}"],
  theme: {
    container: {
      padding: '15px',
      margin: 'auto'
    },
    btn:{
      padding: ".4em"
    },
    colors: {
      // Configure your color palette here
      // transparent: 'transparent',
      // current: 'currentColor',
      // 'white': '#ffffff',
      // 'primary': '#FFBB37',
      // 'dark': '#333333 !important',
    },
    extend: {},
  },
  plugins: [],
}

