<?php
namespace Controller;
use Library;
class Usuario extends Library\Controller
{
    public function __construct() {
        session_start();
    }
    public function Login()
    {
        $this->vista('Usuario/login');

    }
    public function Validar()
    {
        $_SESSION['Rol']=$_POST['Rol'];
        \header('Location:'.RUTA_URL.'Usuario/Perfil');
    }
    public function Salir()
    {
        \session_unset();
        \session_destroy();
        \header('Location:'.RUTA_URL.'Usuario/Login');
    }
    public function Perfil()
    {
        $this->vista('Usuario/perfil');
    }
    public function Registros()
    {
        $this->vista('Usuario/registros');
    }
    public function Registro()
    {
        $this->vista('Usuario/registrar');

    }
}

?>