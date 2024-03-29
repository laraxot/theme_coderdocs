const mix = require('laravel-mix');
require('dotenv').config(
{
  path:__dirname+'/../../../../.env'
}
);

require('laravel-mix-polyfill');

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
    tether: ['window.Tether', 'Tether'],
  'tether-shepherd': ['Shepherd'],
  'popper.js/dist/popper.js': ['Popper'],
    sweetalert2:['Swal'],
    'magnific-popup':['magnificPopup'],
    'multiselect-two-sides':['multiselect'],
    moment: 'moment' // only one
});

mix.js('Resources/js/app.js', 'dist/js')
    .sass('Resources/sass/app.scss', 'dist/css');

mix.js('Resources/js/form.js', 'dist/js')
    .sass('Resources/sass/form.scss', 'dist/css');

mix.setResourceRoot('/themes/coderdocs/dist');
mix.setPublicPath('dist');

mix.extract(['vue','jquery','bootstrap']);

mix.polyfill({
      enabled: true,
      useBuiltIns: "usage",
      targets: {"firefox": "50", "ie": 11}
});


var $prefix='../../../../';
var $suffix='/themes/coderdocs';
var $resource_root=$prefix+$suffix;
var $public_path=$prefix+process.env.MIX_PUBLIC_FOLDER+$suffix;

console.log('public_path :'+$public_path);
console.log('dirname :'+__dirname);
$res=mix.copyDirectory(__dirname+'/dist', $public_path+'/dist');
//console.log($res);
