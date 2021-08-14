<?php
  include_once '../lib/helpers.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/login.css"> -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>Login</title>
<style>
  .login-control{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: rgb(0,0,0);
    background: linear-gradient(90deg, rgba(0,0,0,1) 44%, rgba(139,6,6,1) 75%);
  }

  .formulario-login{
    background: rgb(3, 42, 48);
    width: 25vw;
    height: 70vh;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px; 
  }
  h2{
    margin-bottom:10px;
  }

  input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 15px 0;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }

  button {
      background-color: #000000;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 40%;
  }

  button:hover {
      opacity: 0.8;
  }

  .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
  }

  .logo {
    width: 50%;
    height: 20vh;
    text-align: center;
    margin: 20px auto;
  }

  .logo img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
  }

  /* carousel */
  .content-carousel{
    max-width: 960px;
    width: 25vw;
    height: 70vh;
    background: chartreuse;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
  }
  .img{
    width: 100%;
    background: chocolate;
    height: 100vh;
  }
  label, span{
    color:white;
  }
</style>
</head>
<body>
<div class="container-fluid login-control">
    <div class="row">
      <div class="col-md-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            
          </ol>
      
          <!-- Wrapper for slides -->
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
                <form action="<?php echo getUrl("Acceso","Acceso","login",false)?>" method="post" class="form-group">
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

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
