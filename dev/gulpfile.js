var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');

gulp.task('sass', function () {
  gulp.src('./sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('../'));
});

gulp.task('watch', function(){
  gulp.watch(['./sass/*.scss'], ['sass']);
});

gulp.task('default',['sass','watch']);