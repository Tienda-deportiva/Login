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