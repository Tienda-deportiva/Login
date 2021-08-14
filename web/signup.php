<?php
    include_once '../lib/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registro</title>
    <style>
body {
    color: #000000;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
    background: rgb(75, 14, 14);
}
.form{
    width: 70%;
    height: 80vh;
    margin: 30px auto;
    background: rgba(2, 3, 59, 0.425);
    border-radius: 10px;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
h2{
    color: white;
    text-align: center;
}
.boton{
    margin-top: 40px;
}

input,label{
    margin-top: 20px;
    color: white;
}
.img{
    float: right;
    width: 25%;
    height: 10vh;
    max-width: 960px;
    margin: 0 auto;
}
.img img{
    width: 100%;
    height: auto;
}
    </style>
</head>
<body>
<div class="container">
    <div class="img">
        <img src="img/login/png/deportes.png" alt="">
    </div>
        <div class="form">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6"><h2>Registrar <b>Usuario</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
           
            <form action="<?php echo getUrl("Registro","Registro","signup",false)?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nombres:</label>
                        <input type="hidden" name="cod_rol">
                        <input type="text" name="nom_user" id="nombres" class='form-control' maxlength="100" required >
                    </div>
                    <div class="col-md-6">
                        <label>Apellidos:</label>
                        <input type="text" name="ape_user" id="apellidos" class='form-control' maxlength="100" required >
                    </div>
          
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label>Correo electrónico:</label>
                        <input type="email" name="corr_user" id="correo_electronico" class='form-control' maxlength="64" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nombre de usuario</label>
                        <input type="text" name="login_user" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Contraseña</label>
                        <input type="password" name="passw_user" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label>Verificar contraseña</label>
                        <input type="password" name="passw_user" class="form-control" id="">
                    </div>
                </div>
                <div class="row boton">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success btn-block">Registrarme</button>
                    </div>
                </div>
            </form>
          
        </div>
    </div>     
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<div class="col-md-12 pull-right">
                    