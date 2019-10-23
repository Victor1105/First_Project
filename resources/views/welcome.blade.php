<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/home/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/home/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/home/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        
    </head>
    <body>


    <section id="intro">
      <div class="overlay"></div>
      <div class="container position-relative pt-3 pb-5">
        <ul class="list-inline text-center text-lg-right">
          <li class="list-inline-item"><a href="#" class="social-link facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link twitter"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link instagram"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="container text-center text-white position-relative pt-lg-5 my-5">
        <h1 class="text-shadow mb-5"><img src="" alt=""/></h1>
        <p class="h2 font-family-base font-weight-light text-shadow">Sistema de Optimización de Listas de Espera Quirúrgicas.</p>
      </div>
      <div class="container text-white position-relative text-center py-5">
        
          <div class="col-lg-5 mx-auto">
            <form>
              <div class="row">  
                Usuario: <input id="inlineFormInputName" type="email" placeholder="" class="form-control mb-2 mr-sm-2 transparent-bg">
              </div>
              <div class="row">
              Clave: <input id="inlineFormInputName2" type="email" placeholder="" class="form-control mb-2 mr-sm-2 transparent-bg">
              </div>
              <div class="row text-align: center"  >
              <a href="{{ action('MenuController@index') }}" class="btn btn-primary letter-spacing-3 mb-2">Ingresar</a>
              </div>
            </form>
          </div>
        
      </div>
      <footer class="py-4 position-relative w-100 text-small">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center text-white text-sm-left">
              <p>&copy;2019 SIGA </p>
            </div>
            <div class="col-sm-6 text-center text-white text-sm-right">
              <p class="mb-1">Diseñado por  <a href="#" class="text-white">Victor_77@siga.cl</a></p>
              <p>Soporte: <a href="https://www.gmail.com/" class="text-white">victor.tobar.vera@gmail.com</a></p>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <!-- JavaScript files-->
    <script src="js/home_js/jquery.min.js"></script>
    <script src="js/home_js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    </body>
</html>
