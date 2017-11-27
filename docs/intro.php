<?php include('_partials/header.php'); ?>
<body class="contained">
  <?php include('_partials/nav.php'); ?>
  <main class="grid-col" role="main">
    <div class="container">
      <div class="row flex-xl-nowrap grid-wrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <nav class="collapse bd-links" id="bd-docs-nav">
            <div class="bd-toc-item active">
              <a class="bd-toc-link" href="../docs/intro.php">Documentation</a>
              <ul class="nav bd-sidenav">
                <li class="active bd-sidenav-active">
                  <a href="../docs/introduction/">Introduction</a>
                </li>
                <li>
                  <a href="../docs/elements.php">Elements</a>
                </li>
                <li>
                  <a href="../docs/examples.php">Examples</a>
                </li>
                <li>
                  <a href="../docs/customizer.php">Customizer</a>
                </li>
              </ul>
              <a class="bd-toc-link" href="../docs/standards.php">Standards</a>
              <ul class="nav bd-sidenav">
                <li class="active bd-sidenav-active">
                  <a href="../docs/accessibility.php">Accessibility</a>
                </li>
                <li>
                  <a href="../docs/identity.php">Identity</a>
                </li>
                <li>
                  <a href="../docs/recommendations.php">Recommendations</a>
                </li>
                <li>
                  <a href="../docs/about.php">About</a>
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
          <p>Looking to quickly add Bootstrap to your project? Use the Bootstrap CDN, provided for free by the folks at MaxCDN. Using a package manager or need to download the source files? <a href="/docs/4.0/getting-started/download/">Head to the downloads page.</a></p>
          <div>
            <h3 id="css">CSS<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#css" style="padding-left: 0.375em;"></a></h3>
          </div>
          <p>Copy-paste the stylesheet <code class="highlighter-rouge">&lt;link&gt;</code> into your <code class="highlighter-rouge">&lt;head&gt;</code> before all other stylesheets to load our CSS.</p>
          <div class="bd-clipboard">
            <button class="btn-clipboard" data-original-title="Copy to clipboard" title="">Copy</button>
          </div>
          <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"</span> <span class="na">integrity=</span><span class="s">"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;</span></code></pre>
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
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre>
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
          <p>Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:</p>
          <div class="bd-clipboard">
            <button class="btn-clipboard" data-original-title="Copy to clipboard" title="">Copy</button>
          </div>
          <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="cp">&lt;!doctype html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;head&gt;</span>
    <span class="nt">&lt;title&gt;</span>Hello, world!<span class="nt">&lt;/title&gt;</span>
    <span class="c">&lt;!-- Required meta tags --&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, shrink-to-fit=no"</span><span class="nt">&gt;</span>

    <span class="c">&lt;!-- Bootstrap CSS --&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"</span> <span class="na">integrity=</span><span class="s">"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/head&gt;</span>
  <span class="nt">&lt;body&gt;</span>
    <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>

    <span class="c">&lt;!-- Optional JavaScript --&gt;</span>
    <span class="c">&lt;!-- jQuery first, then Popper.js, then Bootstrap JS --&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://code.jquery.com/jquery-3.2.1.slim.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span></code></pre>
          </figure>
          <p>That’s all you need for overall page requirements. Visit the <a href="/docs/4.0/layout/overview/">Layout docs</a> or <a href="/docs/4.0/examples/">our official examples</a> to start laying out your site’s content and components.</p>
          <div>
            <h2 id="important-globals">Important globals<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#important-globals" style="padding-left: 0.375em;"></a></h2>
          </div>
          <p>Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the <em>normalization</em> of cross browser styles. Let’s dive in.</p>
          <div>
            <h3 id="html5-doctype">HTML5 doctype<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#html5-doctype" style="padding-left: 0.375em;"></a></h3>
          </div>
          <p>Bootstrap requires the use of the HTML5 doctype. Without it, you’ll see some funky incomplete styling, but including it shouldn’t cause any considerable hiccups.</p>
          <div class="bd-clipboard">
            <button class="btn-clipboard" data-original-title="Copy to clipboard" title="">Copy</button>
          </div>
          <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="cp">&lt;!doctype html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/html&gt;</span></code></pre>
          </figure>
          <div>
            <h3 id="responsive-meta-tag">Responsive meta tag<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#responsive-meta-tag" style="padding-left: 0.375em;"></a></h3>
          </div>
          <p>Bootstrap is developed <em>mobile first</em>, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries. To ensure proper rendering and touch zooming for all devices, <strong>add the responsive viewport meta tag</strong> to your <code class="highlighter-rouge">&lt;head&gt;</code>.</p>
          <div class="bd-clipboard">
            <button class="btn-clipboard" data-original-title="Copy to clipboard" title="">Copy</button>
          </div>
          <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, shrink-to-fit=no"</span><span class="nt">&gt;</span></code></pre>
          </figure>
          <p>You can see an example of this in action in the <a href="#starter-template">starter template</a>.</p>
          <div>
            <h3 id="box-sizing">Box-sizing<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#box-sizing" style="padding-left: 0.375em;"></a></h3>
          </div>
          <p>For more straightforward sizing in CSS, we switch the global <code class="highlighter-rouge">box-sizing</code> value from <code class="highlighter-rouge">content-box</code> to <code class="highlighter-rouge">border-box</code>. This ensures <code class="highlighter-rouge">padding</code> does not affect the final computed width of an element, but it can cause problems with some third party software like Google Maps and Google Custom Search Engine.</p>
          <p>On the rare occasion you need to override it, use something like the following:</p>
          <div class="bd-clipboard">
            <button class="btn-clipboard" data-original-title="Copy to clipboard" title="">Copy</button>
          </div>
          <figure class="highlight">
            <pre><code class="language-scss" data-lang="scss"><span class="nc">.selector-for-some-widget</span> <span class="p">{</span>
  <span class="nl">box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
<span class="p">}</span></code></pre>
          </figure>
          <p>With the above snippet, nested elements—including generated content via <code class="highlighter-rouge">::before</code> and <code class="highlighter-rouge">::after</code>—will all inherit the specified <code class="highlighter-rouge">box-sizing</code> for that <code class="highlighter-rouge">.selector-for-some-widget</code>.</p>
          <p>Learn more about <a href="https://css-tricks.com/box-sizing/">box model and sizing at CSS Tricks</a>.</p>
          <div>
            <h3 id="reboot">Reboot<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#reboot" style="padding-left: 0.375em;"></a></h3>
          </div>
          <p>For improved cross-browser rendering, we use <a href="/docs/4.0/content/reboot/">Reboot</a> to correct inconsistencies across browsers and devices while providing slightly more opinionated resets to common HTML elements.</p>
          <div>
            <h2 id="community">Community<a aria-label="Anchor" class="anchorjs-link" data-anchorjs-icon="#" href="#community" style="padding-left: 0.375em;"></a></h2>
          </div>
          <p>Stay up to date on the development of Bootstrap and reach out to the community with these helpful resources.</p>
          <ul>
            <li>Follow <a href="https://twitter.com/getbootstrap">@getbootstrap on Twitter</a>.
            </li>
            <li>Read and subscribe to <a href="https://blog.getbootstrap.com">The Official Bootstrap Blog</a>.
            </li>
            <li>Join <a href="https://bootstrap-slack.herokuapp.com">the official Slack room</a>.
            </li>
            <li>Chat with fellow Bootstrappers in IRC. On the <code class="highlighter-rouge">irc.freenode.net</code> server, in the <code class="highlighter-rouge">##bootstrap</code> channel.</li>
            <li>Implementation help may be found at Stack Overflow (tagged <a href="https://stackoverflow.com/questions/tagged/bootstrap-4"><code class="highlighter-rouge">bootstrap-4</code></a>).
            </li>
            <li>Developers should use the keyword <code class="highlighter-rouge">bootstrap</code> on packages which modify or add to the functionality of Bootstrap when distributing through <a href="https://www.npmjs.com/browse/keyword/bootstrap">npm</a> or similar delivery mechanisms for maximum discoverability.
            </li>
          </ul>
          <p>You can also follow <a href="https://twitter.com/getbootstrap">@getbootstrap on Twitter</a> for the latest gossip and awesome music videos.</p>
        </div>
      </div>
    </div>
  </main>
  <?php include('_partials/footer.php'); ?>