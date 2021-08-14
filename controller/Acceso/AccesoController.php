<?php 
    include_once '../model/Acceso/AccesoModel.php';

    class AccesoController{
        public function login(){
            $obj=new AccesoModel();

            $user=$_POST['user'];
            $clave=$_POST['clave'];

            $sql="SELECT cod_user, nom_user, ape_user, cod_rol FROM usuarios WHERE passw_user='$clave' AND (corr_user='$user' OR login_user ='$user') ";
            
            $usuario=$obj->consult($sql);

            if (mysqli_num_rows($usuario)>0) {
                while ($usu=mysqli_fetch_assoc($usuario)) {
                    $_SESSION['nombre']=$usu['nom_user'];
                    $_SESSION['apellido']=$usu['ape_user'];
                    $_SESSION['id']=$usu['cod_user']; 
                    $_SESSION['rol']=$usu['cod_rol'];
                }
                redirect ("index.php");
            }else{
                redirect ("login.php");
            }
        }
    }
?>