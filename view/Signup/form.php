<div class="container">
<div class="img">
    <img src="img/login/png/deportes.png" alt="">
</div>
    <div class="form form-group">
        <div class="row">
            <div class="col-md-6">
                <h1>Resgistrate</h1>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-link"><span>&laquo;<a href="index.php">volver al inicio</a></span></button>
            </div> 
        </div>
        <form action="<?php echo getUrl("Registro","Registro","signup",false,"ajax")?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <input type="number" name="doc_user" class="form-control" placeholder="Ingrese su documento">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="hidden" name="cod_rol">
                    <input type="text" name="nom_user" id="nombres" class='form-control' maxlength="100" required placeholder="Nombres" >
                </div>
                <div class="col-md-6">
                    <input type="text" name="ape_user" id="apellidos" class='form-control' maxlength="100" required placeholder="Apellidos">
                </div>
        
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="dir_user" class='form-control' placeholder="Direccion">
                </div>
                <div class="col-md-6">
                    <input type="number" name="tel_user" class='form-control' placeholder="Numero telefonico">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="email" name="corr_user" id="correo_electronico" class='form-control' maxlength="64" required placeholder="Correo Electronico:">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="login_user" class="form-control" placeholder="Nombre de usuario">
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-6">
                    <input type="password" name="pass_user" class="form-control" placeholder="Contrase??a">
                </div>
                <!-- <div class="col-md-6">
                    <label>Verificar contrase??a</label>
                    <input type="password" name="passw_user" class="form-control" id="">
                </div> -->
            </div>
            <div class="row boton">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success btn-block">Registrarme</button>
                </div>
            </div>
        </form>
        
    </div>
</div>     
    