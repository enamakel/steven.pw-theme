runSequence = require "run-sequence"
watch       = require "gulp-watch"

module.exports = (gulp, config) -> ->
  sequence = runSequence.use gulp

  gulp.task "watch:coffee", -> sequence "coffee"
  gulp.task "watch:jade", -> sequence "jade"
  gulp.task "watch:sass", -> sequence "sass"

  gulp.watch config.coffeePattern, ["watch:coffee"]
  gulp.watch config.jadePattern, ["watch:jade"]
  gulp.watch config.sassPattern, ["watch:sass"]