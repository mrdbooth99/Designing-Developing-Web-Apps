<!DOCTYPE html>
<html class="theme-light" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Designing & Developing Web Applications</title>
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/44e2c1fc40.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <script type="module" defer src="js/script.js"></script>
  </head>
  <body>
    <section class="section section--nav">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="">
            <figure class="image">
              <img class="logo" src="assets/booths-logo-original.png" />
            </figure>
          </a>

          <a
            role="button"
            class="navbar-burger"
            aria-label="menu"
            aria-expanded="false"
            data-target="navbarBasicExample"
          >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start"></div>

          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary">
                  <strong>Sign up</strong>
                </a>
                <a class="button is-light"> Log in </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </section>
    <section class="section section--main">
      <container class="container container--products">
        <div class="columns">
          <div class="column is-three-fifths product-list">
            <table class="table product-list-table">
              <thead>
                <tr>
                  <th><abbr title="ID">ID</abbr></th>
                  <th><abbr title="Name">Name</abbr></th>
                  <th><abbr title="Description">Description</abbr></th>
                  <th><abbr title="Price">Price</abbr></th>
                  <th><abbr title="Image">Image</abbr></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th><abbr title="ID">ID</abbr></th>
                  <th><abbr title="Name">Name</abbr></th>
                  <th><abbr title="Description">Description</abbr></th>
                  <th><abbr title="Price">Price</abbr></th>
                  <th><abbr title="Image">Image</abbr></th>
                </tr>
              </tfoot>
              <tbody class="product-list-table-body"></tbody>
            </table>
          </div>
          <div class="column is-two-fifths is-align-self-center">
            <figure class="image is-256x256 image--product">
              <img class="product-image" src="assets/beans.avif" />
            </figure>
          </div>
        </div>
      </container>
    </section>
  </body>
</html>
