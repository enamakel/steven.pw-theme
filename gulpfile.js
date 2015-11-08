"use strict";

require("coffee-script/register");
var runSequence = require("run-sequence");

var dependencies = [
  "bower",
  "coffee",
  "minify",
  "sass",
  "php",
  "watch"
];


var gulp = require("./gulp") (dependencies);


gulp.task("build", ["php", "bower", "sass", "coffee"])


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