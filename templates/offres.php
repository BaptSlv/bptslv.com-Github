<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Baptiste Salvi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/agency.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Offres - Services</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../controlers/indexOffres.php">Nos services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../controlers/indexLogin.php">Se connecter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../controlers/indexRegister.php">S'enregistrer</a>
            </li>
            <li class="nav-item">
              <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" ariexpanded="false">
                  <i class="fa fa-shopping-basket"></i> Panier</a>
                </button>
                <?= $infoP ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Corps de la page panier -->
    <section id="panier">
      <div class="container containoff">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-heading text-center">Nos offres TDLStar</h2>
            <blockquote class="blockquote blockquote-reverse">
              <p class="mb-0">
                Voici le catalogue de nos offres. Ces dernières sont fictives, c'est à dire qu'elles n'existent pas réellement. Elles sont disponibles uniquement à titre d'exemple, pour attester de la gestion de panier réalisée sur ce projet. Vous pouvez ajouter ces offres à votre panier mais vous ne pourrez pas effectuer de réglement. Les fonctionnalités du site sont toutes disponibles gratuitement.</a>
                <p>Bonne découverte.</p>
              </p>
            </blockquote>
          </div>
          <?= $offresP ?>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Baptiste Salvi</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#"></a>
              </li>
              <li class="list-inline-item">
                <a href="#"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>

  </body>

</html>