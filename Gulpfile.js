var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function () {
  gulp.src('app/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./web/css'));
});

gulp.task('default', function () {
  gulp.watch('app/sass/**/*.scss', [ 'styles' ]);
})
