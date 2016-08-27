var gulp  = require('gulp'),
    gutil = require('gulp-util');
    sass = require('gulp-sass');
    autoprefixer = require('gulp-autoprefixer');
    browserSync = require('browser-sync').create(); // create a browser sync instance.
    plumber = require('gulp-plumber');
    sourcemaps = require('gulp-sourcemaps');

// create a default task and just log a message
// gulp.task('default', function() {
//   return gutil.log('Gulp is running!')
// });

var paths = {
  styles: "craft/templates/front-end-sources/scss/**/*.scss",
  source: "source"
};

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: {
    		target: "http://citadelswing.dev",
		},
		files: ["assets/css/*.css", "assets/js/*.js","craft/templates/**/*.html","craft/templates/**/*.inc"]
        
    });
});

// Compile styles and copy them to the assets css directory.
gulp.task('styles', function () {
  return gulp.src(paths.styles)
    //.pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer({ browsers: ['last 5 versions']}))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets/css'));
});

/* updated watch task to include sass */
// gulp.task('watch', function() {
//   gulp.watch('craft/templates/front-end-sources/scss/**/*.scss', ['styles']);
// });

gulp.task('watch', [ 'browser-sync', 'styles' ], function() {
  gulp.watch([ paths.styles ], [ 'styles']);
});