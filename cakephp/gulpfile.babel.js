import gulp from 'gulp'
import bro from 'gulp-bro'
import sass from 'gulp-sass'
import babel from 'gulp-babel'
import concat from 'gulp-concat'
import uglify from 'gulp-uglify'
import rename from 'gulp-rename'
import cleanCSS from 'gulp-clean-css'
import sourcemaps from 'gulp-sourcemaps'
import uglifyify from 'uglifyify'
import del from 'del'
import babelify from 'babelify'

const paths = {
    admin: {
        scripts: {
            src: 'assets/Admin/js/index.js',
            dest: 'webroot/js/'
        },
        styles: {
            sass: {
                src: 'assets/Admin/sass/*.sass',
                dest: 'assets/Admin/css/'
            },
            css: {
                src: 'assets/Admin/css/*.css',
                dest: 'webroot/css/'
            }
        }
    },
    restaurant: {
        scripts: {
            src: 'assets/Restaurant/js/index.js',
            dest: 'webroot/js/'
        },
        styles: {
            sass: {
                src: 'assets/Restaurant/sass/*.sass',
                dest: 'assets/Restaurant/css/'
            },
            css: {
                src: 'assets/Restaurant/css/*.css',
                dest: 'webroot/css/'
            }
        }
    },
    assets: {
        src: 'assets/copy/**',
        dest: 'webroot/'
    }
};

function clean() {
    return del(['webroot']);
}

/* Admin part */
function adminSass() {
    return gulp.src(paths.admin.styles.sass.src)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(paths.admin.styles.sass.dest))
}

function adminStyles() {
    //TODO find a way to put sass at the end
    //[
    //'/src/**/!(foobar)*.js', // all files that end in .js EXCEPT foobar*.js
    //'/src/js/foobar.js',
    //]
    return gulp.src([paths.admin.styles.css.src, 'node_modules/bootstrap/dist/css/bootstrap.css'])
        .pipe(concat('admin.min.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.admin.styles.css.dest));
}

function adminScripts() {
    return gulp.src(paths.admin.scripts.src)
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(bro({
            transform: [
              babelify.configure({ presets: ['es2015'] }),
              [ 'uglifyify', { global: true } ]
            ]
        }))
        .pipe(rename({
            basename: 'admin',
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.admin.scripts.dest));
}

/* Restaurant part */
function restaurantSass() {
    return gulp.src(paths.restaurant.styles.sass.src)
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.restaurant.styles.sass.dest))
}

function restaurantStyles() {
    return gulp.src([
        paths.restaurant.styles.css.src,
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/toastr/build/toastr.min.css',
        'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'])
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(concat('restaurant.min.css'))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.restaurant.styles.css.dest));
}

function restaurantScripts() {
    return gulp.src(paths.restaurant.scripts.src)
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(bro({
            transform: [
              babelify.configure({ presets: ['es2015'] }),
              [ 'uglifyify', { global: true } ]
            ]
        }))
        .pipe(rename({
            basename: 'restaurant',
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.restaurant.scripts.dest));
}


function watch() {
    gulp.watch(['assets/Admin/js/', 'assets/Restaurant/js/'], scripts);
    gulp.watch([paths.admin.styles.sass.src, paths.admin.styles.css.src, "!assets/Restaurant/css/default.css" , paths.restaurant.styles.sass.src, paths.restaurant.styles.css.src, "!assets/Admin/css/default.css"], styles);
}


function copyFile() {
    return gulp.src(paths.assets.src, {
            dot: true
        })
        .pipe(gulp.dest(paths.assets.dest));
}

exports.clean = clean
exports.watch = watch
exports.restaurantScripts = restaurantScripts

const styles = gulp.parallel(gulp.series(adminSass, adminStyles), gulp.series(restaurantSass, restaurantStyles))
const scripts = gulp.parallel(restaurantScripts, adminScripts)

const admin = gulp.series(adminSass, gulp.parallel(adminStyles, adminScripts))
const restaurant = gulp.series(restaurantSass, gulp.parallel(restaurantStyles, restaurantScripts))
const build = gulp.series(clean, gulp.parallel(admin, restaurant), copyFile);

/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', build);
