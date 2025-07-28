const { src, dest, series, parallel, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');
const browserSync = require('browser-sync').create();
const del = require('del');

// File paths
const files = {
  scssPath: 'assets/scss/**/*.scss',
  jsPath: 'assets/js/src/**/*.js',
  imgPath: 'assets/images/src/**/*.{jpg,jpeg,png,gif,svg}'
}

// Clean assets directory
function clean() {
  return del(['assets/css', 'assets/js/main.*', 'assets/images/dist']);
}

// Compile SCSS to CSS
function scssTask() {
  return src(files.scssPath)
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(dest('assets/css'))
    .pipe(browserSync.stream());
}

// Concatenate and minify JS
function jsTask() {
  return src(files.jsPath)
    .pipe(concat('main.js'))
    .pipe(dest('assets/js'))
    .pipe(terser())
    .pipe(rename({ suffix: '.min' }))
    .pipe(dest('assets/js'))
    .pipe(browserSync.stream());
}

// Optimize images
function imgTask() {
  return src(files.imgPath)
    .pipe(imagemin([
      imagemin.mozjpeg({ quality: 80, progressive: true }),
      imagemin.optipng({ optimizationLevel: 5 }),
      imagemin.svgo({
        plugins: [
          { removeViewBox: true },
          { cleanupIDs: false }
        ]
      })
    ]))
    .pipe(dest('assets/images/dist'));
}

// Watch files for changes
function watchTask() {
  browserSync.init({
    proxy: "localhost:8000", // Change this to match your local dev URL
    notify: false
  });

  watch([files.scssPath], scssTask);
  watch([files.jsPath], jsTask);
  watch([files.imgPath], imgTask);
  watch(['**/*.php']).on('change', browserSync.reload);
}

// Default Gulp task
exports.default = series(
  clean,
  parallel(scssTask, jsTask, imgTask),
  watchTask
);

// Build task for production (without watching)
exports.build = series(
  clean,
  parallel(scssTask, jsTask, imgTask)
);