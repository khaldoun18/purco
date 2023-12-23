import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
       
    ],

    theme: {
      
        extend: {

            screens: {
                'small': '640px',
                // => @media (min-width: 640px) { ... }

                'max-small': {'max': '639px'},
                // => @media (max-width: 639px) { ... }
          
          
                'medium': '768px',
                // => @media (min-width: 768px) { ... }
          
                'large': '1024px',
                // => @media (min-width: 1024px) { ... }
          
                'xlarge': '1280px',
                // => @media (min-width: 1280px) { ... }
          
                'xxlarge': '1536px',
                // => @media (min-width: 1536px) { ... }
              },
            
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],

    plugins: [forms],
};
