/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      blue_light: '#CDE7FF',
      rose_light: '#D9D9D9',
      rose_medium: '#DDD0D0',
      gray_light: '#776767',
      white_full: '#FFFFFF',
      black: '#000000'
    },
    fontFamily: {
      montserrat: 'Montserrat',
      montserrat_alter: 'Montserrat Alternates',
      poppins: 'poppins'
    },
  },
  plugins: [],
}