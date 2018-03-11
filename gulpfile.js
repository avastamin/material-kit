var gulp         = require('gulp');
var path         = require('path');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps   = require('gulp-sourcemaps');
var open         = require('gulp-open');
var concat       = require('gulp-concat');
var rename       = require('gulp-rename');
var uglify       = require('gulp-uglify');

var Paths = {
    HERE                 : './',
    DIST                 : 'dist/',
    CSS                  : './library/css/',
    SCSS_TOOLKIT_SOURCES : './library/scss/style.scss',
    SCSS                 : './library/scss/**/**'
};

gulp.task('compile-scss', function () {
    return gulp.src(Paths.SCSS_TOOLKIT_SOURCES)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write(Paths.HERE))
        .pipe(gulp.dest(Paths.CSS));
});

//script paths
var jsFiles = [
    'library/js/material/core/jquery.min.js',
    'library/js/material/core/popper.min.js',
    'library/js/material/bootstrap-material-design.js',
    'library/js/material/material-kit.js',
    'library/js/scripts.js'];
    jsDest = 'library/js';
/*
gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(concat('material-scripts.js'))
        .pipe(gulp.dest(jsDest));
});

*/

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(concat('all.js'))
       // .pipe(uglify())
        .pipe(gulp.dest(jsDest))
});

gulp.task('watch', function () {
    gulp.watch(Paths.SCSS, ['compile-scss']);
});

gulp.task('open', function(){
    gulp.src('./index.html')
        .pipe(open());
});

gulp.task('open-app', ['open', 'watch']);