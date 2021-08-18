<?php 
    include_once '../model/Registro/RegistroModel.php';

    class RegistroController{
        public function signup(){
            $obj=new RegistroModel();
            $cod_user=$obj->autoincrement("usuarios","cod_user");
            $doc_user=$_POST['doc_user'];
            $nom_user=$_POST['nom_user'];
            $ape_user=$_POST['ape_user'];
            $dir_user=$_POST['dir_user'];
            $tel_user=$_POST['tel_user'];
            $corr_user=$_POST['corr_user'];
            $login_user=$_POST['login_user'];
            $pass_user=$_POST['pass_user'];
            $cod_rol=$_POST['cod_rol']=2;
            
            $sql="INSERT INTO usuarios VALUES ($cod_user,$doc_user,'$nom_user','$ape_user','$dir_user',$tel_user,'$corr_user','$login_user','$pass_user',$cod_rol)";
            $ejecutar=$obj->insert($sql);
            
            if ($ejecutar) {
                redirect("login.php");
            }else{
                echo "Ups ha ocurrido un error";
            }
        }
    }

?>