/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      animation: {
        slideInAndFade: 'slideInAndFade 0.9s ease-out',
      },

      keyframes: ({
        slideInAndFade: {
          '0%': { transform: 'translateX(-100%)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' },
        },
      }),
      colors: {
        blue_light: '#CDE7FF',
        rose_light: '#D9D9D9',
        rose_medium: '#DDD0D0',
        rose_strong: '#D88A8A',
        gray_light: '#776767',
        white: '#FFFFFF',
        black: '#000000'
      },
      fontFamily: {
        montserrat: 'Montserrat',
        montserrat_alter: 'Montserrat Alternates',
        poppins: 'poppins'
      },
    },
    plugins: [
      require('flowbite/plugin'),
    ],
  }
}