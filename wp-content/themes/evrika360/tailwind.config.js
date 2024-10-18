/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: "var(--white-100)",
      grey: {
        100: "var(--grey-100)",
        200: "var(--grey-200)",
        300: "var(--grey-300)",
        400: "var(--grey-400)",
      },
      "light-blue": {
        100: "var(--light-blue-100)",
        200: "var(--light-blue-200)",
        300: "var(--light-blue-300)",
      },
      blue: {
        100: "var(--blue-100)",
        200: "var(--blue-200)",
        "200-32": "var(--blue-200-32)",
      },

      "dark-blue": {
        300: "var(--dark-blue-300)",
        400: "var(--dark-blue-400)",
        500: "var(--dark-blue-500)",
        600: "var(--dark-blue-600)",
      },
      red: "var(--red-500)",
      orange: {
        100: "var(--orange-100)",
        200: "var(--orange-200)",
        400: "var(--orange-400)",
        500: "var(--orange-500)",
      },
      yellow: "var(--yellow-500)",

      green: "var(--green-500)",
    },
    fontFamily: {
      main: "var(--main-font)",
      accent: "var(--accent-font)",
    },
    borderRadius: {
      none: "0",
      full: "9999px",
      "2xs": "var(--radius-2xs)",
      xs: "var(--radius-xs)",
      sm: "var(--radius-sm)",
      md: "var(--radius-md)",
      lg: "var(--radius-lg)",
      xl: "var(--radius-xl)",
      "2xl": "var(--radius-2xl)",
      "3xl": "var(--radius-3xl)",
    },
    boxShadow: {
      "dark-inset": "var(--dark-inset-shadow)",
      "light-inset": "var(--light-inset-shadow)",
    },
    extend: {},
  },
  plugins: [],
};
