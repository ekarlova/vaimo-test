'use strict';

var gulp = require('gulp'),
  sass = require('gulp-sass'),
  prefix = require('gulp-autoprefixer'),
  plumber = require('gulp-plumber'),
  uncss = require('gulp-uncss'),
  csso = require('gulp-csso'),
  dirSync = require( 'gulp-directory-sync'),
  browserSync = require('browser-sync').create(),
  sourcemaps   = require('gulp-sourcemaps'),
  sassGlob = require('gulp-sass-glob-import'),
  cheerio = require('gulp-cheerio'),
  replace = require('gulp-replace');


gulp.task('sass', function() {
  gulp.src(['sass/*.scss'])
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(sassGlob())
    .pipe(plumber())
    .pipe(sass())
    .pipe(prefix({browsers: ['last 2 versions']}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream());
});
//----------------------------------------------------Compiling###



//watching files and run tasks
gulp.task('watch', function () {
  gulp.watch('sass/*.scss', ['sass']);
});

//livereload and open html in browser
gulp.task('browser-sync', function() {
  browserSync.init({
    port:1337,
    server: {
      baseDir: outputDir
    }
  });
});

gulp.task('default',['sass', 'watch','browser-sync']);

