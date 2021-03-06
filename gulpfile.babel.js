"use strict";

import browserSync from "browser-sync";
import del from "del";
import gulp from "gulp";
import cleanCSS from "gulp-clean-css";
import rename from "gulp-rename";
import sass from "gulp-sass";
import ts from "gulp-typescript";
import uglify from "gulp-uglify";
import path from "path";
import phpConnect from "gulp-connect-php";

const paths = {
    scripts: {
        src: {
            typescript: "web-src/scripts/*.ts",
            other: "web-src/scripts/*.js"
        },
        dest: "webroot/js/"
    },
    styles: {
        src: {
            sass: "web-src/css/**/*.scss",
            other: "web-src/css/**/*.css"
        },
        dest: "webroot/css/"
    },
    app: {
        src: "**/*.php"
    }
};

// const isWin = process.platform === "win32";

function clean() {
    return del([paths.scripts.dest, paths.styles.dest]);
}

function scripts() {
    return gulp.src(paths.scripts.src.other, {sourcemaps: false})
        .pipe(gulp.dest(paths.scripts.dest));
}

function typescript() {
    return gulp.src(paths.scripts.src.typescript, {sourcemaps: true})
        .pipe(ts())
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(uglify())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest(paths.scripts.dest));
}

function styles() {
    return gulp.src(paths.styles.src.other, {sourcemaps: true})
        .pipe(gulp.dest(paths.styles.dest));
}

function scss() {
    return gulp.src(paths.styles.src.sass, {sourcemaps: true})
        .pipe(sass().on("error", sass.logError))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(cleanCSS())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest(paths.styles.dest));
}

function serve(cb) {
    phpConnect.server({
        base: "./webroot",
        port: 8765,
        keepalive: true
    });
    browserSync.init({
        proxy: "localhost:8765",
        baseDir: "webroot",
        open: false,
        notify: true
    });
    cb();
}

function reload(cb) {
    browserSync.reload();
    cb();
}

function unlink(filepath) {
    const filePathFromSrc = path.relative(path.resolve("web-src"), filepath);
    // Concatenating the 'build' absolute path used by gulp.dest in the scripts task
    const destFilePath = path.resolve("webroot", filePathFromSrc);
    del.sync(destFilePath);
}

function watch() {
    gulp.watch(paths.styles.src.sass, gulp.series(scss, reload)).on("unlink", unlink);
    gulp.watch(paths.styles.src.other, gulp.series(styles, reload)).on("unlink", unlink);
    gulp.watch(paths.scripts.src.typescript, gulp.series(typescript, reload)).on("unlink", unlink);
    gulp.watch(paths.scripts.src.other, gulp.series(scripts, reload)).on("unlink", unlink);
    gulp.watch(paths.app.src, gulp.series(reload));//.on("unlink", unlink);
    // gulp.watch(paths.templates.src, gulp.series(reload)).on("unlink", unlink);
}

export const build = gulp.series(clean, scripts, typescript, scss, styles);
export const autobuild = gulp.series(clean, scripts, typescript, scss, styles, gulp.parallel(watch));

export const dev = gulp.series(build, serve, gulp.parallel(watch));

export default dev;
