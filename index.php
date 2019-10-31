  <!DOCTYPE html>
  <html>

  <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>

      <!-- navbar -->
      <div class="navbar-fixed">
          <nav>
              <div class="nav-wrapper">
                  <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                  <a href="#" class="brand-logo" style="padding-left:10px;" data-target="slide-out">Booku</a>
                  <form>
                      <div class="input-field right" width="500px">
                          <input id="search" type="search" required>
                          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                          <i class="material-icons">close</i>
                      </div>
                  </form>
              </div>
          </nav>

      </div>


      <!-- sidenav -->

      <ul id="slide-out" class="sidenav">
          <li>
              <div class="user-view">
                  <div class="background">
                      <img src="img/bground.jpg">
                  </div>
                  <a href="#user"><img class="circle" src="img/avatar.jpg"></a>
                  <a href="#name"><span class="white-text name">Sarah Siti S</span></a>
                  <a href="#email"><span class="white-text email">sarahsitis@gmail.com</span></a>
              </div>
          </li>
          
          <li><a class="waves-effect" href="#!"><i class="material-icons">exit_to_app</i>Logout</a></li>
      </ul>



      <!-- content table -->
      <div class="container">
          <h3 class="center">Book List</h3>
          <a class="btn-floating btn-large waves-effect waves-light red right tooltipped modal-trigger" data-position="bottom" data-tooltip="Add New Data" href="#addData"><i class="material-icons">add</i></a>
          <table class="highlight responsive-table">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Item Name</th>
                      <th>Item Price</th>
                  </tr>
              </thead>

              <tbody>
                  <tr>
                      <td>Alvin</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                  </tr>
                  <tr>
                      <td>Alan</td>
                      <td>Jellybean</td>
                      <td>$3.76</td>
                  </tr>
                  <tr>
                      <td>Jonathan</td>
                      <td>Lollipop</td>
                      <td>$7.00</td>
                  </tr>
              </tbody>
          </table>
      </div>

      <!-- Modal Structure -->
        <div id="addData" class="modal">
            <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          const sidenav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sidenav);

          const tooltip = document.querySelectorAll('.tooltipped');
          M.Tooltip.init(tooltip);

          const addModal = document.querySelectorAll('.modal');
          M.Modal.init(addModal);
      </script>
  </body>

  </html>