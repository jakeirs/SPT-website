var gulp = require('gulp');
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('jshint', function() {
   
    return gulp.src ('js/*.js')
    .pipe(jshint()) 
    .pipe(jshint.reporter ('default'));
});

gulp.task('sass', function() {
   
    return gulp.src('scss/*.scss')  // input
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'expanded',
            errLogToConsole:true})) 
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css'));  // output
});

gulp.task('watch', function(){
    gulp.watch('scss/*.scss', ['sass']);
     gulp.watch('js/*.js', ['jshint']); 
});


// nadsłuchuj teraz każdej zmiany w plikach JS w kataogu js i wykonaj funkcję jshint. To pod spodem nie działa, bo jednocześnie może być odpalony tylko jeden Watch
gulp.task('watchjs', function(){
    gulp.watch('js/*.js', ['jshint']); 
});


