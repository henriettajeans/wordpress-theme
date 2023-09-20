/** @format */

const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass")); // Ange Sass-kompilatorn

gulp.task("sass", function () {
  return gulp
    .src("./sass/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./sass-to-css"));
});

gulp.task("watch", function () {
  gulp.watch("./sass/**/*.scss", gulp.series("sass"));
});

gulp.task("default", gulp.series("sass", "watch"));
