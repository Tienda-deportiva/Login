<div class="container-fluid login-control">
    <div class="row">
      <div class="col-md-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            
          </ol>
      
          <div class="carousel-inner content-carousel" role="listbox">
      
            <div class="item active">
              <img src="img/product01.png" alt="Chania" class="img">
              <div class="carousel-caption">
                <h3>Chania</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>
      
            <div class="item">
              <img src="img/logo.png" alt="Chania" class="img" >
              <div class="carousel-caption">
                <h3>Chania</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>
          
            <div class="item">
              <img src="img/Anime 3.jpg" alt="Flower"  class="img">
              <div class="carousel-caption">
                <h3>Flowers</h3>
                <p>Beautiful flowers in Kolymbari, Crete.</p>
              </div>
            </div>
        
            </div>   
          </div>
        </div>
      </div>
          <div class="col-md-6 formulario-login">
            <div class="formulario">
                <form action="<?php echo getUrl("Acceso","Acceso","login",false,"")?>" method="post" class="form-group">
                  <div class="logo">
                    <img src="img/login/user.png" alt="logo">
                    </div>
                    <div >
                      <label><b>Username</b></label>
                      <input type="text" class="form-control" placeholder="Enter Username" name="user" required>
                  
                      <label><b>Password</b></label>
                      <input type="password"  class="form-control" placeholder="Enter Password" name="clave" required>
                          
                      <input type="submit" value="Ingresar">
                      <input type="checkbox" checked="checked"> Remember me
                    </div>
                
                  <div>
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">¿No tienes cuenta? <a href="signup.php">Registrarme</a></span>
                  </div>
            </form>
      </div>
    </div>
  </div>
      
        
        </div>
    </div>
</div>