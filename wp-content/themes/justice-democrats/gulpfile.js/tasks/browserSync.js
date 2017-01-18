if(global.production) return

var browserSync       = require('browser-sync')
var gulp              = require('gulp')
var config            = require('../config')
var pathToUrl         = require('../lib/pathToUrl')

var browserSyncTask = function() {
  browserSync.init(config.tasks.browserSync.settings)
}

gulp.task('browserSync', browserSyncTask)
module.exports = browserSyncTask
