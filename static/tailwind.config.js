/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      color: {
        'black' : '#0000',
        'white' : '#ffff',
      },
      container: {
        center: true,
        padding: '2rem',
      }
    },
  },
  plugins: [],
}