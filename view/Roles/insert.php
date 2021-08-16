<div class="container">
    <div class="jumbotron">
        <h3>Registrar Rol</h3>
    </div>
    <form action="<?php echo getUrl("Roles","Roles","postInsert") ?>" method="post">
        <div class="row">
            <div class="col-md-2">
                <label>Rol</label>
                <input type="text" name="nom_rol" class="form-control">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-success" style="margin:10px 0;">
            </div>
        </div>
    
    </form>
</div>
