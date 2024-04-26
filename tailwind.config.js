/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        'custom': '0px 15px 25px 0px rgba(0, 0, 0, 0.25)',
        'custom2': '10px 10px 15px 0px rgba(0, 0, 0, 0.25)',
      }
    }
  },
  plugins: [],
}

