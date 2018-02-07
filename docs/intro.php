<?php include('_partials/header.php'); ?>
<body class="contained fixed-nav">
  <?php include('_partials/nav.php'); ?>
  <main class="grid-col" role="main">
    <div class="container">
      <div class="main-content row flex-xl-nowrap bg-white box-shadow element-border">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <nav class="collapse bd-links" id="bd-docs-nav">
            <div class="bd-toc-item active">
              <a class="bd-toc-link" href="#">Documentation</a>
              <ul class="nav bd-sidenav">
                <li class="active bd-sidenav-active">
                  <a href="../docs/intro.php">Introduction</a>
                </li>
                <li>
                  <a href="../docs/quick-start.php">Quick Start</a>
                </li>
              </ul>
              <a class="bd-toc-link" href="#">Components</a>
              <ul class="nav bd-sidenav">
                <li>
                  <a href="../docs/cards.php">Cards</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-12 col-md-9 col-xl-10 page-content-w-sidebar">

          <h1><a id="Introduction_0"></a>Introduction</h1>
          <p>Fundament is a starter HTML, CSS and JavaScript framework for web applications. Use it to create accessible, modern and responsive websites that follow the design guidelines of ACDH.</p>
          <h3><a id="Package_2"></a>Package</h3>
          <p>Fundament uses the following libraries:</p>
          <ul>
            <li>Bootstrap v4.0.0</li>
            <li>jQuery v3.2.1</li>
            <li>Font Awesome Free 5.0.6</li>
            <li>Popper.js 1.12.9</li>
          </ul>
          <h3><a id="Development_8"></a>Development</h3>
          <h4><a id="Compiling_SASS_9"></a>Compiling SASS</h4>
          <ul>
            <li>Make sure you have sass-watch installed.</li>
            <li>Run the command: sass --watch scss/fundament.scss:css/fundament.css --style expanded</li>
            <li>Only edit the .scss files under /scss directory.</li>
            <li>Your output file fundament.css will be generated under css/ directory.</li>
          </ul>
          <h4><a id="Minifying_CSS_14"></a>Minifying CSS</h4>
          <ul>
            <li>Make sure you have sass-watch installed.</li>
            <li>Run the command: sass --watch scss/fundament.scss:dist/fundament/css/fundament.min.css --style compressed</li>
          </ul>
          <h4><a id="Editing_and_Minifying_JS_17"></a>Editing and Minifying JS</h4>
          <ul>
            <li>Edit js/fundament.js and mind the original bootstrap.js content which comes after fundament.js</li>
            <li>Make sure you have uglifyjs installed.</li>
            <li>Run the command: uglifyjs js/fundament.js -c -m -o dist/fundament/js/fundament.min.js</li>
          </ul>
          
        </div>
      </div>
    </div>
  </main>
  <?php include('_partials/footer.php'); ?>
