'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('./wp-content/themes/koleto/sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./wp-content/themes/koleto/'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./wp-content/themes/koleto/sass/**/*.scss', ['sass']);
});