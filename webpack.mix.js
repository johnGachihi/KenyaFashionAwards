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

// mix
//     mix.sass('resources/sass/app.scss', 'public/css', {
//         includePaths: [path.resolve(__dirname, 'node_modules')]
//     })
        mix.js('resources/js/app.js', 'public/js')
            .sass('resources/sass/app.scss', 'public/css', {
               includePaths: [path.resolve(__dirname, 'node_modules')]
            });
        mix.sass('resources/sass/app1.scss', 'public/css', {
            includePaths: [path.resolve(__dirname, 'node_modules')]
        });
            // .sass('temp_ts/temp.scss', 'public/css');
    // .ts('temp_ts/temp.ts', 'public/js');

   mix.webpackConfig({
      output: {
         publicPath: '/kenyafashionawards/public/'
      },
      resolve: {
          alias: {
              'jquery-ui': 'jquery-ui/ui'
          }
      }
   });
