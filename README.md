<p align="center">

  <h3 align="center">Fundament WP</h3>

  <p align="center">
    A starter HTML, CSS, and JavaScript framework/guideline for ACDH web applications.
  </p>
</p>

<br>

## Table of contents

- [Status](#status)
- [Installation](#installation)
- [What's included](#whats-included)
- [Tips for creating your project website](#tips-for-creating-your-project-website)

## Status
The most recent stable version can be found under releases.

Development is on hold right now.

The minified fundament.min.js contains bootstrap v4.0.0.
This is incompatible with jQuery >= 3.5.0.
You can use jQuery up to 3.4.1.

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
SASS files, partials and assets for compiling the fundament.css file can be found under src/sass

## What's included

```
fundament/
└── dist/
    └── fundament/ (copy this folder into your project)
        ├── css/
        ├── js/
        ├── images/
        └── vendor/ 
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

















