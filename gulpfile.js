var gulp = require('gulp');
var sass = require('gulp-sass');

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

gulp.task('sass', function () {
    gulp.src('./scss/style.scss')
      .pipe(sass({
          includePaths: sassPaths,
          errLogToConsole: true
      }).on('error', sass.logError))
      .pipe(gulp.dest('./'));
});
