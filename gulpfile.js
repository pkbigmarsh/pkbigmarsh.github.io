var del     = require('del'),
    gulp    = require('gulp'),
    // jade
    jade    = require('gulp-jade'),
    // js
    jshint  = require('gulp-jshint'),
    uglify  = require('gulp-uglify');

gulp.task('default', ['clean'], function() {
    gulp.start('move')
});


gulp.task('move', function() {
        // Resources
        gulp.src('src/resources/*')
            .pipe(gulp.dest("dist/resources"))
});

gulp.task('clean', del.bind(null, ['dist/**/*', '!.*']));
