var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function () {
  gulp.src('./app/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./web/css'));
});

gulp.task('copybower', function () {
  gulp
    .src(['angular/angular.min.js',
      'angular/angular.min.js.map',
      'jquery/dist/jquery.slim.min.js',
      'jquery/dist/jquery.slim.min.map',
      'lodash/dist/lodash.min.js'],
      { 'cwd': 'bower_components' })
    .pipe(gulp.dest('./web/scripts/lib'))
});

gulp.task('default', function () {
  gulp.watch('app/sass/**/*.scss', [ 'styles' ]);
})
