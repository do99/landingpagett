/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ 
  "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "inter": ['inter', 'sans-serif'],
        "Circular": ['Circular STD'],
        "Staatliches": ['Staatliches'],
        "Cera": ['Cera PRO Regular']
      },
      colors : {
        "biru" : '#2FA0B1'
      }
    },
  },
  plugins: [],
}

