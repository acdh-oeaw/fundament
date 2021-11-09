<p align="center">

  <h3 align="center">Fundament</h3>

  <p align="center">
    A starter HTML, CSS, and JavaScript framework/guideline for ACDH web applications. (Based on bootstrap v5.1.3)
    <br>
    Latest update: 09. November 2021
  </p>
</p>

<br>

## Table of contents

- [What's new?](#whats-new)
- [Status](#status)
- [Installation](#installation)
- [Source files](#source-files)
- [What's included](#whats-included)
- [Tips for creating your project website](#tips-for-creating-your-project-website)
- [Development](#development)

## What's new?
This version of fundament is built on bootstrap v5.1.3. Below you can find some minor changes:

- Grid system has now xxl tier too. (xs, sm, md, lg, xl, xxl -> ≥1400px ) (https://getbootstrap.com/docs/5.1/layout/containers/)
- Jquery removed (https://getbootstrap.com/docs/5.1/getting-started/javascript/)
- Bootstrap bundle now contains Popper (for tooltips and popovers) (https://getbootstrap.com/docs/5.1/components/tooltips/)
- Bootstrap now has own icons ( https://icons.getbootstrap.com/ )

## Status
The most recent stable version can be found under releases.

The minified fundament.min.js contains bootstrap.bundle v5.1.3.
This version is not using jQuery, if you want to use JQuery please check the documentation https://getbootstrap.com/docs/5.1/getting-started/javascript.
FontAwesome also removed from this version, icons are coming from the Bootstrap icons library.

## Installation
- Clone or download this repository
- Go into the dist/ directory and copy the fundament directory into your project.
- Use the HTML file under examples/example.html as a starting point and extend it with your content and elements.

## Source files
### JS
JavaScript source files can be found under src/js and these files are bundled and minified in the following order:
/assets/bootstrap.bundle.js (https://github.com/twbs/bootstrap/blob/master/dist/js/bootstrap.bundle.js)  
/assets/isotope.pkgd.min.js (https://github.com/metafizzy/isotope)  
/assets/feather.min.js (https://github.com/feathericons/feather)  
/assets/skip-link-focus-fix.js (https://github.com/understrap/understrap/blob/master/src/js/skip-link-focus-fix.js)  
/assets/anchor.min.js (https://github.com/bryanbraun/anchorjs)  
theme.js  

### CSS
SASS files, partials and assets for compiling the fundament.css file can be found under src/sass/core.scss

## What's included

```
fundament/
└── dist/
    └── fundament/ (copy this folder into your project)
        ├── css/
        ├── js/
        ├── images/
```

## Tips for creating your project website

- [ ] Find a name and create a logo preferably with a transparent background and export as .svg or .png
- [ ] Sketch or make a list of the main pages and the structure your website / application ([remember Shneiderman’s Mantra](http://www.codingthearchitecture.com/2015/01/08/shneidermans_mantra.html))
- [ ] Write must-have textual content such as "About the project, Team, Contact, Publications, Downloads" etc. in a text editor of your choice.
- [ ] Think about creating some introductory content (spell out the abbreviations!) to show on the primary section of your home page (i.e hero area)
- [ ] Develop main functionality of your application with your favourite server side language and use only basic HTML and CSS for the user interface
- [ ] Download Fundament or Fundament-WP and create a new website instance
- [ ] Add your project's title, logo, hero area content and information pages
- [ ] Create separate pages for your application's views and integrate your application into the HTML body of Fundament
- [ ] Check out Fundament's example pages and Bootstrap-4 for which CSS classes to use and adapt your components
- [ ] Create and enqueue additional .css and .js files to overwrite / extend existing styles or functionality


## Development

### Create minified JS:
You need node and the following packages installed:
- npm install gulp
- npm install gulp-uglify
- npm install gulp-sourcemaps
- npm install gulp-concat
- npm install gulp-minify

Then you have to run the https://github.com/acdh-oeaw/fundament/blob/bootstrap5/src/js/gulpfile.js  with the following command: node gulp bundleJs

### Create minified CSS:
The https://github.com/acdh-oeaw/fundament/blob/bootstrap5/src/sass/core.scss contains all files what we need for the fundament.min.css. 

Run the "sass --watch .\core.scss:..\..\dist\fundament\css\fundament.min.css --style compressed" from the src/sass directory and you can start to changes the sass files.
It will automatically generate the new compressed css file into the dist directory.
