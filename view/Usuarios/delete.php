<div class="container">
    <div class="jumbotron">
        <h1>Editar usuarios</h1>
    </div>
    <div class="form-group">
    <?php 
        while($user=mysqli_fetch_assoc($usuario)){
    ?>
        <form action="<?php echo getUrl("Usuarios","Usuarios","postDelete",false,"ajax")?>" method="post">
            <div class="row">
                <div class="col-md-4">
                    <label >Documento</label>
                    <input type="number" name="doc_user" class="form-control" placeholder="Ingrese su documento" value="<?php echo $user['doc_user'];?>">
                </div>
            </div>
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
                <div class="col-md-4">
                    <label>Direccion</label>
                    <input type="text" name="dir_user" class='form-control' placeholder="Direccion" value="<?php echo $user['dir_user'];?>">
                </div>
                <div class="col-md-4">
                    <label >telefono</label>
                    <input type="number" name="tel_user" class='form-control' placeholder="Numero telefonico" value="<?php echo $user['tel_user'];?>">
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
            <div class="row mt-4">
                <div class="col-md-4">
                    <p>¿Estas seguro de eliminar el usuario?</p>
                    <input type="submit" value="Confirmar" class="btn btn-danger">
                    <a href="<?php echo getUrl("Usuarios","Usuarios","consult")?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
                </div>
            </div>
        </form>
        <?php 
            }
        ?>
    </div>
</div>  
