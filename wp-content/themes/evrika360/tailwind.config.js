/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./assets/js/**/*.js"],
  theme: {
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: {
        DEFAULT: "var(--white-100)",
        transparent: "var(--white-100-8)",
        600: "var(--white-100-60)",
        300: "var(--white-100-30)",
      },
      grey: {
        50: "var(--grey-50)",
        100: "var(--grey-100)",
        200: "var(--grey-200)",
        300: "var(--grey-300)",
        400: "var(--grey-400)",
        500: "var(--grey-500)",
        600: "var(--grey-600)",
      },
      "light-blue": {
        100: "var(--light-blue-100)",
        150: "var(--light-blue-150)",
        200: "var(--light-blue-200)",
        300: "var(--light-blue-300)",
      },
      blue: {
        50: "var(--blue-50)",
        100: "var(--blue-100)",
        200: "var(--blue-200)",
        "200-32": "var(--blue-200-32)",
      },

      "dark-blue": {
        300: "var(--dark-blue-300)",
        400: "var(--dark-blue-400)",
        500: "var(--dark-blue-500)",
        "500-60": "var(--dark-blue-500-60)",
        600: "var(--dark-blue-600)",
        "600-80": "var(--dark-blue-600-80)",
      },
      red: "var(--red-500)",
      orange: {
        50: "var(--orange-50)",
        100: "var(--orange-100)",
        "100-50": "var(--orange-100-50)",
        200: "var(--orange-200)",
        250: "var(--orange-250)",
        300: "var(--orange-300)",
        400: "var(--orange-400)",
        500: "var(--orange-500)",
      },
      yellow: {
        100: "var(--yellow-100)",
        200: "var(--yellow-200)",
        500: "var(--yellow-500)",
      },

      green: {
        100: "var(--green-100)",
        200: "var(--green-200)",
        500: "var(--green-500)",
      },
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
      "5xl": "var(--radius-5xl)",
    },
    extend: {
      screens: {
        xs: "500px",
      },
      fontSize: {
        chat: [
          "1.125rem",
          {
            lineHeight: "140%",
            letterSpacing: "-0.41px",
            fontWeight: "400",
          },
        ],
        "chat-desktop": [
          "1.25rem",
          {
            lineHeight: "140%",
            letterSpacing: "-0.41px",
            fontWeight: "400",
          },
        ],
      },
      boxShadow: {
        "dark-inset": "var(--dark-inset-shadow)",
        "ultra-dark-inset": "var(--ultra-dark-inset-shadow)",
        "light-inset": "var(--light-inset-shadow)",
        card: "var(--card-shadow)",
      },
      content: {
        flash: 'url("./assets/images/flash-icon.svg")',
        "flash-disabled": 'url("./assets/images/flash-disabled-icon.svg")',
        lock: 'url("./assets/images/lock-icon.svg")',
      },
      gridTemplateColumns: {
        "2-1": "2fr 1fr",
      },
      animation: {
        "fade-in-down": "fade-in-down 0.5s ease-in forwards 1 0.3s",
        "pulse-quick": "pulse 1.3s cubic-bezier(0.4, 0, 0.6, 1) infinite;",
      },
      keyframes: {
        "fade-in-down": {
          "0%": { transform: "translateY(-100%)", opacity: "0" },
          "100%": { transform: "translateY(0)", opacity: "1" },
        },
      },
    },
  },
  plugins: [],
};
