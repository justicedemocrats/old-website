var config       = require('../config')
if(!config.tasks.js) return

var gulp = require('gulp');
var gulpif       = require('gulp-if')
var browserify = require('browserify');
var source = require("vinyl-source-stream");
var buffer       = require('vinyl-buffer');
var babelify = require("babelify");
var watchify = require('watchify');
var gutil = require('gulp-util');
var uglify       = require('gulp-uglify');
var browserSync = require('browser-sync');
var notify = require("gulp-notify");
var handleErrors = require('../lib/handleErrors');

// Save a reference to the `reload` method
var reload = browserSync.reload;

var browserifyTask = function () {
  var bundler = watchify(browserify(config.tasks.js.src, watchify.args));
  bundler.transform(babelify);
  bundler.on('update', rebundle);

  function rebundle() {
    return bundler.bundle()
      .on('error', handleErrors)
      .pipe(source(config.tasks.js.output))
      .pipe(gulpif(global.production, buffer()))
      .pipe(gulpif(global.production, uglify()))
      .pipe(gulp.dest(config.tasks.js.dest))
      .pipe(reload({stream:true}))
      .pipe(notify({
        title: "Browser reloaded with new JS update!",
        message: "File changed: <%= file.relative %>"
      }));
  }

  return rebundle();
}

gulp.task('js', browserifyTask)
module.exports = browserifyTask
