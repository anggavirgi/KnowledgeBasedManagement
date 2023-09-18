/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['../app/Views/**/*.php', 'src/js/script.js','node_modules/flowbite/**/*.js'],
  theme: {
    extend: {
      colors: {
        'main': '#18A8D8',
        'secondary': '#FFC700',
        'form': '#666666',
        'pending-status' : '#FFE895',
        'pending-status-text' : '#CD6200',
        'solved-status' : '#CFF2DE',
        'solved-status-text' : '#1F9254',
        'progress-status' : '#D6F3FF',
        'progress-status-text' : '#047FA6',
        'close-status' : '#FBD9D9',
        'close-status-text' : '#A30D11',
        },
    },
  },
  plugins: [
    require('tailwind-scrollbar-hide'),
  ],
};
