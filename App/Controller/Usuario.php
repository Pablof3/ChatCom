<?php
namespace Controller;
use Library;
class Usuario extends Library\Controller
{
    public function Login()
    {
        $this->vista('Usuario/login');
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
        $this->vista('Master/template');
    }
}

?>