/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary-black': '#030303',
        'primary-silver':'#e5e6e7'
      },
    },
  },
  plugins: [],
}

