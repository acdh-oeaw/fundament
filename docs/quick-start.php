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
                <li>
                  <a href="../docs/intro.php">Introduction</a>
                </li>
                <li class="active bd-sidenav-active">
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

          <h1><a id="quick_start"></a>Quick Start</h1>
          <p>If you want to quickly add Fundament to your project or test it out, you may use it remotely provided by on our servers. For long term usage you may want to download the source files and implement them in your application.</p>
          <h3><a id="adding_the_CSS"></a>Adding the CSS</h3>
          <p>Copy-paste the stylesheet into the &lt;head&gt;&lt;/head&gt; section of your website.</p>
          <script src="https://gist.github.com/asilcetin/e0549569c88dc17dfeee693a36ae39ef.js"></script>
          <h3><a id="adding_the_JS"></a>Adding the JS</h3>
          <p>Copy-paste the following JS files at the end of your pages before closing the &lt;/body&gt; tag. Remember that the first resource we’re embedding is for the Fontawesome icons. If you’re sure that you won’t need any icons, then you don’t need to copy the first line. However jQuery is required for many components. We use jQuery’s slim build, but the full version is also supported.</p>
          <script src="https://gist.github.com/asilcetin/a4e4f35a1aa8aeb056465e6766c0d71d.js"></script>

        </div>
      </div>
    </div>
  </main>
  <?php include('_partials/footer.php'); ?>
