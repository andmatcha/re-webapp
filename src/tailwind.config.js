/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'main-blue': '#0f71ba',
        'main-light-blue': '#96b9d0',
        'main-bg-grey': '#f5f5f8'
      }
    },
  },
  plugins: [],
}
