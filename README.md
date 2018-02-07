# Fundament
A starter HTML, CSS, and JavaScript framework/guideline for ACDH web applications.

## Development

### Compiling SASS
* Make sure you have sass-watch installed.
* Run the command: sass --watch scss/fundament.scss:css/fundament.css --style expanded
* Only edit the .scss files under /scss directory.
* Your output file fundament.css will be generated under css/ directory.

### Minifying CSS
* Make sure you have sass-watch installed.
* Run the command: sass --watch scss/fundament.scss:dist/fundament/css/fundament.min.css --style compressed

### Editing and Minifying JS
* Edit js/fundament.js and mind the original bootstrap.js content which comes after fundament.js
* Make sure you have uglifyjs installed.
* Run the command: uglifyjs js/fundament.js -c -m -o dist/fundament/js/fundament.min.js
