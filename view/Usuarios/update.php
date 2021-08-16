<div class="container">
    <div class="jumbotron">
        <h1>Editar usuarios</h1>
    </div>
    <div class="form">
    <?php 
        while($user=mysqli_fetch_assoc($usuario)){
    ?>
        <form action="<?php echo getUrl("Usuarios","Usuarios","postUpdate",false)?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label>Nombres:</label>
                    <input type="hidden" name="cod_user" value="<?php echo $user['cod_user']; ?>">
                    <input type="text" name="nom_user" id="nombres" class='form-control' value="<?php echo $user['nom_user'];?>" maxlength="100" required >
                </div>
                <div class="col-md-6">
                    <label>Apellidos:</label>
                    <input type="text" name="ape_user" id="apellidos" class='form-control' value="<?php echo $user['ape_user'];?>" maxlength="100" required >
                </div>
        
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label>Correo electrónico:</label>
                    <input type="email" name="corr_user" id="correo_electronico" value="<?php echo $user['corr_user'];?>"class='form-control' maxlength="64" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Nombre de usuario</label>
                    <input type="text" name="login_user" value="<?php echo $user['login_user'];?>" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Contraseña</label>
                    <input type="password" name="passw_user" value="<?php echo $user['passw_user'];?>" class="form-control">
                </div>
                <div class="col-md-4">
                <div class="form-group">
                <label for="sel1">rol</label>
                    <select class="form-control" id="sel1" name="cod_rol">
                       <?php 
                            while ($rol=mysqli_fetch_assoc($roles)) {

                                if ($rol['cod_rol']==$user['cod_rol']) {
                                    echo "<option value='".$rol['cod_rol']."' selected>".$rol['nom_rol']."</option>";
                                }else{
                                    echo "<option value='".$rol['cod_rol']."'>".$rol['nom_rol']."</option>";
                                }
                                
                            }
                       ?>
                    </select>
                    
                </div>
                </div>
            </div>
            <div class="row boton">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success btn-block" style="margin: 20px 0;">Editar</button>
                </div>
            </div>
        </form>
        <?php 
            }
        ?>
    </div>
</div>     