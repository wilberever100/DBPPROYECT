<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Mi Perfil</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>


  
  <body>
	<!-- preguntar lo del nickname-->
  <br><br><br>
	<?php echo "Hola" . $_GET['user']; ?>
  <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img  src="imagenes/casa.png" title="MiFoto" alt="" width="30" height="30" >
        Home
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Foro</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Configuración
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="editar.html">Editar Información</a>
              <a class="dropdown-item" href="#">Cambiar Nombre</a>
              <a class="dropdown-item" href="#">Cambiar Contraseña</a>
          </div>
        </li>
      </ul> 
      
    </div>

    <a class="navbar-brand" href="#">
        Log Out
        <img  src="imagenes/cancelar.png" title="MiFoto" alt="" width="30" height="30" >
        
      </a>
  </nav>



    <div class="container">
     
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark row">
        <div class="col-md-9 px-0">
          <h1 class="display-4 font-italic">Bienvenido</h1>
          <p class="lead my-3">Género, Usuario</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Editar</a></p>
          
        </div>
        <div class="col-md-3">
          <img  src="imagenes/perfil.png" title="MiFoto" alt="" width="200" height="200" >
        </div>
      </div>

      <div class="row mb-3 justify-content-between">
        <div class="col-md-6">
          <div class="card flex-md-row mb-1 box-shadow h-md-250">
            
             
            
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Pelicula</strong>
                <h5 class="mb-1">
                  <a class="text-dark" href="#">Título de la película</a>
                </h5>
                <p class="card-text mb-auto">Esta es una breve descripción de la película.</p>
              </div>
            
                <img  src="imagenes/pelicula.png" width="200" height="200" alt="Card image cap">
          </div>

        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Actor</strong>
              <h5 class="mb-0">
                <a class="text-dark">Nombre del Actor</a>
              </h5>
      
              <p class="card-text mb-auto">Esta es una breve descripción del actor.</p>
              
            </div>
           <img  src="imagenes/actor.png" width="200" height="200" alt="Card image cap">
          </div>
        </div>

        <div class="col-md-6">
          <div class="card flex-md-row mb-1 box-shadow h-md-250">
            
             
            
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Género</strong>
                <h5 class="mb-1">
                  <a class="text-dark" href="#">Género preferido</a>
                </h5>
                <p class="card-text mb-auto">Esta es una breve descripción del género.</p>
              </div>
            
                <img  src="imagenes/genero.png" width="200" height="200" alt="Card image cap">
          </div>

        </div>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Cine</strong>
              <h5 class="mb-0">
                <a class="text-dark">Nombre del Cine</a>
              </h5>
      
              <p class="card-text mb-auto">Esta es una breve descripción del Cine.</p>
              
            </div>
           <img  src="imagenes/cine.png" width="200" height="200" alt="Card image cap">
          </div>
        </div>



      </div>
    </div>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
