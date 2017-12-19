var gulp = require('gulp');
var stylus = require('gulp-stylus');
var watch = require('gulp-watch');
// var html = require('gulp-html');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync').create();

gulp.task('styles', function () {
     gulp.src('./project/style/style.styl')
     .pipe( stylus().on( 'error', function( error )
     {
       console.log( error );
     } )
   )
      .pipe(stylus())
      .pipe(gulp.dest('./'))
      .on('end', browserSync.reload);
  });

  gulp.task('watch', function () {
    gulp.watch('./project/style/*.styl', ['styles']);
    gulp.watch('*.html', ['html']);
    gulp.watch('./*.php', ['php']);
  });

    gulp.task('php', function () { 
    return gulp.src('./**/*.php')
    .on('end', browserSync.reload);
  });

  gulp.task('html', function () { 
    return gulp.src('*.html')
    .on('end', browserSync.reload);
  });


  gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});

  gulp.task('default', ['styles', 'watch', 'php', 'html', 'browser-sync']);
