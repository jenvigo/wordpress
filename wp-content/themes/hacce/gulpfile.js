'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');

var route = "http://localhost/wordpress/"; // Ruta para el browsersync.

var sassFiles = './css/sass/**/*.scss', // Ruta de a observar de los estilos sass
    cssDest = './css/'; // Ruta de destino de la compilación sass

gulp.task('browser-sync', function() {
    var files = [
        './css/custom.css',
        './**/*.php'
    ];

    browserSync.init(files, {
        proxy: route 
    });
});

gulp.task('sass', function () {
  return gulp.src(sassFiles)
    .pipe(plumber())
    .pipe(autoprefixer())
    .pipe(sourcemaps.init())
    .pipe(sass({
        style: 'compressed',
        errLogToConsole: false,
        onError: function(err) {
          return notify().write(err);
        }
      })
    )
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(cssDest))
    .pipe(browserSync.stream({match: '**/*.css'}));
});

gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch(sassFiles, ['sass']);
});
