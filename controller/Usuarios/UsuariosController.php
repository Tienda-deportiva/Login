<?php 
    include_once '../model/Usuarios/UsuariosModel.php';

    class UsuariosController{
        public function getInsert(){
            include_once '../view/Usuarios/insert.php';
        }
        public function postInsert(){
            $obj=new UsuariosModel();
            $cod_user=$obj->autoincrement("usuarios","cod_user");
            $nom_user=$_POST['nom_user'];
            $ape_user=$_POST['ape_user'];
            $corr_user=$_POST['corr_user'];
            $login_user=$_POST['login_user'];
            $passw_user=$_POST['passw_user'];
            $cod_rol=$_POST['cod_rol'];

            $sql="INSERT INTO usuarios VALUES($cod_user,'$nom_user','$ape_user','$corr_user','$login_user','$passw_user',$cod_rol)";
            $ejecutar=$obj->insert($sql);
            
            if ($ejecutar) {
                redirect(getUrl("Usuarios","Usuarios","getInsert"));
            }else{
                echo "Ups ha ocurrido un error";
            }
        }
        public function consult(){
            $obj=new UsuariosModel();
            $sql="SELECT usuarios.cod_user,usuarios.nom_user, usuarios.Ape_user, usuarios.corr_user, usuarios.login_user, usuarios.passw_user, usuarios.cod_rol, roles.nom_rol FROM usuarios,roles WHERE usuarios.cod_rol=roles.cod_rol";
            $usuarios=$obj->consult($sql);
            include_once '../view/Usuarios/consult.php';
        }
        public function getUpdate(){
            $obj=new UsuariosModel();
            $cod_user=$_GET['cod_user'];
            $sql="SELECT * FROM usuarios WHERE cod_user=$cod_user";
            $usuario=$obj->consult($sql);
            $sql="SELECT * FROM roles";
            $roles=$obj->consult($sql);
            include_once '../view/Usuarios/update.php';
        }
        public function postUpdate(){
            $obj=new UsuariosModel();
            $cod_user=$_POST['cod_user'];
            $nom_user=$_POST['nom_user'];
            $ape_user=$_POST['ape_user'];
            $corr_user=$_POST['corr_user'];
            $login_user=$_POST['login_user'];
            $passw_user=$_POST['passw_user'];
            $cod_rol=$_POST['cod_rol'];

            $sql="UPDATE usuarios SET  nom_user='$nom_user', ape_user='$ape_user', corr_user='$corr_user', login_user='$login_user', passw_user='$passw_user', cod_rol=$cod_rol WHERE cod_user=$cod_user";

            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Usuarios","Usuarios","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
        public function getDelete(){
            $obj=new UsuariosModel();
            $cod_user=$_GET['cod_user'];
            $sql="SELECT * FROM usuarios WHERE cod_user=$cod_user";
            $usuario=$obj->consult($sql);
            $sql ="SELECT * FROM roles";
            $roles=$obj->consult($sql);
            include_once '../view/Usuarios/delete.php';
        }
    
        public function postDelete(){
            $obj=new UsuariosModel();
            $cod_user=$_POST['cod_user'];
            $sql="DELETE FROM usuarios WHERE cod_user=$cod_user";
            $ejecutar=$obj->delete($sql);
            
            if ($ejecutar) {
                redirect(getUrl("Usuarios","Usuarios","consult"));
            }else{
                echo "ups, ha ocurrido un error";
            }
        }

    }

?>