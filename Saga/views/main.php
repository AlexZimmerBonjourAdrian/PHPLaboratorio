<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Saga!</title>
    <meta property="og:type" content="">
    <meta name="twitter:card" content=""> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=948c3fe63c566a54d1eb3ca0cc6e34d0">
</head>

<body>
    <header>

        <nav class="navbar navbar-light navbar-expand-md bg-white navbar-fixed-top navigation-clean-button">
            <div class="container-fluid">
                <div><a class="navbar-brand" href="#"><span><img class="img-fluid" src="assets/img/LogoSagaMiniHead.png?h=e75b8e5c11071fc95057538e3ff06ad0" width="70px" height="35px"></span> </a></div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav nav-right">
                        <li class="nav-item"><a class="nav-link active" href="<?php echo ROOT_URL; ?>">Saga</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Recursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Categorias</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL;?>users/suscripcion">Suscribirse</a></li>
                      </ul>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Su busqueda aqui....">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>                    
                    <?php if(isset($_SESSION['is_logged_in'])) : ?>
                    <!-- Si esta log -->
                    
                    <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="background: #e78200;"></a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Perfil</a><a class="dropdown-item" href="#">Recursos</a><a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/logout">Logout </a></div>
                    </div>   
                     
                           
                    <?php else : ?>
                    <!-- Si no esta log -->
                    <p class="ml-auto navbar-text actions"><a class="text-black-50 login" href="<?php echo ROOT_URL; ?>users/login">Login</a> 
                    <a class="btn btn-primary btn-sm action-button" role="button" href="<?php echo ROOT_URL; ?>users/register" style="background: #e78200;">Registro</a></p>
                    <?php endif; ?>
            </div>
            </div>
        </nav>
    </header>
    <div class="container">

    <div class"=row">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>