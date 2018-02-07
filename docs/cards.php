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
                <li>
                  <a href="../docs/quick-start.php">Quick Start</a>
                </li>
              </ul>
              <a class="bd-toc-link" href="#">Components</a>
              <ul class="nav bd-sidenav">
                <li class="active bd-sidenav-active">
                  <a href="../docs/cards.php">Cards</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-12 col-md-9 col-xl-10 page-content-w-sidebar">

          <h1><a id="Cards_0"></a>Cards</h1>
          <p>Cards replace Bootstrap 3’s panels, wells, and thumbnails. A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.</p>
          <h3><a id="Basic_Card_2"></a>Basic Card</h3>
          <p>A basic card with a title, body and button:</p>
          <div class="bd-example">
            <div class="card flex-md-row mb-4 box-shadow" style="width: 18rem;">
              <div class="card-body">
                <h3 class="mb-0"><a class="text-dark" href="#">Card Title</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-main btn-outline-primary btn-sm" href="#" role="button">Read More</a>
              </div>
            </div>
          </div>
          <script src="https://gist.github.com/asilcetin/1f2e68fa9012f12f41c077cea342dc28.js"></script>
          <h3><a id="Card_with_Side_Thumbnail_4"></a>Card with Side Thumbnail</h3>
          <p>A card with a title, body, side thumbnail and button:</p>
          <div class="bd-example">
            <div class="card flex-md-row mb-4 box-shadow" style="width: 36rem;">
              <div class="card-body">
                <h3 class="mb-0"><a class="text-dark" href="#">Card Title</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-main btn-outline-primary btn-sm" href="#" role="button">Read More</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16171157253%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16171157253%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
          </div>
          <script src="https://gist.github.com/asilcetin/2a91a4502e9bd2ba6903b7e669a19f0e.js"></script>

        </div>
      </div>
    </div>
  </main>
  <?php include('_partials/footer.php'); ?>
