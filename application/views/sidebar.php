<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">#MenuLateral </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Atalhos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Perfil</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <!--  <button class="btn btn-primary toogle-icon" id="menu-toggle">#EsconderBarraLateral</button> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">#Conteudo</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac orci malesuada, varius libero sed, fermentum ligula. Suspendisse ac turpis faucibus, malesuada risus quis, tempor erat. Integer fringilla rutrum ullamcorper. Duis nibh mauris, dictum ut quam vitae, hendrerit suscipit felis. Phasellus consequat nisl est, sit amet tempus dui convallis eu. Etiam sit amet augue justo. Phasellus a sodales ligula. Pellentesque cursus blandit blandit.

            N unc sit amet libero nec lacus commodo sagittis at ac sem. Aenean laoreet at dui nec dapibus. Nunc et orci rhoncus, cursus eros varius, malesuada diam. Etiam dapibus urna at felis vulputate, varius fermentum ante mollis. Ut dictum scelerisque purus vitae ultricies. Mauris venenatis scelerisque justo. Proin molestie faucibus volutpat.

              Cras ligula augue, viverra sed sapien fermentum, tempor dictum justo. Duis quis aliquam arcu, vel lobortis lectus. Morbi sit amet mi a elit luctus eleifend in sit amet ante. Donec fringilla, arcu a pellentesque lacinia, lacus sem sodales ipsum, at dapibus justo enim nec augue. Vivamus eu luctus ipsum. Vivamus urna dui, aliquam in varius vitae, tempor eu nunc. Morbi porta dictum magna vel accumsan. Aenean sed ipsum eget neque commodo condimentum nec mattis ipsum. Cras sagittis erat et nibh ultrices vehicula. Nulla eu suscipit velit. Sed imperdiet posuere condimentum. Mauris nec tincidunt ante.

             vitae tortor sem. Quisque cursus, nisl at dictum condimentum, velit lectus gravida libero, a tristique lacus nunc eget odio. Pellentesque pharetra a ante at cursus. Aenean sodales aliquam dolor, id facilisis arcu venenatis sed. In ultrices magna lacus, eu posuere lectus finibus at. Ut sodales bibendum lorem, ac finibus diam laoreet in. Sed ac ante eleifend, tincidunt eros et, dignissim tortor. Vivamus at ipsum sit amet ipsum pellentesque mattis. Vestibulum lobortis laoreet mi. Duis tristique velit vitae maximus viverra. Donec accumsan in nunc et auctor. Quisque elementum odio mi, vestibulum pellentesque ipsum tempor a. Suspendisse dignissim, dolor commodo mattis dapibus, nibh sapien ornare mi, sit amet rutrum sem mauris ut nulla. Donec imperdiet lacus vitae tortor scelerisque, et venenatis lorem molestie. Proin magna quam, feugiat id dictum non, dignissim ac sapien.

            Nullam ut mauris tempus, tempor metus nec, mattis ante. Aenean fermentum pulvinar ex quis tristique. In placerat vitae justo pretium dignissim. Mauris congue ipsum bibendum mi faucibus lacinia. Nulla eu sapien nec mi pulvinar hendrerit. Sed varius sit amet eros eget convallis. Nunc consectetur vel eros quis mattis. Etiam consequat molestie odio, ac varius elit maximus et.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
