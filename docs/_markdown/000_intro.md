# Introduction
Fundament is a starter HTML, CSS and JavaScript framework for web applications. Use it to create accessible, modern and responsive websites that follow the design guidelines of ACDH.
### Package
Fundament uses the following libraries:
* Bootstrap v4.0.0
* jQuery v3.2.1
* Font Awesome Free 5.0.6
* Popper.js 1.12.9
### Development
#### Compiling SASS
* Make sure you have sass-watch installed.
* Run the command: sass --watch scss/fundament.scss:css/fundament.css --style expanded
* Only edit the .scss files under /scss directory.
* Your output file fundament.css will be generated under css/ directory.
#### Minifying CSS
* Make sure you have sass-watch installed.
* Run the command: sass --watch scss/fundament.scss:dist/fundament/css/fundament.min.css --style compressed
#### Editing and Minifying JS
* Edit js/fundament.js and mind the original bootstrap.js content which comes after fundament.js
* Make sure you have uglifyjs installed.
* Run the command: uglifyjs js/fundament.js -c -m -o dist/fundament/js/fundament.min.js