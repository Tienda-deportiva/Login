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
    