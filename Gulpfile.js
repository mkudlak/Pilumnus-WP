"use strict";

var gulp =          require('gulp'),
    sass =          require('gulp-sass'),
    autoprefixer =  require('gulp-autoprefixer'),
    newer =         require('gulp-newer'),
    sourcemaps =    require('gulp-sourcemaps'),
    imagemin =      require('gulp-imagemin'),
    browserSync =   require('browser-sync').create(),
    reload =        browserSync.reload,
    concat =        require('gulp-concat'),
    uglify =        require('gulp-uglify'),
    watch =         require('gulp-watch'),
    imgSrc =        'assets/image/originals/*',
    imgDest =       'assets/images/';

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost:8888/<website>/"
    });
})

gulp.task('sass', function() {
    return gulp.src('assets/sass/**/*.scss')
        .pipe(sorcemaps.init())
        .pipe(autoprefixer({ browsers: ['last 2 versions'], cascade: false }))
        .pipe(sass({ outputStyle:'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./'));
})

gulp.task('watch', function() {

    //watch .scss files
    gulp.watch('assets/sass/*.scss', ['sass']).on("change", browserSync.reload);
    gulp.watch('assets/sass/**/*.scss', ['sass']).on("change", browserSync.reload);
    //watch js directory
    gulp.watch('assets/js/**/*.js', ['js'.on("change", browserSync.reload)])
    //watch original images directory
    gulp.watch($imgSrc, ['images']).on("change", browserSync.reload);
})

var jsInput = { js: 'assets/js/dev/**/*.js' }
var jsOutput = 'assets/js/dist/';

gulp.task('js', function(){
    return gulp.src(jsInput.js)
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js/dist/'))
});

gulp.task('default', ['sass', 'browser-sync', 'watch', 'images', 'js']);