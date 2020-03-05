'use strict';

var gulp = require('gulp');
 
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var del = require('del');

var runSequence = require('run-sequence');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Set the browser that you want to support
const AUTOPREFIXER_BROWSERS = [
  'ie >= 10',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];



sass.compiler = require('node-sass');
gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
   
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    // Output
    .pipe(gulp.dest('./css'))
});


// Gulp task to minify CSS files
gulp.task('styles', function () {
  return gulp.src('./sass/**/*.scss')
  .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
     // Minify the file
   .pipe(csso())
   .pipe(rename({
        suffix: '.min',
    }))
    // Output
    .pipe(gulp.dest('./css'))
});

// Gulp task to minify JavaScript files
gulp.task('scripts', function() {
  return gulp.src('./js/**/*.js')
    // Minify the file
    .pipe(uglify())
    .pipe(rename({
        suffix: '.min',
    }))
    // Output
    .pipe(gulp.dest('./js'))
});
 
// Clean output directory
gulp.task('clean', () => del(['dist']));



// Gulp task to minify all files
gulp.task('default', function () {
  runSequence(
    'sass',
    'styles' 
  );
});