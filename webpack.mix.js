const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css', {
       includePaths: [path.resolve(__dirname, 'node_modules')]
   });

   mix.webpackConfig({
      output: {
         publicPath: '/kenyafashionawards/public/'
      }
   })

// mix.webpackConfig({
//    entry: {
//       app: './resources/js/app.js',
//       quill: './resources/js/quill.js'
//    },
//    output: {
//       filename: '[name].js',
//       path: __dirname + '/public/js'
//    }
// })
