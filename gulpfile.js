var gulp = require('gulp');
var notify = require('gulp-notify');
var concat = require('gulp-concat');
var sass = require('gulp-ruby-sass');

var paths = {
    sass: 'resources/assets/sass/*.scss',
    javascript: 'resources/assets/js/**/*.js'
};

gulp.task('css', function(){
    return gulp.src(paths.sass)
        .pipe(sass({ style: 'compressed'}))
        .pipe(gulp.dest('public/assets/css'));
});

gulp.task('libraries_css', function(){
    return gulp.src(['bower_components/font-awesome/css/font-awesome.css'],
        {base: 'bower_components/'})
        .pipe(concat('library.css'))
        .pipe(gulp.dest('public/assets/css'));
});

gulp.task('libraries_js', function(){
    return gulp.src(['bower_components/jquery/dist/jquery.js'])
        .pipe(concat('library.js'))
        .pipe(gulp.dest('public/assets/js'));
});

gulp.task('application', function(){
    return gulp.src(paths.javascript)
        .pipe(concat('app.js'))
        .pipe(gulp.dest('public/assets/js/'));
});

gulp.task('watch', function() {
    gulp.watch(paths.sass, ['css']);
    gulp.watch(paths.javascript, ['application']);
});

gulp.task('default', ['libraries_js', 'libraries_css', 'css', 'application', 'watch']);

// , 'libraries_css', 'css', 'application', 'watch'