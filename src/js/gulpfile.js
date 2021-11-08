const {src,dest, watch} = require('gulp');
const minifyJs = require('gulp-minify');
const concat = require('gulp-concat');	
const uglify = require("gulp-uglify");

const jsFiles = ['./assets/bootstrap.bundle.js', 
        './assets/isotope.pkgd.min.js', 
        './assets/feather.min.js',
        './assets/skip-link-focus-fix.js', 
        './assets/anchor.min.js'];
const bundleJs = () => {
    return src(jsFiles)
            .pipe(uglify())
            .pipe(minifyJs())
            .pipe(concat('../../dist/fundament/js/fundament.min.js'))
            .pipe(dest('./'));
}

exports.bundleJs = bundleJs;