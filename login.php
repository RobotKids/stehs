<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHALOM</title>
    <link rel="stylesheet" href="view/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/vendor/iconos/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/vendor/iconos/css/iconos.min.css">
	<link rel="stylesheet" href="view/vendor/admin/css/estilos.css">
</head>
<body> 
    <nav class="navbar navbar-dark bg-dark">
      <font color="white"><h5>SISTEMA StehsPro</h5></font>
       <a href="#Modal" data-toggle="modal" class="navbar-brand"><i class="fa fa-user-circle fa-lg"></i></a>
        <div class="modal fade" id="Modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">LOGIN</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="comprueba_login.php" method="post">
                            <div class="form-group">
                                <label for="login" class="form-control-label">USUARIO:</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                    <input type="text" name="login" class="form-control" id="login">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-control-label">CONTRASEÑA:</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"><i class="fa fa-lock fa-lg"></i></div>
                                    <input type="password" name="password" class="form-control" id="password">
                                 </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="enviar" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i></button>
                                <button type="reset" class="btn btn-primary"><i class="fa fa-eraser"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div
        </div>
    </nav>
   
   <div class="container-fluid">
    <div class="row slider">
        <div class="col">
            <div class="carousel slide" id="slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="view/vendor/admin/img/inicio.jpg" alt="1" class="d-block img-fluid">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                
               
            </div>
        </div>
    </div>
</div>
    
    
    <script src="view/vendor/jquery/jquery.min.js"></script>
	<script src="view/vendor/popper/popper.min.js"></script>
	<script src="view/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>