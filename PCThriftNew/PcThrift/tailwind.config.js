/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      roboto: ["Roboto", "sans-serif"],
      mono: ['Courier New', 'Courier', 'monospace'],
    },
  },
  plugins: [require('@tailwindcss/forms')],
}
