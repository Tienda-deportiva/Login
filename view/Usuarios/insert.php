<div class="container">
    <div class="jumbotron">
        <h1>Registrar usuarios</h1>
    </div>
    <div class="form">
        
        <form action="<?php echo getUrl("Usuarios","Usuarios","postInsert",false)?>" method="post">
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
                <div class="col-md-4">
                <div class="form-group">
                <label for="sel1">rol</label>
                    <select class="form-control" id="sel1" name="cod_rol">
                        <option>..Selecione un rol</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                    
                </div>
                </div>
            </div>
            <div class="row boton">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success btn-block" style="margin: 20px 0;">Registrar</button>
                </div>
            </div>
        </form>
        
    </div>
</div>     
    