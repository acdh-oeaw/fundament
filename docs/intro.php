<?php include('_partials/header.php'); ?>
<body class="contained fixed-nav">
  <?php include('_partials/nav.php'); ?>
  <main class="grid-col" role="main">
    <div class="container">
      <div class="row flex-xl-nowrap bg-white box-shadow element-border">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <nav class="collapse bd-links" id="bd-docs-nav">
            <div class="bd-toc-item active">
              <a class="bd-toc-link" href="../docs/intro.php">Documentation</a>
              <ul class="nav bd-sidenav">
                <li class="active bd-sidenav-active">
                  <a href="../docs/intro.php">Introduction</a>
                </li>
                <li>
                  <a href="../docs/intro.php">Elements</a>
                </li>
                <li>
                  <a href="../docs/intro.php">Examples</a>
                </li>
                <li>
                  <a href="../docs/intro.php">Customizer</a>
                </li>
              </ul>
              <a class="bd-toc-link" href="../docs/intro.php">Standards</a>
              <ul class="nav bd-sidenav">
                <li>
                  <a href="../docs/intro.php">Accessibility</a>
                </li>
                <li>
                  <a href="../docs/intro.php">Identity</a>
                </li>
                <li>
                  <a href="../docs/intro.php">Recommendations</a>
                </li>
                <li>
                  <a href="../docs/intro.php">About</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-12 col-md-9 col-xl-10 page-content-w-sidebar">
          <h1>Introduction</h1>
          <p class="bd-lead">Get started with Fundament, a starter HTML, CSS and JavaScript framework for web applications. Use it to create accessible, modern and responsive websites that follow the design guidelines of ACDH.</p>
          <div>
            <h2 id="quick-start">Quick start<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#quick-start" style="padding-left: 0.375em;"></a></h2>
          </div>
          <p>If you want to quickly add Fundament to your project or test it out, you may use it remotely provided by on our servers. For long term usage you may want to download the source files and implement them in your application.</p>
          <div>
            <h3 id="css">CSS<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#css" style="padding-left: 0.375em;"></a></h3>
          </div>
          <p>Copy-paste the stylesheet <code class="highlighter-rouge">&lt;link&gt;</code> into your <code class="highlighter-rouge">&lt;head&gt;</code> before all other stylesheets to load our CSS.</p>
          <div class="bd-clipboard">
            <button class="btn-clipboard" data-original-title="Copy to clipboard" title="">Copy</button>
          </div>
          <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://fundament.acdh.oeaw.ac.at/src/css/fundament.css"</span><span class="nt">&gt;</span></code></pre>
          </figure>
          <div>
            <h3 id="js">JS<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#js" style="padding-left: 0.375em;"></a></h3>
          </div>
          <p>Many of our components require the use of JavaScript to function. Specifically, they require <a href="https://jquery.com">jQuery</a>, <a href="https://popper.js.org/">Popper.js</a>, and our own JavaScript plugins. Place the following <code class="highlighter-rouge">&lt;script&gt;</code>s near the end of your pages, right before the closing <code class="highlighter-rouge">&lt;/body&gt;</code> tag, to enable them. jQuery must come first, then Popper.js, and then our JavaScript plugins.</p>
          <p>We use <a href="https://blog.jquery.com/2016/06/09/jquery-3-0-final-released/">jQuery’s slim build</a>, but the full version is also supported.</p>
          <div class="bd-clipboard">
            <button class="btn-clipboard" data-original-title="Copy to clipboard" title="">Copy</button>
          </div>
          <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://code.jquery.com/jquery-3.2.1.slim.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://fundament.acdh.oeaw.ac.at/assets/js/fundament.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre>
          </figure>
          <p>Curious which components explicitly require jQuery, our JS, and Popper.js? Click the show components link below. If you’re at all unsure about the general page structure, keep reading for an example page template.</p>
          <details>
            <summary class="text-primary mb-3">
              Show components requiring JavaScript
            </summary>
            <ul>
              <li>Alerts for dismissing</li>
              <li>Buttons for toggling states and checkbox/radio functionality</li>
              <li>Carousel for all slide behaviors, controls, and indicators</li>
              <li>Collapse for toggling visibility of content</li>
              <li>Dropdowns for displaying and positioning (also requires <a href="https://popper.js.org/">Popper.js</a>)
              </li>
              <li>Modals for displaying, positioning, and scroll behavior</li>
              <li>Navbar for extending our Collapse plugin to implement responsive behavior</li>
              <li>Tooltips and popovers for displaying and positioning (also requires <a href="https://popper.js.org/">Popper.js</a>)
              </li>
              <li>Scrollspy for scroll behavior and navigation updates</li>
            </ul>
          </details>
          <div>
            <h2 id="starter-template">Starter template<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#starter-template" style="padding-left: 0.375em;"></a></h2>
          </div>
          <p>Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this: (coming soon)</p>

        </div>
      </div>
    </div>
  </main>
  <?php include('_partials/footer.php'); ?>
