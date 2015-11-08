gutil     = require "gulp-util"
jade      = require "gulp-jade-php"


module.exports = (gulp, config) -> ->
  gulp.src config.src
  .pipe (jade pretty: true).on "error", gutil.log
  .pipe gulp.dest config.dest