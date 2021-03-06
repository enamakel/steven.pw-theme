"use strict";

require("coffee-script/register");
var runSequence = require("run-sequence");

var dependencies = [
  "bower",
  "coffee",
  "jade",
  "minify",
  "sass",
  "watch"
];


var gulp = require("./gulp")(dependencies);

gulp.task("build", ["bower", "sass", "coffee"])

gulp.task("deploy", function (callback) {
  runSequence(
    "build",
    callback);
});

gulp.task("default", function (callback) {
  runSequence(
    "build",
    "watch",
    callback);
});