var gulp  = require('gulp'),
    gutil = require('gulp-util');
    sass = require('gulp-sass');

// create a default task and just log a message
// gulp.task('default', function() {
//   return gutil.log('Gulp is running!')
// });

gulp.task('build-css', function() {
  return gulp.src('craft/templates/front-end-sources/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/css'));
});


/* updated watch task to include sass */

gulp.task('watch', function() {
  //gulp.watch('craft/templates/front-end-sources/js/**/*.js', ['jshint']);
  gulp.watch('craft/templates/front-end-sources/scss/**/*.scss', ['build-css']);
});