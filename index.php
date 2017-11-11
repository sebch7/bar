<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Android</title>

    <!-- Page styles 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.2/dialog-polyfill.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <dialog class="mdl-dialog">
      <h4 id="container-modal-title" class="mdl-dialog__title"></h4>
      <div class="mdl-dialog__content" id="container-modal-content">
        
      </div>
      <div class="mdl-dialog__actions">
        <button type="button" class="mdl-button close">Cerrar</button>
      </div>
    </dialog>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <!--<img class="android-logo-image" src="images/android-logo.png">-->
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <!-- Navigation -->
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <!--<li class="mdl-menu__item">5.0 Lollipop</li>-->
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <!--<span class="mdl-layout-title">
          <img class="android-logo-image" src="images/android-logo-white.png">
        </span>-->
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Inicio</a>
          <a class="mdl-navigation__link" href="">Administrar Mesas</a>
          <a class="mdl-navigation__link" href="">Administrar Inventario</a>
          <a class="mdl-navigation__link" href="">Bodega</a>
          <div class="android-drawer-separator"></div>
        </nav>
      </div>

      <div class="android-content mdl-layout__content">
        
        <div class="android-more-section">
          <div class="android-card-container mdl-grid">

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Mesa 4</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Cant</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for($i=0;$i<3;$i++){ ?>
                    <tr>
                      <td><i class="material-icons eliminarRegistro">close</i>Cerveza Aguila</td>
                      <td>3</td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td><i class="material-icons eliminarRegistro">close</i>Aguardiente Ant. Litro</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <th>TOTAL</th>
                      <th>12.000</th>
                    </tr>
                  </tbody>
                </table>
                </span>
              </div>
              <div class="mdl-card__actions nuevoItem">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase">
                   Nuevo item
                   <i class="material-icons">add_circle</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Mesa 1</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Cant</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for($i=0;$i<5;$i++){ ?>
                    <tr>
                      <td><i class="material-icons eliminarRegistro">close</i>Cerveza Club Colombia</td>
                      <td>3</td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <th>TOTAL</th>
                      <th>32.000</th>
                    </tr>
                  </tbody>
                </table>
                </span>
              </div>
              <div class="mdl-card__actions nuevoItem">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" >
                   Nuevo item
                   <i class="material-icons">add_circle</i>
                 </a>
              </div>
            </div>

            
          </div>
        </div>

        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Thinkg<sup>®</sup> 2017 Todos los derechos reservados</p>
          </div>

        </footer>
      </div>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
