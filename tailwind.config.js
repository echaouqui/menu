module.exports = {
  purge: [
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'akrobat': ['Akrobat', 'sans-serif']
    },
    colors: {
      primary: "#f6921e",
      secondary: "#fc4f00",
      neutral: "#f4f4f4",
      light: "#fbebd5",
      light: "#fbebd5",
      black: "#000000",
      white: "#ffffff",
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
