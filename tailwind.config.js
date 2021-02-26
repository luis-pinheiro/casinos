module.exports = {
  content: ['./src/**/*.html'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      boxShadow: {
        drop: '0 2px 8px 0 rgba(0,0,0,0.14)',
        white: '0px 1px 7px 0px rgba(255,255,255,255.75)',
        neumorph: ' 20px 20px 60px #bebebe, -20px -20px 60px #ffffff',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-debug-screens'),
    require('tailwindcss-elevation')(['responsive', 'group-hover', 'focus-within', 'hover', 'focus']),
  ],
  future: {
    purgeLayersByDefault: true,
  },
};
