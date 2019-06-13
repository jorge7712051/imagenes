<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Practica uno</title>
  </head>
  <body style="background-color: #f2f2f2;" >
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Envio de imagenes</span>
    </nav>
    <div class="container">
      <div class="row pt-5">
        <div class="col-md-12">
          <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <h5 class="card-header">Buscar Imagen</h5>
                  <div class="card-body">
                    <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombreimg" aria-describedby="nombre" placeholder="Nombre imagen">
                    </div>
                    <a href="#" onclick="respuesta()" class="btn btn-primary" id="buscaimagen">Buscar</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <h5 class="card-header">Descargar Imagen</h5>
                  <div class="card-body">
                    <form id="frmadown" method="post" action="controllers/imagenes.php" enctype="multipart/form-data">
                     <div class="form-group">
                      <label for="nombredescarga">Nombre archivo</label>
                      <input type="text" class="form-control" id="nombredescarga" required="required" name="nombredescarga" placeholder="Nombre imagen">

                    </div>
                      <div class="form-group">
                      <input type="hidden" name="accion" value="DescargarImagen" >
                      </div>
                       <BUTTON class="btn btn-primary">Descargar</BUTTON>               
                  </form>
                   
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <h5 class="card-header">Subir Imagen</h5>
                  <div class="card-body">
                   <form id="frma" method="post" action="index.php" enctype="multipart/form-data">
                     <div class="form-group">
                      <label for="nombrearchivo">Nombre archivo</label>
                      <input type="text" class="form-control" id="nombrearchivo" required="required" >
                    </div>
                      <div class="form-group">
                      <label for="archivo">Archivo</label>
                      <input type="file" class="form-control-file" id="archivo"  accept="image/x-png,image/gif,image/jpeg,application/pdf" > </div>                     
                  </form>
                   <a href="#" class="btn btn-primary" id="subir">Subir Imagen </a>
                  </div>
                </div>
              </div>
          </div>                
        </div>       
      </div>
    </div>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/imagenes.js" ></script>
    <script src="https://unpkg.com/ionicons@4.5.9-1/dist/ionicons.js"></script>
  </body>
</html>